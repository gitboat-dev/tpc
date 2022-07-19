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
        sticky_sidebar($('#sec2'),$('#sec2 .col2'),180);
    });
    $(window).resize(function() {
        sticky_sidebar($('#sec2'),$('#sec2 .col2'),180);
    });
});
function sticky_sidebar(start,obj,dif){
    if($(window).width() > 991){
        let top = $(start).offset().top - dif,
        bottom = $(start).height() - dif,
        obj_height = 0;
        if(document.documentElement.scrollTop > top && document.documentElement.scrollTop < bottom){
            obj_height = (document.documentElement.scrollTop - $(obj).height()) + dif;
            console.log(obj_height);
            obj_height = obj_height < 0 ? 0 : obj_height;
            $(obj).css({
                'position':'relative',
                'top':obj_height+'px',
            });
        }else if(document.documentElement.scrollTop < top){
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
