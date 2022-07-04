$(document).ready(function(){
    $('#sec5').onScrolledTo(0,function(){
        slide_sec5();
	});
    $('#sec6').onScrolledTo(0,function(){
        slide_sec6();
	});
});
function slide_sec5(){
    $('#sec5 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:0,
        rewind:true,
        nav:false,
		navText : ["", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
    });
}
function slide_sec6(){
    $('#sec6 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
        responsive:{
            280:{
                items:1,
                stagePadding: 30,
            },
            991:{
                items:1,
                stagePadding: 250,
            },
            1410:{
                items:1,
                stagePadding: 450,
            }
        }
    });
}
