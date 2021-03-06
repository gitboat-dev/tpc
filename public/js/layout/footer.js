let f_inqbg="TPC",
	f_inqKey="13bcbc8d49ee223937c008c63bd235f3",
	f_inqRequest="inquiry-request",
	f_inqhas="xyz";
jQuery(document).ready(function($){
    $('#f-submitcontract').on('click',function(){
		var f = $('#f-contact-form'),
	    	token = f_inqHex(f_inqRandom()),
    		v = f_cForm(f);
		if(f_checkData(f).success){
			$.ajax({
                type: "get",
                url: "/inquiry/token",
                headers: {
                    callback: f_inqRequest,
                    xToken: f_xToken(token)
                },
                success: function(res) {
                	if (res.code == 200 && res.row.request) {
                		$.ajax({
                			type: "POST",
                            url: "/inquiry/contact",
                            contentType: "application/json",
                            dataType: "json",
                            data:JSON.stringify({da:v,req:f.attr('data-request')}),
                            headers: {answer: f_a2hex(res.row.request + ":" + token + ":" + f_inqbg)},
                            success: function(ea) {
                            	setTimeout(function() {
                            		var f = $('#f-contact-form'),
								    	res = f.find('#res');
                            		if(ea.status == 'success'){
                                        msg = '<div class="alert alert-success"><strong>Thank you!</strong> '+ea.message+' <span class="c"></span></div>';
                                        res.html(msg);
                                        f.resetForm();
                                        footer_thank_you();
                                        c(15,res.find('.alert'));
                                    }else if(ea.status == 'error'){
                                        msg = '<div class="alert alert-danger"><strong>Error!</strong> '+ea.message+'</div>';
                                        res.html(msg);
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
function footer_thank_you(){
    window.location.href = "/thank-you";
}
function f_checkData(f){
	var name = f.find('#name'),
		company = f.find('#company'),
        email = f.find('#email'),
		phone = f.find('#phone'),
		message = f.find('#message'),
		data = [];
		error = 0;
	data['success'] = false;
	if(name.val() == "" || name.val() == 0){
		error = error + 1;
		name.next('span.name').text('Please enter your name.');
	}
	// if(company.val() == "" || company.val() == 0){
	// 	error = error + 1;
	// 	company.next('span.company').text('Please enter your company.');
	// }
    if((email.val() == "" || email.val() == 0) && !isMail(email.val())){
		error = error + 1;
		email.next('span.email').text('Please enter your email.');
	}
	if(phone.val() == "" || phone.val() == 0){
		error = error + 1;
		phone.next('span.phone').text('Please enter your phone.');
	}
	if(message.val() == "" || message.val() == 0){
		error = error + 1;
		message.next('span.message').text('Please enter your description.');
	}
	if(error < 1){
		data['success'] = true;
	}
	return data;
}
function f_inqHex(a) {
    if (a < 0) {
        a = 4294967295 + a + 1;
    }
    return a.toString(16).toUpperCase();
};
function f_inqRandom(length = 9) {
    return Math.floor(Math.pow(10, length - 1) + Math.random() * 9 * Math.pow(10, length - 1));
}
function f_xToken(o, n = 2) {
	var protocol = "https:",
		href = "www.thaipolyester.com";
    var e = window.location.protocol.replace(":", "") + ":" + window.location.hostname + ":" + o + ":" + f_inqKey;
    for (i = 0; i < n; i++){
    	e = f_inqenc(e, f_inqhas);
    };
    return f_a2hex(enTree(e));
}
function f_a2hex(str) {
    var arr = [];
    for (var i = 0, l = str.length; i < l; i++) {
        var hex = Number(str.charCodeAt(i)).toString(16);
        arr.push(hex);
    }
    return arr.join('');
}
function f_hex2a(hexx) {
    var hex = hexx.toString();
    var str = '';
    for (var i = 0; i < hex.length; i += 2){
    	str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
    }
    return encodeURI(str);
}
function f_inqenc(c, t) {
    var a = t.length,
        n = "";
    n = (n = (n = n.concat(t.substr(0, Math.ceil(a / 2)))).concat(c)).concat(t.substr(-Math.floor(a / 2)));
    c = new String(n);
    for (var r = "", o = 0; o < c.length; o++){
    	r = "a" == c.charAt(o) ? r.concat("u") : "b" == c.charAt(o) ? r.concat("v") : "c" == c.charAt(o) ? r.concat("w") : "d" == c.charAt(o) ? r.concat("x") : "e" == c.charAt(o) ? r.concat("y") : "f" == c.charAt(o) ? r.concat("z") : "g" == c.charAt(o) ? r.concat("k") : "h" == c.charAt(o) ? r.concat("l") : "i" == c.charAt(o) ? r.concat("m") : "j" == c.charAt(o) ? r.concat("n") : "k" == c.charAt(o) ? r.concat("o") : "l" == c.charAt(o) ? r.concat("p") : "m" == c.charAt(o) ? r.concat("q") : "n" == c.charAt(o) ? r.concat("r") : "o" == c.charAt(o) ? r.concat("s") : "p" == c.charAt(o) ? r.concat("t") : "q" == c.charAt(o) ? r.concat("a") : "r" == c.charAt(o) ? r.concat("b") : "s" == c.charAt(o) ? r.concat("c") : "t" == c.charAt(o) ? r.concat("d") : "u" == c.charAt(o) ? r.concat("e") : "v" == c.charAt(o) ? r.concat("f") : "w" == c.charAt(o) ? r.concat("g") : "x" == c.charAt(o) ? r.concat("h") : "y" == c.charAt(o) ? r.concat("i") : "z" == c.charAt(o) ? r.concat("j") : "A" == c.charAt(o) ? r.concat("U") : "B" == c.charAt(o) ? r.concat("V") : "C" == c.charAt(o) ? r.concat("W") : "D" == c.charAt(o) ? r.concat("X") : "E" == c.charAt(o) ? r.concat("Y") : "F" == c.charAt(o) ? r.concat("Z") : "G" == c.charAt(o) ? r.concat("A") : "H" == c.charAt(o) ? r.concat("B") : "I" == c.charAt(o) ? r.concat("C") : "J" == c.charAt(o) ? r.concat("D") : "K" == c.charAt(o) ? r.concat("E") : "L" == c.charAt(o) ? r.concat("K") : "M" == c.charAt(o) ? r.concat("L") : "N" == c.charAt(o) ? r.concat("M") : "O" == c.charAt(o) ? r.concat("N") : "P" == c.charAt(o) ? r.concat("O") : "Q" == c.charAt(o) ? r.concat("P") : "R" == c.charAt(o) ? r.concat("Q") : "S" == c.charAt(o) ? r.concat("R") : "T" == c.charAt(o) ? r.concat("S") : "U" == c.charAt(o) ? r.concat("T") : "V" == c.charAt(o) ? r.concat("F") : "W" == c.charAt(o) ? r.concat("G") : "X" == c.charAt(o) ? r.concat("H") : "Y" == c.charAt(o) ? r.concat("I") : "Z" == c.charAt(o) ? r.concat("J") : "1" == c.charAt(o) ? r.concat("7") : "2" == c.charAt(o) ? r.concat("8") : "3" == c.charAt(o) ? r.concat("9") : "4" == c.charAt(o) ? r.concat("4") : "5" == c.charAt(o) ? r.concat("5") : "6" == c.charAt(o) ? r.concat("6") : "7" == c.charAt(o) ? r.concat("1") : "8" == c.charAt(o) ? r.concat("2") : "9" == c.charAt(o) ? r.concat("3") : "@" == c.charAt(o) ? r.concat("!") : "+" == c.charAt(o) ? r.concat("_") : "/" == c.charAt(o) ? r.concat("%") : "." == c.charAt(o) ? r.concat("#") : encodeURI(r.concat(c.charAt(o)));
    }
    return enTree(r);
}
function f_cForm(f){
	return {
		"name":jQuery.trim(f.find('#name').val()),
		"email":jQuery.trim(f.find('#email').val()),
		"company":jQuery.trim(f.find('#company').val()),
		"phone":jQuery.trim(f.find('#phone').val()),
		"message":jQuery.trim(f.find('#message').val()),
	}
}
