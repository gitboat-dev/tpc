$(document).ready(function(){
	$('.datepicker').datepicker({
		dateFormat: 'yy-mm-dd'
	});
	$('.summernote-desc').summernote({
		toolbar: [
            ["style", ["bold", "italic", "underline", "clear"]],
            ["fontname", ["fontname"]],
            ["fontsize", ["fontsize"]],
            ["color", ["color"]],
	    ],
        callbacks:{
            onEnter:function(e){
                $(this).summernote("pasteHTML", "<br></br>");
                e.preventDefault();
            },
        },
	});
	$('.summernote-details').summernote({
	    toolbar: [
            ["style", ["bold", "italic", "underline", "clear"]],
            ["fontname", ["fontname"]],
            ["fontsize", ["fontsize"]],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
            ["height", ["height"]],
            ['table', ['table','codeview','fullscreen']],
            ["insert", ["link", "images","video", "hr"]],
            ["help", ["help"]],
	    ],
        imageAttributes: {
          icon: '<i class="note-icon-pencil"/>',
          figureClass: 'figureClass',
          figcaptionClass: 'captionClass',
          captionText: 'Caption Goes Here.',
          manageAspectRatio: true // true = Lock the Image Width/Height, Default to true
        },
        popover: {
          image: [
            ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter','resizeNone']],
            ['para',['left','center','right']],
            ['custom',['imageAttributes']],
            ['remove', ['removeMedia']],
          ],
        },
	    buttons: {
	        images : imageGallery,
            left : imageJustifyLeft,
            center : imageJustifyCenter,
            right : imageJustifyRight,
	    },
        callbacks:{
            onImageUpload: function (image,editor,welEditable) {
                $(image).each(function(key,value){
                    dropUploadGallery(value,$('.summernote-details'));
                });
            },
            onEnter:function(e){
                $(this).summernote("pasteHTML", "<br></br>");
                e.preventDefault();
            },
        },
	});
    $('button.insert-img').click(function(){
        insertto = $(this).attr('insert-to');
        if($('.gallery-block-img img.active').length == 1){
            var url = $('.gallery-block-img img.active').attr('src');
            $('.'+insertto).summernote('editor.insertImage',url,function(image){
               $('#blogImagesGallery').modal('hide');
            });
        }else{
            $.alert({
                title: '<font color="red">แจ้งเตือน!</font>',
                content: 'ยังไม่ได้เลือกรูปภาพ',
            });
        }
    });
    $('button.save-blog').click(function(){
        var btn = $(this),
            oldText = 'บันทึก <i class="fa fa-floppy-o" aria-hidden="true"></i>';
        btn.text('กำลังบันทึก...');
        btn.attr('disabled','disabled');
        btn.css({
            'background-color':'var(--msBg)',
            'background-image':'unset',
            'color':'#fff',
        });
        $.ajax({
            url:'/backoffice/blog/save',
            type:'post',
            data:blog_content(),
            success:function(res){
                if(res != ""){
                    if(res.success){
                        setTimeout(function(){
                            btn.removeAttr('style');
                            btn.fadeOut().fadeIn().fadeOut().fadeIn();
                            btn.text("");
                            btn.append(oldText);
                            btn.removeAttr('disabled');
                            $('a.slug-url').attr('href',res.url);
                            $('a.slug-url').text(res.url);
                            $('input#slug').val(res.slug);
                        },2000);
                    }else{
                        if(res.msg){
                            $.alert({
                                title: '<font color="red">แจ้งเตือน!</font>',
                                content: res.msg,
                            });
                        }else{
                            $.alert({
                                title: '<font color="red">แจ้งเตือน!</font>',
                                content: 'เกิดข้อผิดพลาด',
                            });
                        }
                        setTimeout(function(){
                            btn.removeAttr('style');
                            btn.fadeOut().fadeIn().fadeOut().fadeIn();
                            btn.text("");
                            btn.append(oldText);
                            btn.removeAttr('disabled');
                        },2000);
                    }
                }
            }
        });
    });
    $("#article_content #type").change(function() {
        if($(this).val() == 1){
            $("#article_content #details").parents('div.form-group').removeClass('hide');
            $("#article_content #columns").parents('div.form-group').addClass('hide');
        }else{
            $("#article_content #details").parents('div.form-group').addClass('hide');
            $("#article_content #columns").parents('div.form-group').removeClass('hide');
        }
    });
});
function blog_content(){
    var form = $("#article_content"),
        formseo = $("#article_seo"),
        active = form.find('#active:checked').length > 0 ? 
                $.trim(form.find('#active:checked').val().replace(/(<([^>]+)>)/gi, "")) : 0,
        details = form.find('#type').val() == 1 ? 
                $.trim(form.find('#details').val()) : "",
        columns = form.find('#type').val() == 2 ? 
                $.trim(form.find('#columns').val().replace(/(<([^>]+)>)/gi, "")) : "";
    return {
        'id':$.trim($('meta[name="token-id"]').attr('content')),
        'active':active,
        'title':$.trim(form.find('#title').val().replace(/(<([^>]+)>)/gi, "")),
        'slug':$.trim(form.find('#slug').val().replace(/(<([^>]+)>)/gi, "")),
        'columns':columns,
        'type':$.trim(form.find('#type').val().replace(/(<([^>]+)>)/gi, "")),
        'start':$.trim(form.find('#start').val().replace(/(<([^>]+)>)/gi, "")),
        'description':$.trim(form.find('#description').val()),
        'details':details,
        'title_seo':$.trim(formseo.find('#title_seo').val().replace(/(<([^>]+)>)/gi, "")),
        'keywords_seo':$.trim(formseo.find('#keywords_seo').val().replace(/(<([^>]+)>)/gi, "")),
        'description_seo':$.trim(formseo.find('#description_seo').val().replace(/(<([^>]+)>)/gi, "")),
    }
}
var imageGallery = function(context){
    var ui = $.summernote.ui;
    var button = ui.button({
      	contents: '<i class="note-icon-picture" />',
      	tooltip: 'Picture',
	    click: function() {
	    	$('#blogImagesGallery').modal('show');
	    	$('#blogImagesGallery').on('shown.bs.modal',function(){
                if($(this).attr('data-gallery') < 1){
                    showGallery();
                    $(this).attr('data-gallery',1);
                }
	    	})
	    }
    });
    return button.render();
}
var imageJustifyLeft = function(context){
    var ui = $.summernote.ui;
    var button = ui.button({
        contents: '<i class="note-icon-align-left"></i>',
        tooltip: 'Align left (CTRL+SHIFT+L)',
        click:function(){
            var justifyto = context.$note[0];
            $(justifyto).summernote('justifyLeft');
        }
    });
    return button.render();
}
var imageJustifyCenter = function(context){
    var ui = $.summernote.ui;
    var button = ui.button({
        contents: '<i class="note-icon-align-center"></i>',
        tooltip: 'Align center (CTRL+SHIFT+E)',
        click:function(){
            var justifyto = context.$note[0];
            $(justifyto).summernote('justifyCenter');
        }
    });
    return button.render();
}
var imageJustifyRight = function(context){
    var ui = $.summernote.ui;
    var button = ui.button({
        contents: '<i class="note-icon-align-right"></i>',
        tooltip: 'Align right (CTRL+SHIFT+R)',
        click:function(){
            var justifyto = context.$note[0];
            $(justifyto).summernote('justifyRight');
        }
    });
    return button.render();
}

