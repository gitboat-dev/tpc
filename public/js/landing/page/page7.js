let inqbg="TPC",
	inqKey="13bcbc8d49ee223937c008c63bd235f3",
	inqRequest="inquiry-request",
	inqhas="xyz";
$(document).ready(function(){
    $('#sec7').onScrolledTo(0,function(){
        slide_sec7();
	});
    $('footer').onScrolledTo(0,function(){
        g_map();
	});
    $('#submit-f1').on('click',function(event){
        event.preventDefault();
		var f = $('#contact-form1'),
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
                            		var f = $('#contact-form1'),
								    	res = f.find('#res1');
                            		if(ea.status == 'success'){
                                        msg = '<div class="alert alert-success"><strong>Thank you!</strong> '+ea.message+' <span class="c"></span></div>';
                                        res.html(msg);
                                        f.resetForm();
                                        c(15,res.find('.alert'));
                                        thank_you();
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
    $('#submit-f2').on('click',function(event){
        event.preventDefault();
		var f = $('#contact-form2'),
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
                            		var f = $('#contact-form2'),
								    	res = f.find('#res2');
                            		if(ea.status == 'success'){
                                        msg = '<div class="alert alert-success"><strong>Thank you!</strong> '+ea.message+' <span class="c"></span></div>';
                                        res.html(msg);
                                        f.resetForm();
                                        c(15,res.find('.alert'));
                                        thank_you();
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
function slide_sec7(){
    $('#sec7 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:0,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
    });
}
function g_map(){
    let map_block = $('div#g-map'),
        map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.4639247306945!2d100.43141561448945!3d13.629520003788246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x993a5e744d23c4be!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5hOC4l-C4ouC5guC4nuC4peC4teC5gOC4reC4quC5gOC4leC4reC4o-C5jCDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1656645252334!5m2!1sth!2sth" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    map_block.html(map);
}
function thank_you(){
    window.location.href = "/landing/thank-you5";
}
function checkData(f){
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
	if(company.val() == "" || company.val() == 0){
		error = error + 1;
		company.next('span.company').text('Please enter your company.');
	}
    if((email.val() == "" || email.val() == 0) && !isMail(email.val())){
		error = error + 1;
		email.next('span.email').text('Please enter your email.');
	}
	if(phone.val() == "" || phone.val() == 0){
		error = error + 1;
		phone.next('span.phone').text('Please enter your phone.');
	}
	// if(message.val() == "" || message.val() == 0){
	// 	error = error + 1;
	// 	message.next('span.message').text('Please enter your description.');
	// }
	if(error < 1){
		data['success'] = true;
	}
	return data;
}
function cForm(f){
    let privacy = "",
        message = "----";
    if(f.find('#privacy').is(':checked')){
        privacy = "accept";
    }
    if(f.find('textarea[name="message"]').val() && f.find('textarea[name="message"]').val() != ""){
        message = jQuery.trim(f.find('textarea[name="message"]').val());
    }
	return {
		"name":jQuery.trim(f.find('input[name="name"]').val()),
		"email":jQuery.trim(f.find('input[name="email"]').val()),
		"company":jQuery.trim(f.find('#company').val()),
		"phone":jQuery.trim(f.find('input[name="phone"]').val()),
		"message":message,
        "privacy":jQuery.trim(privacy),
	}
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
