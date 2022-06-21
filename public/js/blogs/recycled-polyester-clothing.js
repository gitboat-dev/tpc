jQuery(document).ready(function($){
    sec3();
    $(window).resize(function() {
        setTimeout(() => {
            sec3();
        }, 800);
    });
});
function sec3(){
    let sec3 = $('#sec3').outerHeight()
        col1 = $('#sec3 .col1'),
        col2 = $('#sec3 .col2'),
        col3 = $('#sec3 .col3'),
        min_heigth = sec3 / 3;
    if(jQuery( window ).width() <= 991){
        $(col1).css({'min-height':min_heigth+'px'});
        $(col2).css({'min-height':min_heigth+'px'});
        $(col3).css({'min-height':min_heigth+'px'});
    }else{
        $(col1).removeAttr('style');
        $(col2).removeAttr('style');
        $(col3).removeAttr('style');
    }
}
