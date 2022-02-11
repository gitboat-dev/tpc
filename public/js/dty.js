jQuery(document).ready(function($){
	setTimeout(function(){
		sectwo();
		secfour();
		secfive();
		secsix();
		secseven();
	},1000);
	$(window).resize(function(event) {
		secfive();
		setTimeout(function(){
			sectwo();
			secfour();
			secsix();
			secseven();
		},500);
	});
	$(window).scroll(function(){
		secfive();
	});
});
function sectwo(){
	var block = jQuery('.section-two .r1'),
		row1 = jQuery('.section-two .r1 .col1'),
		row2 = jQuery('.section-two .r1 .col2'),
		minheight = jQuery(row2).height();
	jQuery(row1).css({'min-height':minheight+'px'});
	if(jQuery( window ).width() <= 768){
		jQuery(row1).appendTo(block);
	}else{
		jQuery(row1).appendTo(block);
		jQuery(row2).appendTo(block);
	}
}
function secfour(){
	var block = jQuery('.section-four .r1'),
		row1 = jQuery('.section-four .r1 .col1'),
		row2 = jQuery('.section-four .r1 .col2'),
		block1 = jQuery('.section-four .r1 .col1 .r1-1'),
		row1_1 = jQuery('.section-four .r1 .col1 .r1-1 .col1-1'),
		row1_2 = jQuery('.section-four .r1 .col1 .r1-1 .col1-2');
	if(jQuery( window ).width() <= 768){
		jQuery(row1_1).appendTo(block1);
		jQuery(row1).appendTo(block);
	}else{
		jQuery(row1_1).appendTo(block1);
		jQuery(row1_2).appendTo(block1);
		jQuery(row1).appendTo(block);
		jQuery(row2).appendTo(block);
	}
}
function secfive(){
	var row1 = jQuery('.section-five .r1 .col1'),
		row2 = jQuery('.section-five .r1 .col2'),
		minheight = jQuery(row1).height();
	jQuery(row2).css({'min-height':minheight+'px'});
}
function secsix(){
	var row1 = jQuery('.section-six .r1 .col1'),
		row2 = jQuery('.section-six .r1 .col2'),
		minheight = jQuery(row1).height();
	
	if(jQuery( window ).width() <= 768){
		jQuery(row2).css({'min-height':'unset'});
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
	}
}
function secseven(){
	var block = jQuery('.section-seven .r1'),
		row1 = jQuery('.section-seven .r1 .col1'),
		row2 = jQuery('.section-seven .r1 .col2');
		minheight = jQuery(row2).height();
	if(jQuery( window ).width() <= 768){
		jQuery(row1).appendTo(block);
		jQuery(row1).css({'min-height':'unset'});
	}else{
		jQuery(row1).appendTo(block);
		jQuery(row2).appendTo(block);
		jQuery(row1).css({'min-height':minheight+'px'});
	}
}