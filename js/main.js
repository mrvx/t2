(function($) {
$.fn.scrollGo=function() {
    o = $(this).offset();
    if(o){
        var x = o.top - 100;
        $('html,body').animate({scrollTop: x}, 500);
    }
}

$(document).ready(function() {

    $("#campaign_terms_close, #campaing_terms_link").click(function () {
        $("#campaign_terms, #campaign_overlay").fadeToggle('fast');
        $('#campaign_terms_close').scrollGo();
        return false;
    });

    $(".third .termLink").click(function () {
        $("#campaign_terms, #campaign_overlay").fadeToggle('fast');
      $('#phoneTerms').scrollGo()
      return false;
  });

   
var argumentOwl = $('.argumentSlider');

    $(argumentOwl).owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
             500:{
                items:2
            },
            768:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });


     $('.arguments').find(".owlPrev").click(function(){
        argumentOwl.trigger("next.owl.carousel");
    });
    $('.arguments').find(".owlNext").click(function(){
        argumentOwl.trigger("prev.owl.carousel");
    });







    var campBanner = $('.campBanSlider');

    $(campBanner).owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items: 1
    });



var newsOwl = $('.newsSlider');

    $(newsOwl).owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
             500:{
                items:2
            },
            768:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });


     $('.news').find(".owlPrev").click(function(){
        newsOwl.trigger("next.owl.carousel");
    });
    $('.news').find(".owlNext").click(function(){
        newsOwl.trigger("prev.owl.carousel");
    });






});


})( jQuery );