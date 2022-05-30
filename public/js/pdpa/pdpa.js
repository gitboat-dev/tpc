$(document).ready(function(){
    $('#pdpa .btn-accept').click(function(){
        $.get('/pdpa/accept',function(res){
            if(res != ""){
                if(res.status == 1){
                    $('section#pdpa .wrapper').addClass('-hide-');
                    if($('section#pdpa .wrapper').is(":hidden")){
                        $('section#pdpa').remove();
                    }
                }
            }
        });
    });
    $('#pdpa .btn-decline').click(function(){
        $.get('/pdpa/decline',function(res){
            if(res != ""){
                if(res.status == 1){
                    $('section#pdpa .wrapper').addClass('-hide-');
                    if($('section#pdpa .wrapper').is(":hidden")){
                        $('section#pdpa').remove();
                    }
                }
            }
        });
    });
});
