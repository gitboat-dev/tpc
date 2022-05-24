let inqbg="TPC",
	inqKey="13bcbc8d49ee223937c008c63bd235f3",
	inqRequest="inquiry-request",
	inqhas="xyz";
jQuery(document).ready(function($){
    $('#sec3').onScrolledTo(0,function(){
        sec3_slide();
	});
    $('#sec5').onScrolledTo(0,function(){
        sec5_slide();
	});
    $('#sec7').onScrolledTo(0,function(){
        sec7_slide();
	});
});
function sec3_slide(){
    $('#sec3 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
    });
}
function sec5_slide(){
    $('#sec5 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1,
            },
            640:{
                items:1,
            },
            991:{
                items:2,
            },
            1024:{
                items:3,
            },
        }
    });
}
function sec7_slide(){
    $('#sec7 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:30,
        rewind:true,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1,
                stagePadding: 25,
            },
            640:{
                items:1,
                stagePadding: 25,
            },
            991:{
                items:2,
                stagePadding: 25,
            },
            1024:{
                items:3,
                stagePadding: 25,
            },
        }
    });
}
