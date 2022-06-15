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
        center:true,
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
        onChanged: function (e) {
            let slide = $(e.target).find(".owl-item").eq(e.item.index).find('.item'),
                nav = $('#sec1 .slide .owl-carousel .owl-nav');
            if($(slide).hasClass('head') || $(slide).hasClass('blue')){
                nav.addClass('c-green');
                nav.removeClass('c-white');
            }else if($(slide).hasClass('green')){
                nav.addClass('c-white');
                nav.removeClass('c-green');
            }else{
                nav.addClass('c-green');
                nav.removeClass('c-white');
            }
        },
    });
    if(reload > 0){
        owl.trigger('refresh.owl.carousel');
    }
}
