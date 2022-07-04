$(document).ready(function(){
    $('#sec6').onScrolledTo(0,function(){
        slide_sec6();
	});
});
function slide_sec6(){
    $('#sec6 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:0,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:true,
        items:1,
    });
}
