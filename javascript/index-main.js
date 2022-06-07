;(function ($) {

    'use strict'

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

    var slideCount = $('#slider .slider-item').length;
    var slideHeight = $('#slider .slider-item').height();
    var items = $('#slider .slideshow-container .slider-item');
    var currentIndex = 0;
    var slider;

    $('#slider').css({height: slideHeight});

    function moveLeft() {
        $(items).fadeOut();
        currentIndex = currentIndex === 0 ? slideCount-1 : currentIndex - 1;
        $(items[currentIndex]).fadeIn();
    }

    function moveStart() {
        $(items).fadeOut();
        currentIndex = 0;
        $(items[currentIndex]).fadeIn();
    }

    function moveRight() {
        $(items).fadeOut();
        currentIndex = (currentIndex+1) % slideCount;
        $(items[currentIndex]).fadeIn();
    }

    $('a.control_prev').click(function (e) {
        e.preventDefault();
        clearInterval(slider);
        moveLeft();
    });

    $('a.control_next').click(function (e) {
        e.preventDefault();
        clearInterval(slider);
        moveRight();
    });

    function initHarmonogramCarousel() {
        var owl = $(".owl-carousel.timeline-carousel").owlCarousel(
            {
                items:5,
                lazyLoad:true,
                margin: 0,
                stagePadding: 90,
                nav:true,
                autoWidth:true,
                rewind: true,
                autoplay:true,
                autoplayTimeout: 3000,
                autoplayHoverPause: false,
                responsive:{
                    0:{
                        stagePadding: 0,
                        items:3,
                        margin: 0,
                    },
                    415:{
                        stagePadding: 10,
                        items:4,
                        margin: 0,
                    },
                }
            }
        );


        owl.trigger('stop.owl.autoplay');
        owl.stop();

        $(window).scroll(function()
        {
            if(isScrolledIntoView($('#timelineTabs')))
            {
                // owl.play();
                owl.trigger('play.owl.autoplay')
            }
            else {
                owl.trigger('stop.owl.autoplay');
                owl.stop();
            }
        });

    }

    function isScrolledIntoView(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) && (elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }





    // Dom Ready
    $(function () {
        initHarmonogramCarousel();



        moveStart();
        slider = setInterval(function () {
            moveRight();
        }, 4000);
        $('#slider').hover(function () {
            clearInterval(slider)
        }, function () {
            slider = setInterval(function () {
                moveRight();
            }, 4000);
        });




        var owl = $('.news-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay: true,
            navText: [$('.owl-next'),$('.owl-prev')],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })

        owl.owlCarousel();
// Go to the next item
        $('.owl-prev').click(function(e) {
            owl.trigger('next.owl.carousel');
            e.preventDefault()
            return false
        })
// Go to the previous item
        $('.owl-next').click(function(e) {
            owl.trigger('prev.owl.carousel');
            e.preventDefault()
            return false
        })



        var owlTst = $('.tst-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navigation: true,
            dots: true,
            items:2,
            dotClass: 'owl-dot',
            dotsClass: 'owl-dots',
            stopOnHover : true,
            autoplay: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })

        owlTst.owlCarousel();


    });

    $( window ).resize(function() {

    });

})(jQuery);


