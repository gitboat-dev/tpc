$(document).ready(function(){
	header_adjust();
	sidenav_init();
	sidenav_adjust();
	$(window).resize(function() {
		header_adjust();
		sidenav_adjust();
	});
	$('.treeview-title-block').click(function(){
		var body = $('body.sidebar-open'),
			menu = $(this).next('.treeview-menu');
		if(body.length > 0){
			$('.treeview-title-block').removeClass('active');
			$('.treeview-menu').slideUp(450);
			if(menu.is(":hidden")){
				$(this).addClass('active');
				$(menu).slideDown(450);
			}else{
				$(this).removeClass('active');
				$(menu).slideUp(450,function(){
					$('.treeview-menu').removeClass('active');
				});
			}
		}
	});
});
function header_adjust(){
	var body = $('body.sidebar-open'),
		logo = $('div.h-brand'),
		icon = $('div.h-icon-menu'),
		logout = $('div.h-logout'),
		block1 = $('div.brand_m'),
		block2 = $('#header');
	if($(window).width() <= 768){
		logo.find('.backoff').show(450);
		$(logo).appendTo(block1);
	}else{
		$(logo).appendTo(block2);
		$(icon).appendTo(block2);
		$(logout).appendTo(block2);
	}
}
function sidenav(obj){
	var body = $('body.sidebar-open'),
		body_close = $('body.sidebar-close'),
		logo = $('#header .h-brand'),
		logo_name = $('#header .h-brand .backoff');
	if(body.length > 0){
		$('.treeview-title-block').removeClass('active');
		$('.treeview-menu').removeAttr('style');
		$('body').toggleClass("sidebar-close");
		$('body').removeClass('sidebar-open');
		$(obj).children('.burger-menu').removeClass('change');
		logo.addClass('minimize');
		logo_name.hide(450);
	}else{
		$('body').toggleClass("sidebar-open");
		$('body').removeClass('sidebar-close');
		$(obj).children('.burger-menu').addClass('change');
		logo.removeClass('minimize');
		logo_name.show(450);
	}
}
function sidenav_init(){
	var menu = $('.sidenav .side-menu .treeview .treeview-menu'),
		titles = $('.sidenav .side-menu .treeview .treeview-title-block .treeview-title'),
		text = "";
	$.each(titles,function(k,value){
		text = "<li class='treeview-item title'>"+$(value).text()+"</li>";
		$(text).prependTo(menu[k])
	});
}
function sidenav_adjust(){
	var body = $('body.sidebar-open'),
		icon = $('div.h-icon-menu'),
		logo = $('#header .h-brand'),
		logo_name = $('#header .h-brand .backoff');
	if($(window).width() > 768){
		if(body.length > 0){
			logo.removeClass('minimize');
			logo_name.show(450);
		}else{
			logo.addClass('minimize');
			logo_name.hide(450);
		}
	}else{
		$('body').addClass("sidebar-close");
		$('body').removeClass('sidebar-open');
		icon.children('.burger-menu').removeClass('change');
	}
}