jQuery(document).ready(function($){
    sec2();
    sec4();
    $(window).resize(function() {
        sec2();
        sec4();
    });
});
function sec2(){
    let sec2_w = $('#sec2').outerWidth(),
        container_w = $('#sec2 .container').outerWidth(),
        col1_w = ($('#sec2 .col1 .content_group').outerWidth() - $('#sec2 .col1 .content_group').width()),
        left = ((sec2_w - container_w) / 2) + col1_w,
        bg = $('#sec2 .col1 .bg-text');
    if($(window).width() <= 991){
        $(bg).removeAttr('style');
    }else if($(window).width() > 1806){
        left = left + 4;
        $(bg).css('width',sec2_w);
        $(bg).css('left',-left);
    }else{
        $(bg).css('width',sec2_w);
        $(bg).css('left',-left);
    }

}
function sec4(){
    let sec4_w = $('#sec4').outerWidth(),
        container_w = $('#sec4 .container').outerWidth(),
        col2_w = ($('#sec4 .col2 .content_group').outerWidth() - $('#sec4 .col2 .content_group').width()),
        right = ((sec4_w - container_w) / 2) + col2_w,
        bg = $('#sec4 .col2 .bg-text');
    if($(window).width() <= 991){
        $(bg).removeAttr('style');
    }else if($(window).width() > 1806){
        right = right + 4;
        $(bg).css('width',sec4_w);
        $(bg).css('right',-right);
    }else{
        $(bg).css('width',sec4_w);
        $(bg).css('right',-right);
    }

}
