$(document).ready(function(){
    $('.blog_update .update_blog').click(function(){
        let sidebar = $(this).next('div.update_sidebar');
        if($(sidebar).is(":hidden")){
            $(sidebar).slideDown(500);
        }else{
            $(sidebar).slideUp(500);
        }
    });
});
