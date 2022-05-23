let inqbg="TPC",
	inqKey="13bcbc8d49ee223937c008c63bd235f3",
	inqRequest="inquiry-request",
	inqhas="xyz";
jQuery(document).ready(function($){
    $('#sec3').onScrolledTo(0,function(){
        sec3_slide();
	});
});
function sec3_slide(){
    $('#sec3 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
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
