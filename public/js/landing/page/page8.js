$(document).ready(function(){
    $(window).resize(function() {

    });
    $('#sec3').onScrolledTo(0,function(){
        text_slide('#sec3');
        slide_sec3();
	});
    $('#sec5').onScrolledTo(0,function(){
        slide_sec5();
	});
    $('#sec6').onScrolledTo(0,function(){
        slide_sec6();
	});
});
function text_slide(row){
    let slide = $(row+" .text-slide-block"),
        text = slide.find('.text-slide'),
        pages = slide.attr('data-page'),
        start = slide.attr('data-start'),
        time = slide.attr('data-time'),
        item_width = slide.outerWidth() / parseInt(pages),
        text_width = (text.outerWidth() / 2) - parseInt(item_width);
    if($(window).width() >= 991){
        setInterval(() => {
            if(slide.attr('data-direction') == 'right'){
                text.animate({
                    paddingLeft:"+="+text_width+"px"
                });
                start = parseInt(slide.attr('data-move')) + 1;
                slide.attr('data-move',start);
                if(start == pages){
                    slide.attr('data-direction','left')
                }
            }else if(slide.attr('data-direction') == 'left'){
                text.animate({
                    paddingLeft:"0px"
                });
                slide.attr('data-move',slide.attr('data-start'));
                slide.attr('data-direction','right')
            }
        }, time);
    }
}
function slide_sec3(){
    $('#sec3 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", ""],
        dots:false,
        items:2,
        responsive:{
            280:{
                items:1,
                stagePadding: 50,
            },
            640:{
                items:1,
                stagePadding: 50,
            },
            1024:{
                items:2,
                stagePadding: 100,
            }
        }
    });
}
function slide_sec5(){
    let next = "<picture>"+
    "<source srcset='/assets/images/landing/page8/mobile/Icon-6.webp' media='(max-width: 640px)'>"+
    "<img src='/assets/images/landing/page8/desktop/Icon-6.webp' alt='next' width='900' height='350' class='img-fluid'>"+
    "</picture>";
    $('#sec5 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:0,
        rewind:true,
        nav:true,
        navText : ["", next],
        animateOut: 'fadeOut',
        dots:false,
        items:1,
        onChanged: function (e) {
            let index = e.item.index + 1,
                btn_next = $('#sec5 .slide .owl-carousel .owl-nav > .owl-next'),
                next_icon = "";
            if(index == 1){
                next_icon = "<picture>"+
                            "<source srcset='/assets/images/landing/page8/mobile/Icon-6.webp' media='(max-width: 640px)'>"+
                            "<img src='/assets/images/landing/page8/desktop/Icon-6.webp' alt='next' width='900' height='350' class='img-fluid'>"+
                            "</picture>";
            }else{
                next_icon = "<picture>"+
                            "<source srcset='/assets/images/landing/page8/mobile/Icon-7.webp' media='(max-width: 640px)'>"+
                            "<img src='/assets/images/landing/page8/desktop/Icon-7.webp' alt='next' width='900' height='350' class='img-fluid'>"+
                            "</picture>";
            }
            btn_next.html(next_icon);
        },
    });
}
function slide_sec6(){
    $('#sec6 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
        responsive:{
            280:{
                items:1,
                stagePadding: 30,
            },
            991:{
                items:1,
                stagePadding: 250,
            },
            1410:{
                items:1,
                stagePadding: 450,
            }
        }
    });
}
