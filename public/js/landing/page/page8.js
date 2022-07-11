let inqbg="TPC",
	inqKey="13bcbc8d49ee223937c008c63bd235f3",
	inqRequest="inquiry-request",
	inqhas="xyz";
$(document).ready(function(){
    $('#sec3').onScrolledTo(0,function(){
        text_slide('#sec3');
        slide_sec3();
	});
    $('#sec5').onScrolledTo(0,function(){
        slide_sec5();
	});
    $('#sec6').onScrolledTo(0,function(){
        slide_sec6();
	});
    $('.border_animation').mouseenter(function(){
        $(this).addClass('border_animation_active');
    }).mouseleave(function(){
        setTimeout(() => {
            $(this).removeClass('border_animation_active');
        }, 1500);
    });
    $('#submitcontract').on('click',function(){
		var f = $('#contact-form'),
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
								    	res = f.find('#res');
                            		if(ea.status == 'success'){
                                        msg = '<div class="alert alert-success"><strong>Thank you!</strong> '+ea.message+' <span class="c"></span></div>';
                                        res.html(msg);
                                        f.resetForm();
                                        // c(15,res.find('.alert'));
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
function text_slide(row){
    let block = $(row+" .text-slide-block"),
        message =  block.find('.text-slide'),
        slide = block.attr('data-slide'),
        current = block.attr('data-current'),
        time = block.attr('data-time'),
        message_width = message.outerWidth();
        percent = 0;
    setInterval(() => {
        if($(window).width() > 991){
            current = parseInt(block.attr('data-current')) + 1;
            percent = (parseInt(block.attr('data-current')) * 2) * 10;
            num = parseInt(block.attr('data-current')) - parseInt(slide);
            num = - num;
            num = num < 2 ? 1.5 : num;
            message_width = block.find('.text-slide').outerWidth() / num;
            if(current > slide){
                block.attr('data-current',1);
                message.css({
                    "margin-left":"0",
                });
            }else{
                block.attr('data-current',current);
                if(percent > 0){
                    message.css({
                        "margin-left":"calc("+percent+"% - "+message_width+"px)",
                    });
                }
            }
        }else{
            message.css({
                "margin":"auto",
            });
        }
    }, time);
}
function slide_sec3(){
    $('#sec3 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", ""],
        dots:false,
        items:2,
        responsive:{
            280:{
                items:1,
                stagePadding: 50,
            },
            640:{
                items:1,
                stagePadding: 50,
            },
            1024:{
                items:2,
                stagePadding: 100,
            }
        }
    });
}
function slide_sec5(){
    let next = "<picture>"+
    "<source srcset='/assets/images/landing/page8/mobile/Icon-6.webp' media='(max-width: 640px)'>"+
    "<img src='/assets/images/landing/page8/desktop/Icon-6.webp' alt='next' width='900' height='350' class='img-fluid'>"+
    "</picture>";
    $('#sec5 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:0,
        rewind:true,
        nav:true,
        navText : ["", next],
        animateOut: 'fadeOut',
        dots:false,
        items:1,
        onChanged: function (e) {
            let index = e.item.index + 1,
                btn_next = $('#sec5 .slide .owl-carousel .owl-nav > .owl-next'),
                next_icon = "";
            if(index == 1){
                next_icon = "<picture>"+
                            "<source srcset='/assets/images/landing/page8/mobile/Icon-6.webp' media='(max-width: 640px)'>"+
                            "<img src='/assets/images/landing/page8/desktop/Icon-6.webp' alt='next' width='900' height='350' class='img-fluid'>"+
                            "</picture>";
            }else{
                next_icon = "<picture>"+
                            "<source srcset='/assets/images/landing/page8/mobile/Icon-7.webp' media='(max-width: 640px)'>"+
                            "<img src='/assets/images/landing/page8/desktop/Icon-7.webp' alt='next' width='900' height='350' class='img-fluid'>"+
                            "</picture>";
            }
            btn_next.html(next_icon);
        },
    });
}
function slide_sec6(){
    $('#sec6 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        rewind:true,
        nav:false,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:false,
        items:1,
        responsive:{
            280:{
                items:1,
                stagePadding: 30,
            },
            991:{
                items:1,
                stagePadding: 250,
            },
            1410:{
                items:1,
                stagePadding: 450,
            }
        }
    });
}
function thank_you(){
    window.location.href = "/landing/thank-you6";
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
	return {
		"name":jQuery.trim(f.find('#name').val()),
		"email":jQuery.trim(f.find('#email').val()),
		"company":jQuery.trim(f.find('#company').val()),
		"phone":jQuery.trim(f.find('#phone').val()),
		"message":jQuery.trim(f.find('#message').val()),
	}
}
