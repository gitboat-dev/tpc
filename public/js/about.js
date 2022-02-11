jQuery(document).ready(function($){
	var video1 = $('#video1')[0],
		btn_play1 = $('#btn-video1');
	$(btn_play1).click(function(){
		console.log('55555');
		btn_play(video1,btn_play1);
	});
	$('#video1').click(function(){
		if (!video1.paused) {
			btn_paused(video1,btn_play1);
		}else{
			btn_play(video1,btn_play1);
		}
	});
	$(window).scroll(function(event){
		v_scroll(video1,btn_play1,$('.section-two'),360);
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