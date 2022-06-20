jQuery(document).ready(function($){
    sec2();
});
function sec2(){
    let col1 = $('#sec2 .col1 .content_group::after'),
        col2 = $('#sec2 .col2').outerHeight();
    $(col1).css('width','calc(100% + 60px + '+col2+'px)');
}
