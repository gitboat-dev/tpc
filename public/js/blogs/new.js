$(document).ready(function(){
    $('#sec1').onScrolledTo(0,function(){
        slide_sec1();
	});
    $('div.burger-menu').on('click',function(){
        if($(this).hasClass('change')){
            setTimeout(function(){
                slide_sec1(1);
            },1000);
        }
    });
    $(window).scroll(function(){
        sticky_sidebar($('#sec2'),$('#sec2 .col2'),100);
    });
    $(window).resize(function() {
        sticky_sidebar($('#sec2'),$('#sec2 .col2'),100);
    });
});
function sticky_sidebar(start,obj,dif){
    if($(window).width() > 991){
        let _start = $(start).offset().top,
            _headder_height = $('header .header-body').outerHeight(),
            _end = $(start).outerHeight() - dif ;
            console.log(document.documentElement.scrollTop+"<"+_end);
        if(document.documentElement.scrollTop > (_start - dif) && document.documentElement.scrollTop < _end){
            _start = document.documentElement.scrollTop - _start + _headder_height + dif;
            $(obj).css({
                'position':'relative',
                'top':_start+'px',
            });
        }else if(document.documentElement.scrollTop < _start){
            $(obj).css({
                'position':'relative',
                'top':'0px',
            });
        }
    }else{
        $(obj).removeAttr('style');
    }
}
function slide_sec1(reload = 0){
    let owl = $('#sec1 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
        animateOut: 'fadeOut',
    });
    if(reload > 0){
        owl.trigger('refresh.owl.carousel');
    }
}
