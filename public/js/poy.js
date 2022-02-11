jQuery(document).ready(function($){
	setTimeout(function(){
		secone();
	},500);
	secfour();
	$(window).resize(function(event) {
		secone();
		secfour();
	});
	$(window).scroll(function(){
		secone();
		secfour();
	});
});
function secone(){
	var block = jQuery('.section-one .r1'),
		row1 = jQuery('.section-one .r1 .col1'),
		row2 = jQuery('.section-one .r1 .col2'),
		minheight = jQuery(row1).height();
		if(jQuery( window ).width() <= 768){
			jQuery(row2).css({'min-height':minheight+'px'});
		}else{
			jQuery(row2).css({'min-height':minheight+'px'});
		}
}
function secfour(){
	var block = jQuery('.section-four .r2'),
		row1 = jQuery('.section-four .r2 .col1'),
		row2 = jQuery('.section-four .r2 .col2'),
		row3 = jQuery('.section-four .r2 .col3'),
		minheight = jQuery(row1).height();
		if(jQuery( window ).width() <= 768){
			jQuery(row2).appendTo(block);
			jQuery(row1).appendTo(block);
			jQuery(row3).appendTo(block);
			jQuery(row2).css({'min-height':'unset'});
		}else{
			jQuery(row1).appendTo(block);
			jQuery(row2).appendTo(block);
			jQuery(row3).appendTo(block);
			jQuery(row2).css({'min-height':minheight+'px'});
		}
}