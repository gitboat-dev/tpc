jQuery(document).ready(function($){
	jQuery(window).on("scroll", function(){
		if (jQuery(this).scrollTop()>100){
			jQuery(".scrollup").addClass("active");
		}else{
			jQuery(".scrollup").removeClass("active");
		}
	});
	jQuery(".scrollup").on("click", function(){
   		jQuery("html, body").animate({scrollTop:0},600);
  		return false;
	});
});