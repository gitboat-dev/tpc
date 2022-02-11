$(document).ready(function(){
	$(window).on("scroll", function(){
		if ($(this).scrollTop()>100){
			$(".scrollup").addClass("active");
		}else{
			$(".scrollup").removeClass("active");
		}
	});
	$(".scrollup").on("click", function(){
   		$("html, body").animate({scrollTop:0},600);
  		return false;
	});
});