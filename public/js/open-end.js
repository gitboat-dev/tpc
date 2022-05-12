jQuery(document).ready(function($){
    sec1();
    sec2();
    sec3();
    sec4();
    sec5();
    $(window).resize(function(event) {
        sec1();
        sec2();
        sec3();
        sec4();
        sec5();
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
	var row1 = jQuery('#sec4 .r1 .col1 .content_block'),
		row2 = jQuery('#sec4 .r1 .col2 .content_block'),
		minheight = jQuery(row2).outerHeight();
        console.log(minheight);
	if(jQuery(window).width() <= 991){
		jQuery(row1).removeAttr('style');
	}else{
		jQuery(row1).css({'min-height':minheight+'px'});
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
