var inqbg="TPC",
	inqKey="13bcbc8d49ee223937c008c63bd235f3",
	inqRequest="inquiry-request",
	inqhas="xyz";
jQuery(document).ready(function($){
	sectwo();
	secfive();
	setTimeout(function(){
		secfour();
	},500);
	$(window).resize(function(event) {
		sectwo();
		secfour();
		secfive();
	});
	$(window).scroll(function(){
		secfive();
	});
	$('#submitcontract2').on('click',function(){
		var f = $('#contact-form'),
	    	res = f.find('#res'),
	    	btn = $(this),
	    	token = inqHex(inqRandom()),
    		v = cForm(f);
		if(checkData(f).success){
			$.ajax({
                type: "get",
                url: "/inquiry/token",
                headers: {
                    callback: inqRequest,
                    xToken: xToken(token)
                },
                success: function(res) {
                	if (res.code == 200 && res.row.request) {
                		$.ajax({
                			type: "POST",
                            url: "/inquiry/contact",
                            contentType: "application/json",
                            dataType: "json",
                            data:JSON.stringify({da:v,req:f.attr('data-request')}),
                            headers: {answer: a2hex(res.row.request + ":" + token + ":" + inqbg)},
                            success: function(ea) {
                            	setTimeout(function() {
                            		var f = $('#contact-form'),
								    	res = f.find('#res'),
								    	btn = $('#submitcontract2'),
								    	btnMsg = "SUBMIT";
                            		if(ea.status == 'success'){
                                        msg = '<div class="alert alert-success"><strong>Thank you!</strong> '+ea.message+' <span class="c"></span></div>';
                                        res.html(msg);
                                        f.resetForm();
                                        btn.html(btnMsg);
                                        c(15,res.find('.alert'));
                                        thank_you();
                                    }else if(ea.status == 'error'){
                                        msg = '<div class="alert alert-danger"><strong>Error!</strong> '+ea.message+'</div>';
                                        res.html(msg);
                                        btn.html('<i class="fa fa-refresh"></i> Try Again');
                                    }else{
                                        btn.html(btnMsg);
                                    }
                            	},200);
                            }
                		});
                	}
                }
            });
		}
	});
});
function sectwo(){
	var row1_1 = jQuery('.section-two .r1 .col1 .content_block .col1-1'),
		row2 = jQuery('.section-two .r1 .col2'),
		block2 = jQuery('.section-two .r1 .col2 .content_block'),
		row2_1 = jQuery('.section-two .r1 .col2 .content_block .col2-1'),
		row2_2 = jQuery('.section-two .r1 .col2 .content_block .col2-2'),
		row2_3 = jQuery('.section-two .r1 .col2 .content_block .col2-3'),
		row3 = jQuery('.section-two .r1 .col3'),
		minheight1 = jQuery(row2).outerHeight(),
		minheight2 = jQuery(row2_3).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row3).removeAttr('style');
		jQuery(row1_1).removeAttr('style');

		jQuery(row2_3).appendTo(block2);
		jQuery(row2_1).appendTo(block2);
		jQuery(row2_2).appendTo(block2);
	}else{
		jQuery(row3).css({'min-height':minheight1+'px'});
		jQuery(row1_1).css({'min-height':minheight2+'px'});

		jQuery(row2_1).appendTo(block2);
		jQuery(row2_2).appendTo(block2);
		jQuery(row2_3).appendTo(block2);
	}
}
function secfour(){
	var row1 = jQuery('.section-four .r1 .col1'),
		img_row1 = jQuery('.section-four .r1 .col1 > .img_block1'),
		img_row1_2 = jQuery('.section-four .r1 .col1 > .img_block2'),
		content_block_row1 = jQuery('.section-four .r1 .col1 .content_block'),
		content_row1 = jQuery('.section-four .r1 .col1 .content_block .content_1'),
		img_content_block_row1 = jQuery('.section-four .r1 .col1 .content_block .img_block1'),
		row2 = jQuery('.section-four .r1 .col2'),
		content_row2 = jQuery('.section-four .r1 .col2 .content_block .content_1'),
		content_block_row2 = jQuery('.section-four .r1 .col2 .content_block'),
		img_content_block_row2 = jQuery('.section-four .r1 .col2 .content_block .img_block2'),
		content_block_row3 = jQuery('.section-four .r1 .col3 .content_block'),
		content_row3 = jQuery('.section-four .r1 .col3 .content_block .content_1'),
		img_row3 = jQuery('.section-four .r1 .col3 .content_block .img_block1'),
		minheight1 = jQuery(row2).outerHeight(),
		img_minheight1 = jQuery(img_row1).outerHeight();

	if(jQuery( window ).width() <= 1280 && jQuery( window ).width() > 991){
		jQuery(row1).css({'min-height':minheight1+'px'});
		jQuery(img_content_block_row1).appendTo(content_block_row3);
		jQuery(content_row3).appendTo(content_block_row3);
		jQuery(img_row1_2).appendTo(content_block_row2);
		jQuery(content_row2).appendTo(content_block_row2);
	}else if(jQuery( window ).width() <= 991){
		jQuery(row1).css({'min-height':img_minheight1+'px'});
		jQuery(img_content_block_row1).appendTo(content_block_row3);
		jQuery(content_row3).appendTo(content_block_row3);
		jQuery(img_content_block_row2).appendTo(row1);
	}else{
		jQuery(row1).removeAttr('style');
		jQuery(img_row3).appendTo(content_block_row1);
		jQuery(img_row1_2).appendTo(content_block_row2);
		jQuery(content_row2).appendTo(content_block_row2);
	}
}
function secfive(){
	var row1 = jQuery('.section-five .r1 .col1 .col1-1 .contact_logo .col1'),
		row2 = jQuery('.section-five .r1 .col1 .col1-1 .contact_logo .col2'),
		minheight1 = jQuery(row2).outerHeight();
	jQuery(row1).css({'min-height':minheight1+'px'});
}
function thank_you(){
    window.location.href = "/thank-you";
}
function checkData(f){
	var name = f.find('#name'),
		lastname = f.find('#lastname'),
		company = f.find('#company'),
		phone = f.find('#phone'),
		email = f.find('#email'),
		// country = f.find('#country'),
		message = f.find('#message'),
		data = [];
		error = 0;
	data['success'] = false;
	if(name.val() == "" || name.val() == 0){
		error = error + 1;
		name.next('span.name').text('Please enter your name.');
	}
	if(company.val() == "" || company.val() == 0){
		error = error + 1;
		company.next('span.company').text('Please enter your company.');
	}
	if((email.val() == "" || email.val() == 0) && !isMail(email.val())){
		error = error + 1;
		email.next('span.email').text('Please enter your email.');
	}
	// if(country.val() == "" || country.val() == 0){
	// 	error = error + 1;
	// 	country.next('span.country').text('Please enter your country.');
	// }
	if(message.val() == "" || message.val() == 0){
		error = error + 1;
		message.next('span.message').text('Please enter your description.');
	}
	if(error < 1){
		data['success'] = true;
	}
	return data;
}
function inqHex(a) {
    if (a < 0) {
        a = 4294967295 + a + 1;
    }
    return a.toString(16).toUpperCase();
};
function inqRandom(length = 9) {
    return Math.floor(Math.pow(10, length - 1) + Math.random() * 9 * Math.pow(10, length - 1));
}
function xToken(o, n = 2) {
	var protocol = "https:",
		href = "www.thaipolyester.com";
    var e = window.location.protocol.replace(":", "") + ":" + window.location.hostname + ":" + o + ":" + inqKey;
    for (i = 0; i < n; i++){
    	e = inqenc(e, inqhas);
    };
    return a2hex(enTree(e));
}
function a2hex(str) {
    var arr = [];
    for (var i = 0, l = str.length; i < l; i++) {
        var hex = Number(str.charCodeAt(i)).toString(16);
        arr.push(hex);
    }
    return arr.join('');
}
function hex2a(hexx) {
    var hex = hexx.toString();
    var str = '';
    for (var i = 0; i < hex.length; i += 2){
    	str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
    }
    return encodeURI(str);
}
function inqenc(c, t) {
    var a = t.length,
        n = "";
    n = (n = (n = n.concat(t.substr(0, Math.ceil(a / 2)))).concat(c)).concat(t.substr(-Math.floor(a / 2)));
    c = new String(n);
    for (var r = "", o = 0; o < c.length; o++){
    	r = "a" == c.charAt(o) ? r.concat("u") : "b" == c.charAt(o) ? r.concat("v") : "c" == c.charAt(o) ? r.concat("w") : "d" == c.charAt(o) ? r.concat("x") : "e" == c.charAt(o) ? r.concat("y") : "f" == c.charAt(o) ? r.concat("z") : "g" == c.charAt(o) ? r.concat("k") : "h" == c.charAt(o) ? r.concat("l") : "i" == c.charAt(o) ? r.concat("m") : "j" == c.charAt(o) ? r.concat("n") : "k" == c.charAt(o) ? r.concat("o") : "l" == c.charAt(o) ? r.concat("p") : "m" == c.charAt(o) ? r.concat("q") : "n" == c.charAt(o) ? r.concat("r") : "o" == c.charAt(o) ? r.concat("s") : "p" == c.charAt(o) ? r.concat("t") : "q" == c.charAt(o) ? r.concat("a") : "r" == c.charAt(o) ? r.concat("b") : "s" == c.charAt(o) ? r.concat("c") : "t" == c.charAt(o) ? r.concat("d") : "u" == c.charAt(o) ? r.concat("e") : "v" == c.charAt(o) ? r.concat("f") : "w" == c.charAt(o) ? r.concat("g") : "x" == c.charAt(o) ? r.concat("h") : "y" == c.charAt(o) ? r.concat("i") : "z" == c.charAt(o) ? r.concat("j") : "A" == c.charAt(o) ? r.concat("U") : "B" == c.charAt(o) ? r.concat("V") : "C" == c.charAt(o) ? r.concat("W") : "D" == c.charAt(o) ? r.concat("X") : "E" == c.charAt(o) ? r.concat("Y") : "F" == c.charAt(o) ? r.concat("Z") : "G" == c.charAt(o) ? r.concat("A") : "H" == c.charAt(o) ? r.concat("B") : "I" == c.charAt(o) ? r.concat("C") : "J" == c.charAt(o) ? r.concat("D") : "K" == c.charAt(o) ? r.concat("E") : "L" == c.charAt(o) ? r.concat("K") : "M" == c.charAt(o) ? r.concat("L") : "N" == c.charAt(o) ? r.concat("M") : "O" == c.charAt(o) ? r.concat("N") : "P" == c.charAt(o) ? r.concat("O") : "Q" == c.charAt(o) ? r.concat("P") : "R" == c.charAt(o) ? r.concat("Q") : "S" == c.charAt(o) ? r.concat("R") : "T" == c.charAt(o) ? r.concat("S") : "U" == c.charAt(o) ? r.concat("T") : "V" == c.charAt(o) ? r.concat("F") : "W" == c.charAt(o) ? r.concat("G") : "X" == c.charAt(o) ? r.concat("H") : "Y" == c.charAt(o) ? r.concat("I") : "Z" == c.charAt(o) ? r.concat("J") : "1" == c.charAt(o) ? r.concat("7") : "2" == c.charAt(o) ? r.concat("8") : "3" == c.charAt(o) ? r.concat("9") : "4" == c.charAt(o) ? r.concat("4") : "5" == c.charAt(o) ? r.concat("5") : "6" == c.charAt(o) ? r.concat("6") : "7" == c.charAt(o) ? r.concat("1") : "8" == c.charAt(o) ? r.concat("2") : "9" == c.charAt(o) ? r.concat("3") : "@" == c.charAt(o) ? r.concat("!") : "+" == c.charAt(o) ? r.concat("_") : "/" == c.charAt(o) ? r.concat("%") : "." == c.charAt(o) ? r.concat("#") : encodeURI(r.concat(c.charAt(o)));
    }
    return enTree(r);
}
function cForm(f){
	var name = jQuery.trim(f.find('#name').val());
	if(f.find('#lastname').val() != "" || f.find('#lastname').val() != 0){
		name = name + " " + jQuery.trim(f.find('#lastname').val());
	}
	return {
		"name":name,
		"email":jQuery.trim(f.find('#email').val()),
		// "country":jQuery.trim(f.find('#country').val()),
		"company":jQuery.trim(f.find('#company').val()),
		"phone":jQuery.trim(f.find('#phone').val()),
		"message":jQuery.trim(f.find('#message').val()),
	}
}

// $.fn.resetForm = function() {
//     return this.each(function(){
//         this.reset();
//     });
// }
// function isMail(e) {
//     var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
//     return pattern.test(e);
// }
// function enTree(string) {
//     return string.replace(/[a-z]/ig, function (character) {
//         let moveNumber = character.toLowerCase() < 'n' ? 13 : -13;
//         character = character.charCodeAt(0) + moveNumber;
//         return String.fromCharCode(character);
//     });
// }
// function c(n,el){
//     var c=el.find('.c'); c.text(n);
//     setInterval(function(){
//         n--;
//         if(n>=0){
//             c.text(n);
//         }
//         if(n==0){
//             c.text(n);
//             el.fadeOut('slow',function(){
//               $(this).remove();
//             });
//         }
//     },1000);
// }
