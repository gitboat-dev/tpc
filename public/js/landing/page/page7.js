$(document).ready(function(){
    $('#sec7').onScrolledTo(0,function(){
        slide_sec7();
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
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
    });
}
