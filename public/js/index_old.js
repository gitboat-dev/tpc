jQuery(document).ready(function($){
	secfive();
	secsix();
	setTimeout(function(){
		seceight();
	},1000);
	$(window).resize(function(event) {
		secfive();
		secsix();
		setTimeout(function(){
			seceight();
		},1000);
	});
	$(window).scroll(function(){
		seceight();
	});
	var video1 = $('#video1')[0],
		btn_play1 = $('#btn-video1');
	$(btn_play1).click(function(){
		btn_play(video1,btn_play1);
	});
	$('#video1').click(function(){
		if (!video1.paused) {
			btn_paused(video1,btn_play1);
		}else{
			btn_play(video1,btn_play1);
		}
	});
	$(window).scroll(function(event){
		secfive();
		v_scroll(video1,btn_play1,$('.section-two'),480);
	});
	$('.section-seven .arrow-block img').click(function() {
		var block = $(this).parents('div.arrow-block').prev('div.content_1');
		if($(block).is(":visible")){
			$(block).slideUp(400);
			$(this).addClass('rotate');
		}else{
			$(block).slideDown(400);
			$(this).removeClass('rotate');
		}
	});
});
function secfive(){
	var slide_height = jQuery('.section-five div.vc_row').height(),
		content = jQuery('.section-five div.content_1');
	jQuery(content).css({'min-height': slide_height+'px'});
}
function secsix(){
	var block1 = jQuery('.section-six .r1'),
		content1 = jQuery('.section-six .r1 > .col1'),
		content2 = jQuery('.section-six .r1 > .col2'),
		content3 = jQuery('.section-six .r1 > .col3');
	if(jQuery(window).width() <= 768){
		jQuery(content2).appendTo(block1);
		jQuery(content3).appendTo(block1);
		jQuery(content1).appendTo(block1);
	}else{
		jQuery(content1).appendTo(block1);
		jQuery(content2).appendTo(block1);
		jQuery(content3).appendTo(block1);
	}
}
function seceight(){
	var block1 = jQuery('.section-eight .r1 > .col1 > .content_1'),
		content1 = jQuery('.section-eight .r1 > .col1 > .content_1 > .col1_1'),
		content2 = jQuery('.section-eight .r1 > .col1 > .content_1 > .col1_2'),
		content3 = jQuery('.section-eight .r1 > .col1 > .content_1 > .col1_3'),
		img2 = content2.find('img'),
		img3 = content3.find('img'),
		minheight1 = jQuery(content1).outerHeight();
	if(jQuery(window).width() <= 991){
		minheight1 = minheight1 / 2;
		jQuery(content1).appendTo(block1);
		jQuery(content3).appendTo(block1);
		jQuery(content2).appendTo(block1);		
		jQuery(content2).css({'padding':'5px'});
		jQuery(content3).css({'padding':'5px'});
		jQuery(content2).removeAttr('style');
		jQuery(content3).removeAttr('style');
		jQuery(img2).css({'max-height':minheight1+'px'});
		jQuery(img3).css({'max-height':minheight1+'px'});
	}else{
		jQuery(content1).appendTo(block1);
		jQuery(content2).appendTo(block1);
		jQuery(content3).appendTo(block1);
		jQuery(content2).removeAttr('style');
		jQuery(content3).removeAttr('style');
		jQuery(content2).css({'min-height':minheight1+'px'});
		jQuery(content3).css({'min-height':minheight1+'px'});
		jQuery(img2).removeAttr('style');
		jQuery(img3).removeAttr('style');
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
		box_next = box.next('div'),
		start = parseInt(box.offset().top) - pointer;
		stop = parseInt(box_next.offset().top) - pointer;
	if(document.documentElement.scrollTop > start && document.documentElement.scrollTop < stop){
		btn_play(video,btn);
	}else{
		btn_paused(video,btn);
	}
}