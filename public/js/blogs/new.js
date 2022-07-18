$(document).ready(function(){
    $('#sec1').onScrolledTo(0,function(){
        slide_sec1();
	});
    $('div.burger-menu').on('click',function(){
        if($(this).hasClass('change')){
            setTimeout(function(){
                slide_sec1(1);
            },1000);
        }
    });
});
function slide_sec1(reload = 0){
    let owl = $('#sec1 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
        animateOut: 'fadeOut',
    });
    if(reload > 0){
        owl.trigger('refresh.owl.carousel');
    }
}
