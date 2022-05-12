jQuery(document).ready(function($){
    var video1 =$('#video1')[0],
		btn_play1 = $('#btn-video1');
    sec1();
    sec2();
    sec3();
    sec4();
    sec4_img_thumb();
    sec5();
    $(window).resize(function(event) {
        sec1();
        sec2();
        sec3();
        sec4();
        sec4_img_thumb();
        sec5();
    });
    $('#sec1').onScrolledTo(0,function(){
        sec1();
	});
    $('#sec2').onScrolledTo(0,function(){
        sec2();
	});
    $('#sec3').onScrolledTo(0,function(){
        sec3();
	});
    $('#sec4').onScrolledTo(0,function(){
        sec4();
        sec4_img_thumb();
	});
    $('#sec5').onScrolledTo(0,function(){
        sec5();
	});
    $(window).scroll(function(){
        v_scroll(video1,btn_play1,$('#sec3'),480);
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
});
function sec1(){
	var row1 = jQuery('#sec1 .r1 .col1 .content_block'),
		row2 = jQuery('#sec1 .r1 .col2 .content_block'),
		minheight = jQuery(row1).outerHeight();
	if(jQuery(window).width() <= 991){
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
	}
}
function sec2(){
	var row1 = jQuery('#sec2 .r1 .col1 .content_block'),
		row2 = jQuery('#sec2 .r1 .col2 .content_block'),
		minheight = jQuery(row1).outerHeight();
	if(jQuery(window).width() <= 991){
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
	}
}
function sec3(){
	var row1 = jQuery('#sec3 .r1 .col1 .content_block'),
		row2 = jQuery('#sec3 .r1 .col2 .content_block'),
		minheight = jQuery(row1).outerHeight();
	if(jQuery(window).width() <= 991){
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
	}
}
function sec4(){
	var row1 = jQuery('#sec4 .r1 .col1'),
		row2 = jQuery('#sec4 .r1 .col2 .content_block'),
		minheight = jQuery(row2).outerHeight();
	if(jQuery(window).width() <= 991){
		jQuery(row1).removeAttr('style');
	}else{
		jQuery(row1).css({'min-height':minheight+'px'});
	}
}
function sec4_img_thumb(){
    var row1 = jQuery('#sec4 .r1 .col1 .img-thumb'),
		row3 = jQuery('#sec4 .r1 .col3 .img-thumb');
    if(jQuery(window).width() <= 991){
        jQuery(row1).find('.thumb-nail').appendTo(row3);
    }else{
        jQuery(row3).find('.thumb-nail').appendTo(row1);
    }
}
function sec5(){
    var row1 = jQuery('#sec5 .r1 .col1 .content_block'),
        text_block = jQuery('#sec5 .r1 .col1 .content_block .text-block'),
        minheight = jQuery(row1).outerHeight();
    if(jQuery(window).width() <= 1132){
        jQuery(text_block).removeAttr('style');
    }else{
        jQuery(text_block).css({'min-height':minheight+'px'});
    }
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
