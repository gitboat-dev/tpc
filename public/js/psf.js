jQuery(document).ready(function($){
	var video1 =$('#video1')[0],
		btn_play1 = $('#btn-video1');
	sectwo();
	secthree();
	secfour();
	secfive();
	secsix();
	setTimeout(function(){
		secseven();
		seceight();
		secnine();
		secten();
	},1000);
	$(window).resize(function(event) {
		sectwo();
		secthree();
		secfour();
		secfive();
		secsix();
		secten();
		setTimeout(function(){
			secseven();
			seceight();
			secnine();
		},500);
	});
	$(window).scroll(function(){
		secthree();
		secfour();
		secsix();
		secseven();
		seceight();
		secnine();
		v_scroll(video1,btn_play1,$('.section-two'),480);
	});
	$(btn_play1).click(function(){
		btn_play(video1,this);
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
		box_next = box.next('div'),
		start = parseInt(box.offset().top) - pointer;
		stop = parseInt(box_next.offset().top) - pointer;
	if(document.documentElement.scrollTop > start && document.documentElement.scrollTop < stop){
		btn_play(video,btn);
	}else{
		btn_paused(video,btn);
	}
}
function sectwo(){
	var row1 = jQuery('.section-two .r1 .col1'),
		row2 = jQuery('.section-two .r1 .col2'),
		minheight1 = jQuery(row1).height();
	if(jQuery( window ).width() <= 868){
		jQuery(row2).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight1+'px'});
	}
}
function secthree(){
	var block1 = jQuery('.section-three .r1'),
		row1 = jQuery('.section-three .r1 .col1'),
		row2 = jQuery('.section-three .r1 .col2'),
		minheight1 = jQuery(row2).height();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row1).css({'min-height':minheight1+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}
}
function secfour(){
	var row1 = jQuery('.section-four .r1 .col1'),
		row2 = jQuery('.section-four .r1 .col2'),
		row3 = jQuery('.section-four .r1 .col3'),
		minheight = jQuery(row1).height();
	if(jQuery( window ).width() <= 991){
		jQuery(row2).removeAttr('style');
		jQuery(row3).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight+'px'});
		jQuery(row3).css({'min-height':minheight+'px'});
	}
}
function secfive(){
	var block1 = jQuery('.section-five .r1'),
		row1 = jQuery('.section-five .r1 .col1'),
		row2 = jQuery('.section-five .r1 .col2'),
		row3 = jQuery('.section-five .r1 .col3'),
		row4 = jQuery('.section-five .r1 .col4'),
		minheight = jQuery(row2).height();
	if(jQuery( window ).width() <= 991){
		jQuery(row4).removeAttr('style');
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
		jQuery(row3).appendTo(block1);
		jQuery(row4).appendTo(block1);
	}else{
		jQuery(row4).css({'min-height':minheight+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
		jQuery(row3).appendTo(block1);
		jQuery(row4).appendTo(block1);
	}
}
function secsix(){
	var row1 = jQuery('.section-six .r1 .col1'),
		row2 = jQuery('.section-six .r1 .col2'),
		row3 = jQuery('.section-six .r1 .col3'),
		minheight1 = jQuery(row1).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).removeAttr('style');
		jQuery(row3).removeAttr('style');
	}else{
		jQuery(row2).css({'min-height':minheight1+'px'});
		jQuery(row3).css({'min-height':minheight1+'px'});
	}
}
function secseven(){
	var image = jQuery('.section-seven .r1 .col2 .col2-2 .img_block1 img'),
		image_block = jQuery('.section-seven .r1 .imbcol-2-2'),
		content2_2 = jQuery('.section-seven .r1 .ctcol-2-2'),
		block1 = jQuery('.section-seven .r1 .col1'),
		block2 = jQuery('.section-seven .r1 .col2'),
		row1_1 = jQuery('.section-seven .r1 .col1-1'),
		row1_2 = jQuery('.section-seven .r1 .col1-2'),
		row1_3 = jQuery('.section-seven .r1 .col1-3'),
		row2_1 = jQuery('.section-seven .r1 .col2-1'),
		row2_2 = jQuery('.section-seven .r1 .col2-2'),
		row2_3 = jQuery('.section-seven .r1 .col2-3');
		minheight2 = jQuery(image).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row2_1).removeAttr('style');
		jQuery(row2_2).removeAttr('style');
		jQuery(content2_2).appendTo(row2_3);
		jQuery(row1_1).appendTo(block1);
		jQuery(row2_1).appendTo(block1);
		jQuery(row1_2).appendTo(block1);
		jQuery(row1_3).appendTo(block2);
		jQuery(row2_3).appendTo(block2);
	}else{
		jQuery(row2_1).css({'min-height':minheight2+'px'});
		jQuery(row2_2).css({'min-height':minheight2+'px'});
		jQuery(image_block).appendTo(row2_2);
		jQuery(content2_2).appendTo(row2_2);
		jQuery(row1_1).appendTo(block1);
		jQuery(row1_2).appendTo(block1);
		jQuery(row1_3).appendTo(block1);
		jQuery(row2_1).appendTo(block2);
		jQuery(row2_2).appendTo(block2);
		jQuery(row2_3).appendTo(block2);
	}
}
function seceight(){
	var image_block = jQuery('.section-eight .r1 .col2 .col2-2 .img_block1'),
		block1 = jQuery('.section-eight .r1 .col2'),
		block2 = jQuery('.section-eight .r1 .col3'),
		row2_1 = jQuery('.section-eight .r1 .col2-1'),
		row2_2 = jQuery('.section-eight .r1 .col2-2'),
		row2_3 = jQuery('.section-eight .r1 .col2-3'),
		row3_1 = jQuery('.section-eight .r1 .col3-1'),
		row3_2 = jQuery('.section-eight .r1 .col3-2'),
		row3_3 = jQuery('.section-eight .r1 .col3-3'),
		minheight1 = jQuery(image_block).outerHeight() / 2;
	if(jQuery( window ).width() <= 991){
		jQuery(row2_1).removeAttr('style');
		jQuery(row2_2).removeAttr('style');
		jQuery(row2_3).removeAttr('style');
		jQuery(row3_1).removeAttr('style');
		jQuery(row3_2).removeAttr('style');
		jQuery(row3_3).removeAttr('style');

		jQuery(row2_1).appendTo(block1);
		jQuery(row3_1).appendTo(block1);
		jQuery(row2_2).appendTo(block1);
		jQuery(row2_3).appendTo(block1);
		jQuery(row3_2).appendTo(block2);
		jQuery(row3_3).appendTo(block2);
	}else{
		jQuery(row2_1).css({'min-height':minheight1+'px'});
		jQuery(row2_2).css({'min-height':minheight1+'px'});
		jQuery(row2_3).css({'min-height':minheight1+'px'});
		jQuery(row3_1).css({'min-height':minheight1+'px'});
		jQuery(row3_2).css({'min-height':minheight1+'px'});
		jQuery(row3_3).css({'min-height':minheight1+'px'});

		jQuery(row2_1).appendTo(block1);
		jQuery(row2_2).appendTo(block1);
		jQuery(row2_3).appendTo(block1);
		jQuery(row3_1).appendTo(block2);
		jQuery(row3_2).appendTo(block2);
		jQuery(row3_3).appendTo(block2);
	}
}
function secnine(){
	var block1 = jQuery('.section-nine .r1'),
		row1 = jQuery('.section-nine .r1 .col1'),
		row2 = jQuery('.section-nine .r1 .col2'),
		minheight = jQuery(row2).outerHeight();
	if(jQuery( window ).width() <= 991){
		jQuery(row1).removeAttr('style');
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row1).css({'min-height':minheight+'px'});
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}
}
function secten(){
	var block1 = jQuery('.section-ten .r1'),
		row1 = jQuery('.section-ten .r1 .col1'),
		row2 = jQuery('.section-ten .r1 .col2');
	if(jQuery( window ).width() <= 768){
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row1).appendTo(block1);
		jQuery(row2).appendTo(block1);
	}
}

function thank_you(){
    window.location.href = "/landing/thank-you";
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
