<p><b>Banner ::</b> ลากเพื่อเปลี่ยนตำแหน่ง | คลิกเพื่อเปิดรูป</p>
<ul class="col-sm-12 img-lists">
	<input type="file" class="fileupload" id="file_upload" style="display: none;" multiple onchange="uploadImages(this,{{ isset($blog->id) && $blog->id ? $blog->id : "" }})">
	<div id="sortable" class="img-lists-block" data-id="{{ isset($blog->id) && $blog->id ? $blog->id : "" }}">
		@if(isset($blog_banner))
    		@foreach($blog_banner as $img)
    			<li class="img" id="{{ $img['id'] }}">
                    <span class="img-sequence">{{ $img['sort'] }}</span>
            		<a href="{{ $img['path'] }}" target="_blank">
        				<img src="{{ $img['path'] }}">
        			</a>
        			<small class="file_size"><i class="fa fa-trash del-img" aria-hidden="true" onclick="deleteImage({{ $img['id'] }})"></i> {{ $img['size'] }}</small>
            	</li>
    		@endforeach
    	@endif
	</div>
	@if(isset($noimg))
		@for($i = 0;$i < $noimg;$i++)
			<li class="noimg">
    			<div class="add-img" onclick="addFile()">+</div>
    			<small style="color: #555;">Add</small>
        	</li>
		@endfor
    @else
        @for($i = 0;$i < 3;$i++)
            <li class="noimg">
                <div class="add-img" onclick="addFile()">+</div>
                <small style="color: #555;">Add</small>
            </li>
        @endfor
	@endif
</ul>
<small style="color: #999;">Dimension : 1600 x 600 px | ขนาดไม่เกิน 2 MB. | แสดงเฉพาะบทความประเภท ข่าวสาร(News) เท่านั้น</small>
