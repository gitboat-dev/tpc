jQuery(document).ready(function($){
	var video1 =$('#video1')[0],
		btn_play1 = $('#btn-video1');
	sectwo();
	secthree();
	secfour();
	secfive();
	secsix();
	setTimeout(function(){
		secseven();
		seceight();
		secnine();
		secten();
	},1000);
	$(window).resize(function(event) {
		sectwo();
		secthree();
		secfour();
		secfive();
		secsix();
		secten();
		setTimeout(function(){
			secseven();
			seceight();
			secnine();
		},500);
	});
	$(window).scroll(function(){
		secthree();
		secfour();
		secsix();
		secseven();
		seceight();
		secnine();
		v_scroll(video1,btn_play1,$('.section-two'),480);
	});
	$(btn_play1).click(function(){
		btn_play(video1,this);
	});
	$('#video1').click(function(){
		if (!video1.paused) {
			btn_paused(video1,btn_play1);
		}else{
			btn_play(video1,btn_play1);
		}
	});
});
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
		box_next = box.next('div'),
		start = parseInt(box.offset().top) - pointer;
		stop = parseInt(box_next.offset().top) - pointer;
	if(document.documentElement.scrollTop > start && document.documentElement.scrollTop < stop){
		btn_play(video,btn);
	}else{
		btn_paused(video,btn);
	}
}
function sectwo(){
	var row1 = jQuery('.section-two .r1 .col1'),
		row2 = jQuery('.section-two .r1 .col2'),
		minheight1 = jQuery(row1).height();
	if(jQuery( window ).width() <= 868){
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight1+'px'});
	}
}
function secthree(){
	var block1 = jQuery('.section-three .r1'),
		row1 = jQuery('.section-three .r1 .col1'),
		row2 = jQuery('.section-three .r1 .col2'),
		minheight1 = jQuery(row2).height();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row1).css({'min-height':minheight1+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}
}
function secfour(){
	var row1 = jQuery('.section-four .r1 .col1'),
		row2 = jQuery('.section-four .r1 .col2'),
		row3 = jQuery('.section-four .r1 .col3'),
		minheight = jQuery(row1).height();
	if(jQuery( window ).width() <= 991){
		jQuery(row2).removeAttr('style');
		jQuery(row3).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
		jQuery(row3).css({'min-height':minheight+'px'});
	}
}
function secfive(){
	var block1 = jQuery('.section-five .r1'),
		row1 = jQuery('.section-five .r1 .col1'),
		row2 = jQuery('.section-five .r1 .col2'),
		row3 = jQuery('.section-five .r1 .col3'),
		row4 = jQuery('.section-five .r1 .col4'),
		minheight = jQuery(row2).height();
	if(jQuery( window ).width() <= 991){
		jQuery(row4).removeAttr('style');
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
		jQuery(row3).appendTo(block1);
		jQuery(row4).appendTo(block1);
	}else{
		jQuery(row4).css({'min-height':minheight+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
		jQuery(row3).appendTo(block1);
		jQuery(row4).appendTo(block1);
	}
}
function secsix(){
	var row1 = jQuery('.section-six .r1 .col1'),
		row2 = jQuery('.section-six .r1 .col2'),
		row3 = jQuery('.section-six .r1 .col3'),
		minheight1 = jQuery(row1).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).removeAttr('style');
		jQuery(row3).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight1+'px'});
		jQuery(row3).css({'min-height':minheight1+'px'});
	}
}
function secseven(){
	var image = jQuery('.section-seven .r1 .col2 .col2-2 .img_block1 img'),
		image_block = jQuery('.section-seven .r1 .imbcol-2-2'),
		content2_2 = jQuery('.section-seven .r1 .ctcol-2-2'),
		block1 = jQuery('.section-seven .r1 .col1'),
		block2 = jQuery('.section-seven .r1 .col2'),
		row1_1 = jQuery('.section-seven .r1 .col1-1'),
		row1_2 = jQuery('.section-seven .r1 .col1-2'),
		row1_3 = jQuery('.section-seven .r1 .col1-3'),
		row2_1 = jQuery('.section-seven .r1 .col2-1'),
		row2_2 = jQuery('.section-seven .r1 .col2-2'),
		row2_3 = jQuery('.section-seven .r1 .col2-3');
		minheight2 = jQuery(image).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row2_1).removeAttr('style');
		jQuery(row2_2).removeAttr('style');
		jQuery(content2_2).appendTo(row2_3);
		jQuery(row1_1).appendTo(block1);
		jQuery(row2_1).appendTo(block1);
		jQuery(row1_2).appendTo(block1);
		jQuery(row1_3).appendTo(block2);
		jQuery(row2_3).appendTo(block2);
	}else{
		jQuery(row2_1).css({'min-height':minheight2+'px'});
		jQuery(row2_2).css({'min-height':minheight2+'px'});
		jQuery(image_block).appendTo(row2_2);
		jQuery(content2_2).appendTo(row2_2);
		jQuery(row1_1).appendTo(block1);
		jQuery(row1_2).appendTo(block1);
		jQuery(row1_3).appendTo(block1);
		jQuery(row2_1).appendTo(block2);
		jQuery(row2_2).appendTo(block2);
		jQuery(row2_3).appendTo(block2);
	}
}
function seceight(){
	var image_block = jQuery('.section-eight .r1 .col2 .col2-2 .img_block1'),
		block1 = jQuery('.section-eight .r1 .col2'),
		block2 = jQuery('.section-eight .r1 .col3'),
		row2_1 = jQuery('.section-eight .r1 .col2-1'),
		row2_2 = jQuery('.section-eight .r1 .col2-2'),
		row2_3 = jQuery('.section-eight .r1 .col2-3'),
		row3_1 = jQuery('.section-eight .r1 .col3-1'),
		row3_2 = jQuery('.section-eight .r1 .col3-2'),
		row3_3 = jQuery('.section-eight .r1 .col3-3'),
		minheight1 = jQuery(image_block).outerHeight() / 2;
	if(jQuery( window ).width() <= 991){
		jQuery(row2_1).removeAttr('style');
		jQuery(row2_2).removeAttr('style');
		jQuery(row2_3).removeAttr('style');
		jQuery(row3_1).removeAttr('style');
		jQuery(row3_2).removeAttr('style');
		jQuery(row3_3).removeAttr('style');

		jQuery(row2_1).appendTo(block1);
		jQuery(row3_1).appendTo(block1);
		jQuery(row2_2).appendTo(block1);
		jQuery(row2_3).appendTo(block1);
		jQuery(row3_2).appendTo(block2);
		jQuery(row3_3).appendTo(block2);
	}else{
		jQuery(row2_1).css({'min-height':minheight1+'px'});
		jQuery(row2_2).css({'min-height':minheight1+'px'});
		jQuery(row2_3).css({'min-height':minheight1+'px'});
		jQuery(row3_1).css({'min-height':minheight1+'px'});
		jQuery(row3_2).css({'min-height':minheight1+'px'});
		jQuery(row3_3).css({'min-height':minheight1+'px'});

		jQuery(row2_1).appendTo(block1);
		jQuery(row2_2).appendTo(block1);
		jQuery(row2_3).appendTo(block1);
		jQuery(row3_1).appendTo(block2);
		jQuery(row3_2).appendTo(block2);
		jQuery(row3_3).appendTo(block2);
	}
}
function secnine(){
	var block1 = jQuery('.section-nine .r1'),
		row1 = jQuery('.section-nine .r1 .col1'),
		row2 = jQuery('.section-nine .r1 .col2'),
		minheight = jQuery(row2).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row1).css({'min-height':minheight+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}
}
function secten(){
	var block1 = jQuery('.section-ten .r1'),
		row1 = jQuery('.section-ten .r1 .col1'),
		row2 = jQuery('.section-ten .r1 .col2');
	if(jQuery( window ).width() <= 768){
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}
}