jQuery(document).ready(function($){
    $('#sec8 .arrow-block img').click(function() {
		var block = $(this).parents('div.arrow-block').prev('ul.custumer-lists');
		if($(block).is(":visible")){
			$(block).slideUp(400);
			$(this).addClass('rotate');
		}else{
			$(block).slideDown(400);
			$(this).removeClass('rotate');
		}
	});
});