function addGallery(){
    $('#addGallery').trigger('click');
}
function uploadGallery(obj){
    var files = $(obj).prop('files'),
        id = $(obj).data('id'),
        overSize = 0,
        formData;
    $(files).each(function(k,file){
        if(file['size'] < 2000000){
            formData = new FormData()
            formData.append('files',file);
            formData.append('blog_id',id);
            var second = k * 0.5;
            saveGallery(formData,second);
        }else{
            overSize++;
        }
    });
    if(overSize > 0){
        $.alert({
            title: '<font color="red">แจ้งเตือน!</font>',
            content: 'ไฟล์มีขนาดใหญ่กว่าที่กำหนด ควรมีขนาดไม่เกิน 2MB',
        });
    }
    $(obj).val("");
}
function dropUploadGallery(image,el){
    if(image){
        if(image['size'] > 2000000){
            $.alert({
                    title: '<font color="red">แจ้งเตือน!</font>',
                    content: 'ขนาดรูปภาพ '+image['name']+' มีขนาดเกิน 2MB',
            });
            return false;
        }
        var formData = new FormData();
        formData.append('files',image);
        formData.append('blog_id',$('#addGallery').data('id'));
        $.ajax({
            url:"/backoffice/blog/gallery/upload",
            type:"post",
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(res){
                if(res != ""){
                    if(res.success){
                        $(el).summernote('editor.insertImage',res.path,function(image){});
                        showGallery();
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
}
function saveGallery (formData,second){
    var time = 1000 * second;
    setTimeout(function(){
        $.ajax({
            url:"/backoffice/blog/gallery/upload",
            type:"post",
            data:formData,
            contentType: false,
            cache: false,
            processData:false,
            success:function(res){
                if(res != ""){
                    if(res.success){
                        var image = '<div class="col-6 col-sm-6 col-md-3 gallery-block-img">'+
                            '<img src='+res.path+' width="100%" onclick="select_img(this)">'+
                            '<a href="javascript:void(0)" onclick="deleteGallery(this,'+res.id+',\''+res.filename+'\')">'+
                            '<i class="fa fa-trash" aria-hidden="true"></i></a>'+
                            '</div>';
                        $('.gallery-block').append(image);
                    }
                }
            }
        });
    },time);
}
function showGallery(){
    var id = $('#addGallery').data('id');
     $.ajax({
        url:"/backoffice/blog/gallery/show",
        type:"post",
        data:{blog_id:id},
        success:function(res){
            if(res != ""){
                if(res.success){
                    $('.gallery-block').text("");
                    $.each(res.files,function(k,value){
                        var image = '<div class="col-6 col-sm-6 col-md-3 gallery-block-img">'+
                            '<img src='+value.path+' width="100%" onclick="select_img(this)">'+
                            '<a href="javascript:void(0)" onclick="deleteGallery(this,'+value.id+',\''+value.filename+'\')">'+
                            '<i class="fa fa-trash" aria-hidden="true"></i></a>'+
                            '</div>';
                        $('.gallery-block').append(image);
                    });
                }
            }
        }
    });
}
function deleteGallery(obj,id,file){
    var obj = $(obj),
        code = $('.summernote-details').summernote('code');
    $.confirm({
        title: '<font color="orange">ยืนยัน!</font>',
        content: 'กรุณายืนยันการลบรูปภาพ',
        buttons: {
            Yes: function () {
                $.ajax({
                    url:"/backoffice/blog/gallery/delete",
                    type:"post",
                    data:{blog_id:id,file:file,code:code},
                    success:function(res){
                        if(res != ""){
                            if(res.success){
                                obj.parent('.gallery-block-img').remove();
                            }else{
                                if(res.msg){
                                    $.alert({
                                        title: '<font color="red">แจ้งเตือน!</font>',
                                        content: res.msg,
                                    });
                                }else{
                                    $.alert({
                                        title: '<font color="red">แจ้งเตือน!</font>',
                                        content: 'เกิดข้อผิดพลาด',
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
}
function select_img(obj){
    $('.gallery-block-img img.active').each(function(key,value){
        $(value).removeClass('active');
    });
    $(obj).toggleClass('active');
    if($('.gallery-block-img img.active').length > 0){
        $('button.insert-img').removeAttr('disabled');
    }
}

function addCover(){
    $('#cover_upload').val("");
    $('#cover_upload').trigger('click');
}
function uploadCover(obj,id = 0){
    if(id > 0){
        var files = $(obj).prop('files'),
            overSize = 0,
            formData;
        $(files).each(function(k,file){
            if(file['size'] < 500000){
                formData = new FormData()
                formData.append('files',file);
                formData.append('blog_id',id);
                var second = k * 0.5;
                saveCover(formData,second);
            }else{
                overSize++;
            }
        });
        if(overSize > 0){
            $.alert({
                title: '<font color="red">แจ้งเตือน!</font>',
                content: 'ไฟล์มีขนาดใหญ่กว่าที่กำหนด ควรมีขนาดไม่เกิน 5KB',
            });
            $('#cover_upload').val("");
        }
    }
}
function saveCover (formData,second){
    var time = 1000 * second;
    $('div.cover-block').text("");
    setTimeout(function(){
        $.ajax({
            url:"/backoffice/blog/cover/upload",
            type:"post",
            data:formData,
            contentType: false,
            cache: false,
            processData:false,
            success:function(res){
                if(res != ""){
                    if(res.success){
                        $('div.cover-block').append(
                            '<div class="img-block">'+
                            '<div class="img-block-head">'+
                            '<span class="cover-size">'+res.size+'</span>'+
                            '<i class="fa fa-trash del-cover" aria-hidden="true" onclick="deleteCover('+res.id+')"></i>'+
                            '</div>'+
                            '<a href="'+res.path+'" target="_blank">'+
                            '<img src="'+res.path+'">'+
                            '</a>'+
                            '</div>'
                        );
                    }
                }
            }
        });
    },time);
}
function deleteCover(id){
    $.confirm({
        title: '<font color="orange">ยืนยัน!</font>',
        content: 'กรุณายืนยันการลบรูปภาพอีกครั้ง',
        buttons: {
            Yes: function () {
                $.ajax({
                    url:"/backoffice/blog/cover/delete",
                    type:"post",
                    data:{blog_id:id},
                    success:function(res){
                        if(res != ""){
                            if(res.success){
                                $('div.cover-block').text("");
                                $('div.cover-block').append(
                                    '<input type="file" class="coverupload" id="cover_upload" onchange="uploadCover(this,'+res.blog_id+')">'+
                                    '<div class="cover-blank" onclick="addCover()">'+
                                    '<p>Upload Image<small>480 x 320 px</small></p>'+
                                    '</div>'
                                )
                            }
                        }
                    }
                });
            },
            no: function () {},
        }
    });
}