jQuery(document).ready(function($){
	$('body').append('<nav class="nav_right"></nav>');
	adjust_header();
	adjust_nav();
	$(window).resize(function(event) {
		adjust_header();
		adjust_nav();
		adjust_html_body();
		if(jQuery( window ).width() > 991){
			$('ul.a_sub_menu').removeAttr('style');
			$('ul.a_sub_menu').removeClass('active');
			$('a.a_menu').removeClass('open');
		}
	});
	$(window).scroll(function(){
		scroll_header()
	});
	var m_menu = $('header .header-body .logo .m-menu-block .m-menu');
	m_menu.click(function(){
		var burger = $(this).children('.burger-menu'),
			wrapper = $('div.wrapper'),
			html_body = jQuery('html,body'),
			nav_right = jQuery('nav.nav_right');
		burger.toggleClass('change');
		wrapper.toggleClass('open');
		if(jQuery( window ).width() <= 991){
			if($('.burger-menu.change').length > 0){
				wrapper.css({'position':'absolute'});
				wrapper.animate({
					right: "+=250px",
				},250);
				html_body.css({'overflow':'hidden'});
				nav_right.show(0,function(){
					nav_right.animate({
						right: "0",
					},250);
				});
			}else{
				nav_right.animate({
					right: "-=250px",
				},250,function(){
					nav_right.hide();
				});
				wrapper.animate({
					right: "0",
				},
				250,function(){
					wrapper.removeAttr('style');
					html_body.removeAttr('style');
				});
			}
		}
	});
	$('a.a_menu').click(function(e){
		dropdown(this,e);
	});
});
function dropdown(obj,e){
	if(jQuery( window ).width() <= 991){
		e.preventDefault();
		var menu_lists = $(obj).next('ul.a_sub_menu'),
			active = $(obj).next('ul.a_sub_menu.active');
		menu_lists.toggleClass('active');
		if(active.length > 0){
			$(obj).removeClass('open');
			menu_lists.slideUp(200);
		}else{
			$(obj).addClass('open');
			menu_lists.slideDown(200);
		}
	}
}
function adjust_nav(){
	var nav1 = jQuery('nav.header-nav-menu'),
		nav2 = jQuery('nav.nav_right'),
		ul_nav = jQuery('ul.header-menu'),
		burger = jQuery('div.burger-menu');
	if(jQuery( window ).width() <= 991){
		jQuery(ul_nav).appendTo(nav2);
	}else{
		jQuery(ul_nav).appendTo(nav1);
		burger.removeClass('change');
	}
}
function adjust_html_body(){
	var html_body = jQuery('html,body'),
		nav_right = jQuery('nav.nav_right'),
		wrapper = jQuery('div.wrapper'),
		wrapper_open = $('div.wrapper.open');
	if(jQuery( window ).width() > 991){
		if(wrapper_open.length > 0){
			wrapper.animate({
				right: "0",
			},
			100,function(){
				wrapper.removeAttr('style');
				html_body.removeAttr('style');
				nav_right.removeAttr('style');
			});
		}else{
			wrapper.removeAttr('style');
			html_body.removeAttr('style');
			nav_right.removeAttr('style');
		}
	}
}
function adjust_header(){
	var header = jQuery('header#header'),
		m_menu = jQuery('header#header .header-body .logo .m-menu-block .m-menu'),
		height_header = header.outerHeight();
	if(jQuery( window ).width() <= 991){
		m_menu.css({'min-height':height_header+'px'});
	}else{
		m_menu.removeAttr('style');
	}
}
function scroll_header(){
	var header_body = jQuery('header#header .header-body'),
		header_top = jQuery('header#header .header-top'),
		wrapper = jQuery('div.wrapper'),
		wrapper_open = $('div.wrapper.open'),
		height_header_body = header_body.outerHeight(),
		height_header_top = header_top.outerHeight();
	if(wrapper_open.length < 1){
		if (document.documentElement.scrollTop > height_header_top) {
			wrapper.css({'margin-top':height_header_body+'px'});
			header_body.css({
				'position':'fixed',
				'z-index':'1000',
				'top':'0',
				'width':'100%',
				'box-shadow': '0 0 5px rgba(0, 0, 0, 0.06)',
			});
		}else{
			header_body.removeAttr('style');
			wrapper.removeAttr('style');
		}
	}
}
