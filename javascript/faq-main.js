;(function ($) {

    'use strict';

    function initFAQ($holder){
        $holder.find('.faq-header').click(function (event) {
            event.preventDefault();
            if (!($(this).parent().hasClass('opened'))){
                $('.card-header').removeClass('opened');
                $('.collapse').removeClass('in');
            }
            if ($(this).parent().hasClass('opened')){
                $(this).parent().stop().removeClass('opened')
            }
            else {
                $(this).parent().stop().addClass('opened')
            }
        })
    }



    $(document).ready(function () {
        initFAQ($('#accordion'));
    });
})(jQuery);