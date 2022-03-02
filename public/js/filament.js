jQuery(document).ready(function($){
    secthree();
	secfive();
	$(window).resize(function(event) {
        secthree();
		secfive();
	});
});
function secthree(){
    let block1 = jQuery('#filament .section-three .r1 .col1 .col1-2'),
        block2 = jQuery('#filament .section-three .r1 .col1 .col1-3'),
        block3 = jQuery('#filament .section-three .r1 .col2'),
        minheight = jQuery(block2).outerHeight();
    if(jQuery(window).width() <= 991){
        jQuery(block1).removeAttr('style');
        block2.find('.image_block').append(block3.find('.image_block .img_block1'));
    }else{
        jQuery(block1).css({'min-height':minheight+'px'});
        block3.find('.image_block').append(block2.find('.image_block .img_block1'));
    }
}
function secfive(){
	var block1 = jQuery('.section-five > .r1 > .col1 > .content_1'),
		block2 = jQuery('.section-five > .r1 > .col3 > .content_1'),
		gimg1 = jQuery('.section-five .content_1 > .g_image1'),
		gimg2 = jQuery('.section-five .content_1 > .g_image2'),
		gcontent1 = jQuery('.section-five .content_1 > .g_content1'),
		gcontent2 = jQuery('.section-five .content_1 > .g_content2');
	if(jQuery( window ).width() <= 768){
		jQuery(gimg2).appendTo(block1);
		jQuery(gcontent1).appendTo(block1);
		jQuery(gimg1).appendTo(block2);
		jQuery(gcontent2).appendTo(block2);
	}else{
		jQuery(gcontent1).appendTo(block1);
		jQuery(gimg1).appendTo(block1);
		jQuery(gimg2).appendTo(block2);
		jQuery(gcontent2).appendTo(block2);
	}
}
