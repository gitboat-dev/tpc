jQuery(document).ready(function($){
	sectwo();
	secfive();
	setTimeout(function(){
		secthree();
		secfour();
	},800);
	$(window).resize(function(event) {
		sectwo();
		secthree();
		secfour();
		secfive();
	});
	$(window).scroll(function(){
		secfour();
	});
});
function sectwo(){
	var row1 = jQuery('.section-two .r1 .col1'),
		row2 = jQuery('.section-two .r1 .col2'),
		row3 = jQuery('.section-two .r1 .col3'),
		minheight1 = jQuery(row3).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row1).css({'min-height':minheight1+'px'});
		jQuery(row2).css({'min-height':minheight1+'px'});
	}
}
function secthree(){
	var row1 = jQuery('.section-three .r1 .col1'),
		row2 = jQuery('.section-three .r1 .col2'),
		minheight1 = jQuery(row1).outerHeight(),
		minheight2 = jQuery(row2).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row1).css({'min-height':minheight2+'px'});
		jQuery(row2).css({'min-height':minheight1+'px'});
	}
}
function secfour(){
	var row1 = jQuery('.section-four .r1 .col1'),
		h2 = jQuery('.section-four .r1 .col1 .col1-1 h2'),
		row1_1 = jQuery('.section-four .r1 .col1 .col1-1'),
		row2 = jQuery('.section-four .r1 .col2'),
		row3 = jQuery('.section-four .r1 .col3'),
		minheight1 = jQuery(row1).outerHeight(),
		minheight_h2 = jQuery(h2).outerHeight(),
		minheight2 = jQuery(row2).outerHeight();
	if(jQuery(window).width() >= 1358){
		jQuery(row1).css({'min-height':minheight2+'px'});
		jQuery(row1_1).css({'min-height':minheight_h2+'px'});
		jQuery(row3).css({'min-height':minheight2+'px'});
	}else if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).removeAttr('style');
		jQuery(row3).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight1+'px'});
		jQuery(row1_1).css({'min-height':minheight_h2+'px'});
		jQuery(row3).css({'min-height':minheight1+'px'});
	}
}
function secfive(){
	var row2 = jQuery('.section-five .r1 .col2'),
		row3 = jQuery('.section-five .r1 .col3'),
		minheight1 = jQuery(row2).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row3).removeAttr('style');
	}else{
		jQuery(row3).css({'min-height':minheight1+'px'});
	}
}