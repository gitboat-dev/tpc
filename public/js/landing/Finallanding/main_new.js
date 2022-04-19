$(function(){
    $('#sec7').onScrolledTo(0,function(){
        slide_sec7();
	});
    $('#sec8').onScrolledTo(0,function(){
        slide_sec8();
	});
});
function slide_sec7(){
    $('#sec7 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:0,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:true,
        items:1
    });
}
function slide_sec8(){
    $('#sec8 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:0,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:true,
        items:2
    });
}
function landing_menu(obj){
    $(obj).toggleClass('change');
    $('nav .topnav').toggleClass('show');
}
