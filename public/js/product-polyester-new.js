jQuery(document).ready(function($){
    sec1_slide();
    $('div.burger-menu').on('click',function(){
        if($(this).hasClass('change')){
            setTimeout(function(){
                sec1_slide(1);
            },1000);
        }
    });
});
function sec1_slide(reload = 0){
    owl = $('#sec1 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        margin:0,
        nav:true,
		navText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        dots:false,
        items:1,
        animateOut: 'fadeOut',
    });
    if(reload > 0){
        owl.trigger('refresh.owl.carousel');
    }
}
