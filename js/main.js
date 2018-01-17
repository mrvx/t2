(function($) {
    $.fn.scrollGo = function() {
        o = $(this).offset();
        if (o) {
            var x = o.top - 100;
            $('html,body').animate({
                scrollTop : x
            }, 500);
        }
    }

    $(document).ready(function() {

        $("#campaign_terms_close, #campaing_terms_link").click(function () {
            $("#campaign_terms, #campaign_overlay").fadeToggle('fast');
            $('#campaign_terms_close').scrollGo();
            return false;
        });

       

    });

})(jQuery);
