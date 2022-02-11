$(document).ready(function(){
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
	    }
	});
	blogtable();
});
function blogtable(){
	var blogtable = $('#blogtable').DataTable({
		processing:true,
        serverSide:true,
        dom: "lBfrtip",
        stateSave: true,
        responsive: true,
        select: true,
        columnDefs: [
        	{ orderable: false, targets: [0,6,7] },
        	{ className: "text-center" , targets: [0,1,2,3,4,7]},
        	{ targets: [0,1,2,3,7],  width: "5%"},
        	{ targets: 4,  width: "15%"},
        	{ targets: 5,  width: "30%"},
        	{ targets: 6,  width: "30%"},
        ],
        order:[[1,"desc"]],
        language: {
	        searchPlaceholder: "Search for articales",
	    },
        ajax:{
	        url:"/backoffice/blog/datatables",
	        dataType:"JSON",
	        type:"POST",
	        column:[
	          {data:"id"},
	          {data:"id"},
	          {data:"active"},
	          {data:"type"},
	          {data:"author"},
	          {data:"title"},
	          {data:"remark"},
	          {data:"action"},
	        ],
		},
	});
	textarea = $('#blog_select');
	blogtable.on('draw',function(){
		if($(textarea).val() != ""){
			$($(textarea).val().split(",")).each(function(k,value){
				$('input#r'+value).attr('checked','checked');
			})
		}
	});
	$('#blogtable_length').append(' <button class="dt-button" '+
    'onclick="blog_adjust()"><i class="fa fa-refresh" aria-hidden="true"></i> Reload</button> '+
    '<buttom class="dt-button" onclick="blog_create()"><i class="fa fa-plus" aria-hidden="true" style="color:green;">'+ 
    '</i> เพิ่ม</buttom> <button id="blog-delete" class="dt-button" onclick="blog_delete()" disabled="disabled"><i class="fa fa-times" '+
    'aria-hidden="true"></i> ลบ</button> <button id="blog-active" class="dt-button" onclick="blog_active()" disabled="disabled">'+
    '<i class="fa fa-window-restore" aria-hidden="true"></i> สลับสถานะ</button>');
}
function blog_adjust(){
	var table = $('#blogtable').DataTable();
	table.ajax.reload(null, false);
}
function blog_create(){
	$.ajax({
		url: '/backoffice/blog/create',
		type: 'post',
		success: function (res) {
			if(res != ""){
				if(res.success){
					window.location.href = res.next_page;
				}else{
					$.alert({
		                title: '<font color="red">แจ้งเตือน!</font>',
		                content: 'เกิดข้อผิดพลาด',
		            });
				}
			}
		}
	});
}
function blog_select(obj,id,func = 0){
	var textarea = $('#blog_select'),
		checked = $(obj).is(':checked'),
		data = [],
		dlt_data = "";
	if(func < 1){
		$('#blogtable .row_check').not(obj).prop('checked',false);
		if(checked){
			$(textarea).text(id)
		}else{
			$(textarea).text('');
		}
	}else{
		if(checked){
			if($(textarea).val() == ""){
		      $(textarea).text('');
		      data.push(id);
		      $(textarea).text(data.join(","));
		    }else if(textarea != ""){
		      data.push((textarea).val(),id);
		      $(textarea).text('');
		      $(textarea).text(data.join(","));
		    }
		}else{
			if($(textarea).val().split(",").length > 0){
				dlt_data =$(textarea).val().split(",").filter(function(value){
		        	return value != id;
		        });
		        $(textarea).text('');
		        $(textarea).text(dlt_data.join(","));
			}
		}
	}
	delete_blog_status();
	active_blog_status();
}
function delete_blog_status(){
	var data = false;
	$('button#blog-delete').attr('disabled','disabled');
	if($('#blog_select').val() != ""){
		if($('#blog_select').val().split(",").length > 0){
			$('button#blog-delete').removeAttr('disabled');
			data = true;
		}
	}
	return data;
}
function blog_delete(){
	if(delete_blog_status()){
		$.confirm({
	        title: '<font color="orange">ยืนยัน!</font>',
	        content: 'กรุณายืนยัน เพื่อทำการลบข้อมูล',
	        buttons: {
	            Yes: function () {
	                $.ajax({
						url:"/backoffice/blog/delete",
						type:"post",
						data:{blog_ids:blog_ids()},
						success:function(res){
							if(res != ""){
								if(res.success){
									$('#blog_select').text("");
									delete_blog_status();
									active_blog_status();
									blog_adjust();
								}else{
									if(res.msg){
										$.alert({
							                title: '<font color="red">แจ้งเตือน!</font>',
							                content: res.msg,
							            });
									}else{
										$.alert({
							                title: '<font color="red">แจ้งเตือน!</font>',
							                content: 'เกิดข้อผิดพลาด กรุณาติดต่อเจ้าหน้าที่',
							            });
									}
								}
							}
						}
					});
	            },
	            no: function () {},
	        }
	    });
	}else{
		$.alert({
            title: '<font color="red">แจ้งเตือน!</font>',
            content: 'เลือกแถวที่ต้องการลบ',
        });
	}
}
function active_blog_status(){
	var data = false;
	$('button#blog-active').attr('disabled','disabled');
	if($('#blog_select').val() != ""){
		if($('#blog_select').val().split(",").length > 0){
			$('button#blog-active').removeAttr('disabled');
			data = true;
		}
	}
	return data;
}
function blog_active(){
	if(active_blog_status()){
		$.confirm({
	        title: '<font color="orange">ยืนยัน!</font>',
	        content: 'กรุณายืนยัน เพื่อทำการเปลี่ยนสถานะ',
	        buttons: {
	            Yes: function () {
	                $.ajax({
						url:"/backoffice/blog/active",
						type:"post",
						data:{blog_ids:blog_ids()},
						success:function(res){
							if(res != ""){
								if(res.success){
									$('#blog_select').text("");
									active_blog_status();
									delete_blog_status();
									blog_adjust();
								}else{
									if(res.msg){
										$.alert({
							                title: '<font color="red">แจ้งเตือน!</font>',
							                content: res.msg,
							            });
									}else{
										$.alert({
							                title: '<font color="red">แจ้งเตือน!</font>',
							                content: 'เกิดข้อผิดพลาด กรุณาติดต่อเจ้าหน้าที่',
							            });
									}
								}
							}
						}
					});
	            },
	            no: function () {},
	        }
	    });
	}else{
		$.alert({
            title: '<font color="red">แจ้งเตือน!</font>',
            content: 'เลือกแถวที่ต้องการเปลี่ยนสถานะ',
        });
	}
}
function blog_ids(){
	var data = $('#blog_select').val().split(",");
	return data;
}