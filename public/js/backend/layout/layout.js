$(window).on('load',function(){
	custom_layout();
	$('.loader').fadeOut(1000,function(){
		$('body').css({'position':'unset'});
	});
});
$(window).resize(function(event) {
	custom_layout();
});
function custom_layout(){
	var body_h = $('body').outerHeight(),
		header_h = $('header').outerHeight(),
		brand_h = $('div.h-brand').outerHeight(),
		footer_h = $('footer').outerHeight(),
		nav_h = $('div.sidenav > .side-body').outerHeight(),
		content_h = body_h - header_h,
		wrapper_h = nav_h > content_h ? nav_h - footer_h : content_h - footer_h;
	if($( window ).width() <= 768){
		content_h = content_h - brand_h;
		$('div.content').css({'min-height':content_h+'px'});
		$('div.sidenav').css({'min-height':content_h+'px'});
		$('div.content-wrapper').css({'min-height':wrapper_h+'px'});
	}else{
		$('div.content').css({'min-height':content_h+'px'});
		$('div.sidenav').css({'min-height':content_h+'px'});
		$('div.content-wrapper').css({'min-height':wrapper_h+'px'});
	}
}