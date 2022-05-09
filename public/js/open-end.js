jQuery(document).ready(function($){
    sec1();
    $(window).resize(function(event) {
        sec1();
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
