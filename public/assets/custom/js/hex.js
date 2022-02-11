// var lang = $("#lang").attr('alt');
// var base_url = $("#base_url").attr('alt');
jQuery(function ($) {


    var ajaxcode = hex2a($('meta[name="ncode"]').attr("content"));
    closemenuLeft();
    function a2hex(str){
        var arr=[];
        for(var i=0,l=str.length;i<l;i++){
            var hex = Number(str.charCodeAt(i)).toString(16);
            arr.push(hex);
        }
        return arr.join('');
    }

    function hex2a(hexx){
        var hex = hexx.toString();
        var str = '';
        for(var i=0;i<hex.length;i+=2)str+=String.fromCharCode(parseInt(hex.substr(i,2),16));
            return encodeURI(str);
    }
    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    }
    function enc(s){
      var e = '';
      if($.trim(s) !='' && $.trim(s)!= '0' && $.trim(s)!= '-'){
        e = a2hex(encodeURI(ajaxcode+$.trim(s)));
      } return e;
    }
    function closemenuLeft(){
        $('.check_topic_active').each(function(item) {
            var id = $(this).next().next().attr('id');
            if(id.length != 'undefined'){

                if($('#'+id+' li').hasClass('child-li') == false){
                    $(this).parents('li').remove();
                }
            }
            
        });
    }

});