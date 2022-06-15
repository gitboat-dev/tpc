jQuery(document).ready(function($){
    sec1_slide();
    row1();
    row2();
    row4();
    $('div.burger-menu').on('click',function(){
        if($(this).hasClass('change')){
            setTimeout(function(){
                sec1_slide(1);
            },1000);
        }
    });
    $(window).resize(function() {
        row1();
        row2();
        row4();
    });
    $(window).scroll(function(){
        row1();
        row2();
        row4();
    });
});
function row1(){
    let col1 = $('#sec2 .r1 .col1 .prod-block'),
        col2 = $('#sec2 .r1 .col2 .prod-block'),
        minheight = $(col2).outerHeight();
    $(col1).css({'min-height':minheight+'px'});
}
function row2(){
    let col1 = $('#sec2 .r2 .col1 .prod-block'),
        col2 = $('#sec2 .r2 .col2 .prod-block'),
        minheight = $(col1).outerHeight(),
        minheight2 = $(col2).outerHeight();
    if($(window).width() <= 991){
        $(col2).css({'min-height':minheight+'px'});
        $(col1).removeAttr('style');
    }else{
        $(col2).removeAttr('style');
        $(col1).css({'min-height':minheight2+'px'});
    }
}
function row4(){
    let col1 = $('#sec2 .r4 .col1 .prod-block'),
        col2 = $('#sec2 .r4 .col2 .prod-block'),
        minheight = $(col1).outerHeight(),
        minheight2 = $(col2).outerHeight();

        if($(window).width() <= 991){
            $(col1).css({'min-height':minheight2+'px'});
            $(col2).removeAttr('style');
        }else{
            $(col2).css({'min-height':minheight+'px'});
            $(col1).removeAttr('style');
        }

}
function sec1_slide(reload = 0){
    owl = $('#sec1 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        center:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        margin:0,
        nav:true,
		navText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        dots:false,
        items:1,
        animateOut: 'fadeOut',
        onChanged: function (e) {
            let slide = $(e.target).find(".owl-item").eq(e.item.index).find('.item'),
                nav = $('#sec1 .slide .owl-carousel .owl-nav');
            if($(slide).hasClass('head') || $(slide).hasClass('blue')){
                nav.addClass('c-green');
                nav.removeClass('c-white');
            }else if($(slide).hasClass('green')){
                nav.addClass('c-white');
                nav.removeClass('c-green');
            }else{
                nav.addClass('c-green');
                nav.removeClass('c-white');
            }
        },
    });
    if(reload > 0){
        owl.trigger('refresh.owl.carousel');
    }
}
