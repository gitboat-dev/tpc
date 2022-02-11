jQuery(document).ready(function($){
	sectwo();
	secthree();
	secfour();
	secfive();
	secsix();
	$(window).resize(function(event) {
		sectwo();
		secthree();
		secfour();
		secfive();
		secsix();
	});
	$(window).scroll(function(){
		secfive();
		secsix();
	});
});
function sectwo(){
	var row1 = jQuery('.section-two .r1 .col1'),
		row1_1 = jQuery('.section-two .r1 .col1 .content_block .col1-1'),
		row2 = jQuery('.section-two .r1 .col2'),
		row2_1 = jQuery('.section-two .r1 .col2 .content_block .col2-1'),
		title = jQuery('.section-two .r1 h2.section-two-title'),
		minheight1 = jQuery(row1).outerHeight(),
		minheight2 = jQuery(row2).outerHeight();
	if(jQuery( window ).width() <= 768){
		jQuery(row1).removeAttr('style');
		jQuery(row2).removeAttr('style');
		jQuery(title).appendTo(row1_1);
	}else{
		jQuery(row1).css({'min-height':minheight2+'px'});
		jQuery(row2).css({'min-height':minheight1+'px'});
		jQuery(title).appendTo(row2_1);
	}
}
function secthree(){
	var block1 = jQuery('.section-three .r1'),
		row1 = jQuery('.section-three .r1 .col1'),
		row2 = jQuery('.section-three .r1 .col2'),
		row3 = jQuery('.section-three .r1 .col3'),
		minheight1 = jQuery(row2).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row3).removeAttr('style');
		jQuery(row1).appendTo(block1);
		jQuery(row3).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}else{
		jQuery(row3).css({'min-height':minheight1+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
		jQuery(row3).appendTo(block1);
	}
}
function secfour(){
	var block1 = jQuery('.section-four .r1'),
		row1 = jQuery('.section-four .r1 .col1'),
		row2 = jQuery('.section-four .r1 .col2'),
		row3 = jQuery('.section-four .r1 .col3'),
		row4 = jQuery('.section-four .r1 .col4'),
		minheight1 = jQuery(row2).outerHeight(),
		minheight2 = jQuery(row3).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row2).removeAttr('style');
		jQuery(row3).removeAttr('style');
		jQuery(row4).removeAttr('style');
		jQuery(row1).appendTo(block1);
		jQuery(row3).appendTo(block1);
		jQuery(row2).appendTo(block1);
		jQuery(row4).appendTo(block1);
	}else{
		jQuery(row2).css({'min-height':minheight2+'px'});
		jQuery(row3).css({'min-height':minheight1+'px'});
		jQuery(row4).css({'min-height':minheight2+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
		jQuery(row3).appendTo(block1);
		jQuery(row4).appendTo(block1);
	}
}
function secfive(){
	var row2_1 = jQuery('.section-five .r1 .col2 .col2-1'),
		row2_2 = jQuery('.section-five .r1 .col2 .col2-2'),
		block3 = jQuery('.section-five .r1 .col3'),
		row3_1 = jQuery('.section-five .r1 .col3 .col3-1'),
		row3_2 = jQuery('.section-five .r1 .col3 .col3-2'),
		minheight1 = jQuery(row2_1).outerHeight(),
		minheight2 = jQuery(row2_2).outerHeight(),
		minheight3 = jQuery(row3_1).outerHeight(),
		minheight4 = jQuery(row3_2).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row2_1).removeAttr('style');
		jQuery(row2_2).removeAttr('style');
		jQuery(row3_1).removeAttr('style');
		jQuery(row3_2).removeAttr('style');

		jQuery(row3_2).appendTo(block3);
		jQuery(row3_1).appendTo(block3);
	}else{
		jQuery(row2_1).css({'min-height':minheight2+'px'});
		jQuery(row2_2).css({'min-height':minheight1+'px'});
		jQuery(row3_1).css({'min-height':minheight4+'px'});
		jQuery(row3_2).css({'min-height':minheight3+'px'});

		jQuery(row3_1).appendTo(block3);
		jQuery(row3_2).appendTo(block3);
	}
}
function secsix(){
	var row1 = jQuery('.section-six .r1 .col1'),
		row2 = jQuery('.section-six .r1 .col2'),
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