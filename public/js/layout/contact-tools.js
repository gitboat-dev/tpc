jQuery(document).ready(function($){
	setTimeout(function(){
		jQuery('body .contact-tools').removeClass('important');
		jQuery('.contact-tools > div.drawer-msg').remove();
	},10000);
	jQuery('body .contact-tools > .contact-icon').click(function() {
		jQuery('.contact-tools > div.drawer-msg').remove();
		jQuery('body .contact-tools').toggleClass("open");
		if(jQuery('body .contact-tools').hasClass("important")){
			jQuery('body .contact-tools').removeClass('important');
		}
	});
});
function closeWidgetBubble(obj){
	console.log(obj);
	jQuery(obj).parents('div.drawer-msg').remove();
}