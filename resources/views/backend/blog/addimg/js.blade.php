<script>
	$(document).ready(function(){
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
			}
		});
		sort();
	});
	function addFile(){
		$('#file_upload').val("");
		$('#file_upload').click();
	}
	function uploadImages(obj,id = 0){
		if(id > 0){
			var files = $(obj).prop('files'),
				overSize = 0,
				formData;
			$(files).each(function(k,file){
				if(file['size'] < 2000000){
					formData = new FormData()
					formData.append('files',file);
		    		formData.append('blog_id',id);
		    		var second = k * 0.5;
		    		saveImage(formData,second);
				}else{
					overSize++;
				}
			});
			if(overSize > 0){
				$.alert({
		            title: '<font color="red">แจ้งเตือน!</font>',
		            content: 'ไฟล์มีขนาดใหญ่กว่าที่กำหนด ควรมีขนาดไม่เกิน 2MB',
		        });
		        $('#file_upload').val("");
			}
		}
	}

	function saveImage (formData,second){
		var time = 1000 * second;
		$('li.noimg')[0].remove();
		setTimeout(function(){
			$.ajax({
				url:"/backoffice/blog/banner/upload",
	            type:"post",
	            data:formData,
	            contentType: false,
	            cache: false,
	            processData:false,
	            success:function(res){
	            	if(res != ""){
	            		console.log(res);
	            		$('div.img-lists-block').append(
	            			'<li class="img" id="'+res.id+'">'+
					            '<span class="img-sequence">'+res.sort+'</span>'+
					            '<a href="'+res.path+'" target="_blank">'+
				                	'<img src="'+res.path+'">'+
				                '</a>'+
				                '<small class="file_size">'+
				                	'<i class="fa fa-trash del-img" aria-hidden="true" onclick="deleteImage('+res.id+')"></i> '+ res.size +
				                '</small>'+
					        '</li>'
					    );
					    sort_image($('li.img'));
	            	}
	            }
			});
		},time);
	}
	function sort_image(selector){
		$('li.img').remove();
		var items = selector.get();
		items.sort(function(a,b){
			var keyA = $(a).attr('id');
			var keyB = $(b).attr('id');

			if (keyA < keyB) return -1;
			if (keyA > keyB) return 1;
			return 0;
		});
		$(items).each(function(k,value){
			$('div.img-lists-block').append(value)
		});
	}
	function sort(){
		var blog_id = $('#sortable').attr('data-id') ? $('#sortable').attr('data-id') : 0;
		$('#sortable').sortable(
			{cursor:"move"},
			{
				stop:function(){
					$('li.img').each(function(key,value){
						var index = key + 1;
						$(this).find('span.img-sequence').text(index);
						sequence(this.id,index,blog_id);
					})
				},
			}
		);
	}
	function sequence(img_id,sort,blog_id){
		$.ajax({
			url:"/backoffice/blog/banner/sort",
			type:"post",
			data:{
				id:img_id,
				blog_id:blog_id,
				sort:sort,
			},
		});
	}
	function deleteImage(id){
		var img = $('li.img').length,
			onimg = 0;
		$.confirm({
	        title: '<font color="orange">ยืนยัน!</font>',
	        content: 'กรุณายืนยันการลบรูปภาพอีกครั้ง',
	        buttons: {
	            Yes: function () {
	                $.ajax({
						url:"/backoffice/blog/banner/delete",
			            type:"post",
			            data:{image_id:id},
			            success:function(res){
			            	if(res != ""){
			            		if(res.success){
			            			$('li#'+res.image_id).remove();
			            			if($('li.img').length < 3){
			            				$('ul.img-lists').append(
											'<li class="noimg">'+
										        '<div class="add-img" onclick="addFile()">+</div>'+
										        '<small style="color: #555;">Add</small>'+
											'</li>'
										);
			            			}
			            		}
			            	}
			            }
					});
	            },
	            no: function () {},
	        }
	    });
	}
</script>