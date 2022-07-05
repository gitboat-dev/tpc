$(document).ready(function(){
    $('#sec5').onScrolledTo(0,function(){
        slide_sec5();
	});
    $('#sec6').onScrolledTo(0,function(){
        slide_sec6();
	});
});
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
