function cForm(f){
	return {
		"name":$.trim(f.find('#name').val()),
		"email":$.trim(f.find('#email').val()),
		"country":$.trim(f.find('#country').val()),
		"phone":$.trim(f.find('#phone').val()),
		"message":$.trim(f.find('#message').val()),
	}
}
function formErr(el,str=''){
	if(str != ''){
		var el = $(el);
			el.focus();
			el.next('.help-block').addClass('with-errors').html(str).animateCss('fadeIn');
	}
}

$( document ).ready(function() {
$('#submitcontract').click(function() {

    var f = $('#contact-form');
    var res = f.find('#res');
    var btn = $(this);

    var name = f.find("#name");
    var email = f.find("#email");
    var country = f.find("#country");
    var message = f.find("#message");
    var token = inqHex(inqRandom());
    var v = cForm(f);

        f.find('.text-danger').html('');

        if($.trim(name.val()) == ''){
            name.focus();
            f.find('span.name').text('Please enter your name.');
            console.log('name');

        }else if($.trim(email.val()) == ''){
            email.focus();
            f.find('span.email').text('Please enter your email.');

        }else if(!isMail(email.val())){
            email.focus();
            f.find('span.email').text('Please enter your email.');

        }else if($.trim(country.val()) == ''){
            country.focus();
            f.find('span.country').text('Please select your country.');

        }else if($.trim(message.val()) == ''){
            message.focus();
            f.find('span.message').text('Please enter your description.');

        }else{

            btn.html('<i class="fa fa-spinner fa-spin" style="color:#339966"></i> Please Wait..');
            $.ajax({
                type: "get",
                url: "/inquiry/token",
                headers: {
                    callback: inqRequest,
                    xToken: xToken(token)
                },
                success: function(e) {

                    if (200 == e.code && e.row.request) {

                    	console.log('start ajax');

                        $.ajax({
                            type: "POST",
                            url: "/inquiry/contact",
                            contentType: "application/json",
                            dataType: "json",
                            data:JSON.stringify({da:v,req:f.attr('data-request')}),
                            headers: {answer: a2hex(e.row.request + ":" + token + ":" + inqbg)},
                            success: function(ea) {
                                setTimeout(function() {
                                    if(ea.status == 'success'){
                                        msg = '<div class="alert alert-success"><strong>Thank you!</strong> '+ea.message+' <span class="c"></span></div>';
                                        res.html(msg);
                                        f.resetForm();
                                        btn.html(btnMsg);
                                        c(15,res.find('.alert'));

                                    }else if(ea.status == 'error'){
                                        msg = '<div class="alert alert-danger"><strong>Error!</strong> '+ea.message+'</div>';
                                        res.html(msg);
                                        btn.html('<i class="fa fa-refresh"></i> Try Again');
                                    }else{
                                        btn.html(btnMsg);
                                    }
                                }, 200);
                            },
                            error: function(ea, s, t) {}
                        });


                    }
                }
            });
        }
    });
});