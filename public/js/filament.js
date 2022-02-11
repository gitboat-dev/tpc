jQuery(document).ready(function($){
	secfive();
	$(window).resize(function(event) {
		secfive();
	});
});
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