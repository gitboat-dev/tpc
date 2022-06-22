jQuery(document).ready(function($){
    sec3();
    $(window).resize(function() {
        setTimeout(() => {
            sec3();
        }, 500);
    });
});
function sec3(){
    let sec3 = $('#sec3'),
        col1 = $('#sec3 .col1'),
        col2 = $('#sec3 .col2'),
        col3 = $('#sec3 .col3'),
        min_height = sec3.outerHeight() / 3;
        min_height2 = (sec3.outerHeight() - col1.outerHeight()) - col3.outerHeight()
    if($(window).width() <= 991 && $(window).width() > 300){
        $(col1).css({'min-height':min_height+'px'});
        $(col2).css({'min-height':min_height+'px'});
        $(col3).css({'min-height':min_height+'px'});
    }else if($(window).width() <= 300){
        $(col1).removeAttr('style');
        $(col3).removeAttr('style');
        $(col2).css({'min-height':min_height2+'px'});
    }else{
        $(col1).removeAttr('style');
        $(col2).removeAttr('style');
        $(col3).removeAttr('style');
    }
}
