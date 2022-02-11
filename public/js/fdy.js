jQuery(document).ready(function($){
	sectwo();
	secthree();
	secfour();
	secfive();
	secseven();
	seceight();
	$(window).resize(function(event) {
		sectwo();
		secthree();
		secfour();
		secfive();
		secseven();
		seceight();
	});
	$(window).scroll(function(){
		sectwo();
		secfour();
		secseven();
		seceight();
	});
});
function sectwo(){
	var row1 = jQuery('.section-two .r1 .col1'),
		row2 = jQuery('.section-two .r1 .col2'),
		minheight = jQuery(row1).height();
	if(jQuery( window ).width() <= 868){
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
	}
}
function secthree(){
	var block1 = jQuery('.section-three .r1 .col1'),
		block2 = jQuery('.section-three .r1 .col2'),
		row1 = jQuery('.section-three .r1 .content_1');
	if(jQuery( window ).width() <= 868){
		jQuery(row1).appendTo(block2);
	}else{
		jQuery(row1).appendTo(block1);
	}
}
function secfour(){
	var content = jQuery('.section-four .r1 .content_1'),
		image = jQuery('.section-four .r1 .col1 .img_block1'),
		row1 = jQuery('.section-four .r1 .col1'),
		row2 = jQuery('.section-four .r1 .col2'),
		row3 = jQuery('.section-four .r1 .col3'),
		minheight = jQuery(row1).height();
	if(jQuery( window ).width() <= 768){
		jQuery(content).appendTo(row2);
		jQuery(row3).removeAttr('style');
	}else{
		jQuery(content).appendTo(row1);
		jQuery(row3).css({'min-height':minheight+'px'});
	}
}
function secfive(){
	var block1 = jQuery('.section-five .r1 .col1'),
		block2 = jQuery('.section-five .r1 .col2'),
		row1 = jQuery('.section-five .r1 .content_1');
	if(jQuery( window ).width() <= 868){
		jQuery(row1).appendTo(block2);
	}else{
		jQuery(row1).appendTo(block1);
	}
}
function secseven(){
	var row1 = jQuery('.section-seven .r1 .col1'),
		row2 = jQuery('.section-seven .r1 .col2'),
		minheight = jQuery(row1).height();
	if(jQuery( window ).width() <= 992){
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
	}
}
function seceight(){
	var block1 = jQuery('.section-eight .r1'),
		row1 = jQuery('.section-eight .r1 .col1'),
		row2 = jQuery('.section-eight .r1 .col2'),
		minheight = jQuery(row2).height();
	if(jQuery( window ).width() <= 992){
		jQuery(row1).removeAttr('style');
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row1).css({'min-height':minheight+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}
}