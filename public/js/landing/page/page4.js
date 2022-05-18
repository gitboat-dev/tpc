let inqbg="TPC",
	inqKey="13bcbc8d49ee223937c008c63bd235f3",
	inqRequest="inquiry-request",
	inqhas="xyz";
jQuery(document).ready(function($){
    var video1 =$('#video1')[0],
		btn_play1 = $('#btn-video1');
    sec1();
    // $('.move_to').click(function(event){
    //     event.preventDefault();
    //     $('html, body').animate({
    //         scrollTop: $($(this).attr('href')).offset().top,
    //     }, 1000);
    // });
    $(window).resize(function(event) {
        sec1();
    });
    $('#sec1').onScrolledTo(0,function(){
        sec1();
	});
    $('#sec3').onScrolledTo(0,function(){
        sec3_slide();
	});
    $('#sec6').onScrolledTo(0,function(){
        sec6_slide();
	});
    $('#sec7').onScrolledTo(0,function(){
        sec7_slide();
	});
    $(window).scroll(function(){
        v_scroll(video1,btn_play1,$('#sec1'),480);
    });
    $('figure.btn-play').click(function(){
        if (!video1.paused) {
			btn_paused(video1,btn_play1);
		}else{
			btn_play(video1,btn_play1);
		}
    });
    $('#video1').click(function(){
		if (!video1.paused) {
			btn_paused(video1,btn_play1);
		}else{
			btn_play(video1,btn_play1);
		}
	});
    $('#submitcontract').on('click',function(){
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
function sec1(){
    var row1 = jQuery('#sec1 .r1 .col1 .content_block'),
		row2 = jQuery('#sec1 .r1 .col2 .content_block'),
		minheight = jQuery(row2).outerHeight();
	if(jQuery(window).width() <= 991){
		jQuery(row1).removeAttr('style');
	}else{
		jQuery(row1).css({'min-height':minheight+'px'});
	}
}
function sec3_slide(){
    $('#sec3 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        nav:true,
		navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots:true,
        responsive:{
            0:{
                items:1,
                stagePadding: 20,
            },
            991:{
                items:2,
            },
            1000:{
                items:2,
            }
        }
    });
}
function sec6_slide(){
    $('#sec6 .slide .owl-carousel').owlCarousel({
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:10,
        nav:true,
		navText : ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        dots:true,
        items:1,
    });
}
function sec7_slide(){
    $('#sec7 .slide .owl-carousel').owlCarousel({
        center: true,
        lazyLoad:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:5,
        nav:false,
		navText : ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1,
                stagePadding: 20,
            },
            991:{
                items:3,
                // stagePadding: 20,
            },
            1000:{
                items:5,
            }
        }
    });
}
function btn_play(video,btn) {
	if (video.paused) {
        video.play();
        jQuery(btn).css({'display':'none'});
    }
}
function btn_paused(video,btn) {
	if(!video.paused){
        video.pause();
        jQuery(btn).css({'display':'block'});
    }
}
function v_scroll(video,btn,selector,pointer=0){
	var box = jQuery(selector),
		box_next = box.next('section'),
		start = parseInt(box.offset().top) - pointer;
		stop = parseInt(box_next.offset().top) - pointer;
	if(document.documentElement.scrollTop > start && document.documentElement.scrollTop < stop){
		btn_play(video,btn);
	}else{
		btn_paused(video,btn);
	}
}
function thank_you(){
    window.location.href = "/landing/thank-you4";
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
