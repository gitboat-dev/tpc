jQuery(document).ready(function($){
    var video1 =$('#video1')[0],
		btn_play1 = $('#btn-video1');
    sec1();
    $(window).resize(function(event) {
        sec1();
    });
    $('#sec1').onScrolledTo(0,function(){
        sec1();
	});
    $('#sec3').onScrolledTo(0,function(){
        sec3_slide();
	});
    $('#sec6').onScrolledTo(0,function(){
        sec6_slide();
	});
    $('#sec7').onScrolledTo(0,function(){
        sec7_slide();
	});
    $(window).scroll(function(){
        v_scroll(video1,btn_play1,$('#sec1'),480);
    });
    $('figure.btn-play').click(function(){
        if (!video1.paused) {
			btn_paused(video1,btn_play1);
		}else{
			btn_play(video1,btn_play1);
		}
    });
    $('#video1').click(function(){
		if (!video1.paused) {
			btn_paused(video1,btn_play1);
		}else{
			btn_play(video1,btn_play1);
		}
	});


    $('#sec7 .slide .owl-carousel').on("changed.owl.carousel", function(e) {
        console.log('center item is:'+ (e.item.index + 1));
    });
});
function sec1(){
    var row1 = jQuery('#sec1 .r1 .col1 .content_block'),
		row2 = jQuery('#sec1 .r1 .col2 .content_block'),
		minheight = jQuery(row2).outerHeight();
	if(jQuery(window).width() <= 991){
		jQuery(row1).removeAttr('style');
	}else{
		jQuery(row1).css({'min-height':minheight+'px'});
	}
}
function sec3_slide(){
    $('#sec3 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1,
                stagePadding: 20,
            },
            991:{
                items:2,
            },
            1000:{
                items:2,
            }
        }
    });
}
function sec6_slide(){
    $('#sec6 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        nav:true,
		navText : ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        dots:true,
        items:1,
    });
}
function sec7_slide(){
    $('#sec7 .slide .owl-carousel').owlCarousel({
        // center: true,
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        nav:false,
		navText : ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1,
                stagePadding: 20,
            },
            991:{
                items:3,
                // stagePadding: 20,
            },
            1000:{
                items:5,
            }
        }
    });
}
function btn_play(video,btn) {
	if (video.paused) {
        video.play();
        jQuery(btn).css({'display':'none'});
    }
}
function btn_paused(video,btn) {
	if(!video.paused){
        video.pause();
        jQuery(btn).css({'display':'block'});
    }
}
function v_scroll(video,btn,selector,pointer=0){
	var box = jQuery(selector),
		box_next = box.next('section'),
		start = parseInt(box.offset().top) - pointer;
		stop = parseInt(box_next.offset().top) - pointer;
	if(document.documentElement.scrollTop > start && document.documentElement.scrollTop < stop){
		btn_play(video,btn);
	}else{
		btn_paused(video,btn);
	}
}
