$(document).ready(function(){
    $('#get_free').click(function(event){
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top + 370
        }, 1000);
    });
});

