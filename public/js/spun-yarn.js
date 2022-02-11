jQuery(document).ready(function($){
	var video1 =$('#video1')[0],
		btn_play1 = $('#btn-video1'),
		video2 =$('#video2')[0],
		btn_play2 = $('#btn-video2');
	sectwo();
	setTimeout(function(){
		secfour();
	},500);
	secfive();
	secsix();
	secseven();
	secten();
	seceleven();
	secthirteen();
	secfourteen();
	$(btn_play1).click(function(){
		btn_play(video1,this);
	});
	$(btn_play2).click(function(){
		btn_play(video2,this);
	});
	$(window).scroll(function(event){
		v_scroll(video1,btn_play1,$('.section-six'),480);
		v_scroll(video2,btn_play2,$('.section-eight'),480);
	});
	$(window).resize(function(event) {
		sectwo();
		setTimeout(function(){
			secfour();
		},500);
		secfive();
		secsix();
		secseven();
		secten();
		seceleven();
		secthirteen();
		secfourteen();
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
	var para1 = jQuery('.section-two .pads .pads1 span.para1'),
		para2 = jQuery('.section-two .pads .pads1 span.para2'),
		image = jQuery('.section-two .pads div.img-block1'),
		block_img1 = jQuery('.section-two .pads .pads1 .r2 > div.col1'),
		block_img2 = jQuery('.section-two .pads .pads1 .r4 > div.col1'),
		block_para1 = jQuery('.section-two .pads .pads1 .r3 div.col1 p'),
		block_para2 = jQuery('.section-two .pads .pads1 .r2 div.col2 p');
	if(jQuery( window ).width() <= 767){
		jQuery(image).appendTo(block_img1);
		jQuery(para1).appendTo(block_para2);
	}else{
		jQuery(image).appendTo(block_img2);
		jQuery(para1).appendTo(block_para1);
		jQuery(para2).appendTo(block_para1);
	}
}

function secfour(){
	var minHeight,
		block1 = jQuery('.section-four .r1 .col1'),
		block2 = jQuery('.section-four .r1 .col2'),
		block3 = jQuery('.section-four .r1 .col3 .content_1'),
		dot_top = jQuery('.section-four .r1 ul.box-five-dot-top'),
		dot_bottom = jQuery('.section-four .r1 ul.box-five-dot-bottom');
	if(jQuery(window).width() <= 768){
		minHeight = jQuery(block1).height() < 600 ? 600 : jQuery(block1).height();
		jQuery('.section-four .r1 .col1').removeAttr('style');
		jQuery('.section-four .r1 .col2').removeAttr('style');
		jQuery('.section-four .r1 .content_1 .p2').appendTo(block3);
		jQuery(dot_bottom).appendTo(block3);
		jQuery(dot_top).appendTo(block2);
		jQuery('.section-four .r1 .col1 .content_1').appendTo(block2);
		jQuery(block1).css({'min-height':minHeight+'px',});
		jQuery(block2).css({'min-height':minHeight+'px',});
	}else{
		minHeight = jQuery('.section-four .r1 .col2').height();
		jQuery('.section-four .r1 .col1').removeAttr('style');
		jQuery('.section-four .r1 .col2').removeAttr('style');
		jQuery(dot_top).appendTo(block1);
		jQuery(dot_bottom).appendTo(block1);
		jQuery('.section-four .r1 .col3 .content_1 .p2').appendTo('.section-four .r1 .col2 .content_1');
		jQuery('.section-four .r1 .col2 .content_1').appendTo('.section-four .r1 .col1 .content_group');
		jQuery(block1).css({'min-height':minHeight+'px',});
	}
}
function secfive(){
	var d_content = jQuery(".section-five div.row > div.divd"),
		m_content = jQuery(".section-five div.row > div.divm"),
		content = jQuery(d_content).children('div.sec_title').html() ? 
		jQuery(d_content).children('div.sec_title').html() : (jQuery(m_content).children('div.sec_title').html() ? 
			jQuery(m_content).children('div.sec_title').html() : "");
		if(jQuery( window ).width() <= 767){
			jQuery(d_content).text("");
			jQuery(m_content).text("");
			jQuery(m_content).append('<div class="sec_title">'+content+'</div>');
		}else{
			jQuery(m_content).text("");
			jQuery(d_content).text("");
			jQuery(d_content).append('<div class="sec_title">'+content+'</div>');
		}
}
function secsix(){
	var div_d = jQuery('.section-six div.row > div.divd'),
		div_m = jQuery('.section-six div.row > div.divm'),
		content = jQuery(div_d).children('p').text() ? 
		jQuery(div_d).children('p').text() : (jQuery(div_m).children('p').text() ? 
			jQuery(div_m).children('p').text() : "");
	if(jQuery( window ).width() <= 767){
		jQuery(div_d).text("");
		jQuery(div_m).text("");
		jQuery(div_m).append('<p>'+content+'</p>');
	}else{
		jQuery(div_m).text("");
		jQuery(div_d).text("");
		jQuery(div_d).append('<p>'+content+'</p>');
	}
}
function secseven(){
	var div_d = jQuery('.section-seven div.row div.divd'),
		div_m = jQuery('.section-seven div.row div.divm');
		content = jQuery(div_d).children('p').text() ? 
		jQuery(div_d).children('p').text() : (jQuery(div_m).children('p').text() ? 
			jQuery(div_m).children('p').text() : "");
	if(jQuery( window ).width() <= 991){
		jQuery(div_d).text("");
		jQuery(div_m).text("");
		jQuery(div_m).append('<p class="p2m m-0">'+content+'</p>');
	}else{
		jQuery(div_m).text("");
		jQuery(div_d).text("");
		jQuery(div_d).append('<p class="p2">'+content+'</p>');
	}
}
function secten(){
	var block0 = jQuery('.section-ten div.row'),
		block1 = jQuery('.section-ten div.row div.block1'),
		block2 = jQuery('.section-ten div.row div.block2');
	if(jQuery(window).width() <= 767){
		jQuery(block1).appendTo(block0);
	}else{
		jQuery(block2).appendTo(block0);
	}
}
function seceleven(){
	var block2 = jQuery('.section-eleven div.r2'),
		row1 = jQuery('.section-eleven div.r2 > div.row1'),
		row2 = jQuery('.section-eleven div.r2 > div.row2');
	if(jQuery(window).width() <= 767){
		jQuery(row1).appendTo(block2);
	}else{
		jQuery(row2).appendTo(block2);
	}
}
function secthirteen(){
	var block1 = jQuery('.section-thirteen'),
		block2 = jQuery('.section-thirteen div.row1 > .content-block1 .subrow1'),
		image1 = jQuery('.section-thirteen >.img-block'),
		image2 = jQuery('.section-thirteen div.row1 > .content-block1 .subrow1 >.img-block');
	if(jQuery(window).width() <= 991){
		jQuery(image1).appendTo(block2);
	}else{
		jQuery(image2).appendTo(block1);
	}
}
function secfourteen(){
	var block1 = jQuery('.section-fourteen div.r1 > .row1'),
		block2 = jQuery('.section-fourteen div.r1 > .row2'),
		row1 = jQuery('.section-fourteen div.r1 > div > .content-block'),
		row2 = jQuery('.section-fourteen div.r1 > div > .img-block');
	if(jQuery(window).width() <= 767){
		jQuery(row2).appendTo(block1);
		jQuery(row1).appendTo(block1);
	}else{
		jQuery(row2).appendTo(block2);
	}
}
