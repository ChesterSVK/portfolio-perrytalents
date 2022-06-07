;(function ($) {

    'use strict';

    $.event.special.touchstart =
        {
            setup: function( _, ns, handle )
            {
                if ( ns.includes("noPreventDefault") )
                {
                    this.addEventListener("touchstart", handle, { passive: false });
                }
                else
                {
                    this.addEventListener("touchstart", handle, { passive: true });
                }
            }
        };

    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };


    function getJson(config) {
        $.getJSON(config, function (json) {
            // Dom Ready
            $(function () {
                launchCountDown(json.section_index_data.event_starts, json.section_index_data.event_started );
            });
        });
    }


    getJson("config.json");

    var launchCountDown = function (eventStarts, eventStarted, leadingZeros = true) {
        // Set the date we're counting down to
        var countDownDate = new Date(eventStarts).getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (leadingZeros) {
                days = days < 10 ? '0' + days : days;
                hours = hours < 10 ? '0' + hours : hours;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;
            }

            // Display the result in the element with id="demo"
            if (document.getElementById("countdownHeader")){
                document.getElementById("countdownHeader").innerHTML = "";
                document.getElementById("countdownHeader").innerHTML = days + ":" + hours + ":"
                    + minutes + ":" + seconds;
            }

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                if (document.getElementById("countdownHeader")){
                    document.getElementById("countdownHeader").innerHTML = eventStarted;
                }
            }
        }, 1000);
    };

    var responsiveMenu = function () {
        var menuType = 'desktop';

        $(window).on('load resize', function () {
            var currMenuType = 'desktop';

            if (matchMedia('only screen and (max-width: 991px)').matches) {
                currMenuType = 'mobile';

            }

            if (currMenuType !== menuType) {
                menuType = currMenuType;
                if (currMenuType === 'mobile') {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

                    $('#header').after($mobileMenu);
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    $('.btn-menu').removeClass('active');
                    $('.nav-wrap').fadeIn();

                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

                    $desktopMenu.find('.submenu').removeAttr('style');
                    $('#header').find('.nav-wrap').append($desktopMenu);
                    $('.btn-submenu').remove();
                }
            }
        });

        $('.btn-menu').on('click', function () {
            $('#mainnav-mobi').slideToggle(300);
            $(this).toggleClass('active');
        });

        $(document).on('click', '#mainnav-mobi li .btn-submenu', function (e) {
            $(this).toggleClass('active').next('ul').slideToggle(300);
            e.stopImmediatePropagation()
        });
    }

    var headerFixed = function () {
        if ($('body').hasClass('header-sticky')) {
            $('#header').sticky();
        }

        if ($('body').hasClass('header-sticky-v2')) {
            $('#flat-site-navigator').sticky().css({"z-index": 9999999});
        }
    }


    var detectViewport = function () {
        $('[data-waypoint-active="yes"]').waypoint(function () {
            $(this).trigger('on-appear');
        }, {offset: '90%', triggerOnce: true});
    };


    var goTop = function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() >= ($(document).height() - $(window).height() - 20)) {
                $('.go-top').addClass('show');
            } else {
                $('.go-top').removeClass('show');
            }
        });

        $('.go-top').on('click', function () {
            $("html, body").animate({scrollTop: 0}, 1000);
            return false;
        });
    };

    var swClick = function () {
        function activeLayout() {
            $(".switcher-container").on("click", "a.sw-light", function () {
                $(this).toggleClass("active");
                $('body').addClass('home-boxed');
                $('body').css({'background': '#f6f6f6'});
                $('.sw-pattern.pattern').css({"top": "100%", "opacity": 1, "z-index": "10"});
            }).on("click", "a.sw-dark", function () {
                $('.sw-pattern.pattern').css({"top": "98%", "opacity": 0, "z-index": "-1"});
                $(this).removeClass('active').addClass('active');
                $('body').removeClass('home-boxed');
                $('body').css({'background': '#fff'});
                return false;
            })
        }


        function activePattern() {
            $('.sw-pattern').on('click', function () {
                $('.sw-pattern.pattern a').removeClass('current');
                $(this).addClass('current');
                $('body').css({
                    'background': 'url("' + $(this).data('image') + '")',
                    'background-size': '30px 30px',
                    'background-repeat': 'repeat'
                });
                return false
            })
        }

        activeLayout();
        activePattern();
    };


    var removePreloader = function () {
        $('#mainLoader').fadeOut('slow', function () {
            $(this).remove();
        });
    };

    var initSignUpButtons = function(){
        if( isMobile.any() ) {
            var link = $('a.sign-up-btn').data('link');
            $('a.sign-up-btn').attr("href", link);
            $('a.sign-up-btn').attr('target','_blank');

        }
        else {
            $('a.sign-up-btn').addClass('sign-up-typeform');
            $('a.sign-up-typeform').attr("href", "#");
            $('a.sign-up-typeform').attr("data-toggle" , "modal");
            $('a.sign-up-typeform').attr("data-target", "#signUpModal");


            $('a.sign-up-typeform').click(function () {
                (function () {
                    var qs, js, q, s, d = document, gi = d.getElementById, ce = d.createElement,
                        gt = d.getElementsByTagName, id = "typef_orm", b = "https://embed.typeform.com/";
                    if (!gi.call(d, id)) {
                        js = ce.call(d, "script");
                        js.id = id;
                        js.src = b + "embed.js";
                        q = gt.call(d, "script")[0];
                        q.parentNode.insertBefore(js, q)
                    }
                })()
            });
        }

    };

    var fitRows = function () {
        $('.portfolio-wrap').isotope({
            // options
            itemSelector: '.item',
            layoutMode: 'fitRows'
        })
    };

    var initSVG = function (){
        $('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
    };

    var portfolioIsotope = function() {
        if ( $().isotope ) {
            var $container = $('.portfolio-wrap');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });

            $('.portfolio-filter li').on('click',function() {
                var selector = $(this).find("a").attr('data-filter');
                $('.portfolio-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });
        };
    };

    var initImages = function() {
        $('.image-optimized-holder').each(function (index, item) {
            var img_bg = $(item).data().img;
            if ( img_bg != undefined){
                var img_bg_split = img_bg.split(".");
                var size = "";
                if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                    size = '_tablet_';
                }
                if ( matchMedia( 'only screen and (max-width: 767px)' ).matches ) {
                    size = '_mobile_';
                }
                var img_bg_optimized = img_bg_split[0] + size + '.' + img_bg_split[1];
                $(item).css('background', 'url(\"' + img_bg_optimized + '\")');
            }
        })
    };


    // Dom Ready
    $(function () {
        if (matchMedia('only screen and (min-width: 991px)').matches) {
            headerFixed();
        }
        responsiveMenu();

        initSVG();
        swClick();
        goTop();
        detectViewport();
        initSignUpButtons();
        if ( matchMedia( 'only screen and (max-width: 767px)' ).matches ) {
            fitRows();
        }
        portfolioIsotope();

        initImages();

        removePreloader();
    });

    $( window ).resize(function() {
        initImages();
        if ( matchMedia( 'only screen and (max-width: 767px)' ).matches ) {
            fitRows();
        }
    });

})(jQuery);