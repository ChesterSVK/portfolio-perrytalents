;(function ($) {

    'use strict'

    function initTimelineCarousel() {
        var owl = $(".owl-carousel.timeline-carousel").owlCarousel(
            {
                items:4,
                lazyLoad:true,
                stagePadding: 200,
                autoWidth:true,
                rewind: true,
                margin: 0,
                autoplay:true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1
                    },
                    415:{
                        items:2
                    },
                    767:{
                        items:3
                    },
                    991:{
                        items:4
                    }
                }
            }
        );
        owl.trigger('stop.owl.autoplay');
        owl.stop();

        $(window).scroll(function()
        {
            var owl = $(".owl-carousel.timeline-carousel");
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
        var docViewTop = $(window).scrollTop() - 200;
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom) && (elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    // Dom Ready
    $(function () {
        initTimelineCarousel();

    });

    $( window ).resize(function() {

    });

})(jQuery);