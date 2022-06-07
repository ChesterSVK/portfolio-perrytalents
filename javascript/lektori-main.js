;(function ($) {

    'use strict';

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

    var showMoreElements = function(){
        var $container = $('.portfolio-wrap');
        if (isMobile.any()){
            var $elements = $(".item-copy:hidden").slice(0, 3);
        }
        else
        {
            var $elements = $(".item-copy:hidden").slice(0, 9);
        }
        $elements.removeClass('item-copy');
        $elements.addClass('item');
        $elements.removeClass('hidden');
        $elements.find('.lector-company').removeClass('hidden');
        $elements.slideDown();
        $container.isotope( 'appended', $elements );
        if ($(".item-copy:hidden").length == 0) {
            $("#lectorsCollapseBtn").fadeOut('slow');
            $("#lectorsMore").fadeIn('slow');
        }
    };

    $(document).ready(function () {
        showMoreElements();
        $("#lectorsCollapseBtn").on('click', function (e) {
            e.preventDefault();
            showMoreElements();
        });
    })

})(jQuery);