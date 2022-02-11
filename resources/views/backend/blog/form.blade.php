@extends('backend.layout.app')
@section('jquery_ui_css')
	<link rel="preload stylesheet" href="/lib/jquery-ui/themes/base/jquery-ui.min.css" as="style" type="text/css" crossorigin>
@endsection
@section('css')
	<link rel="preload stylesheet" href="/lib/summernote/summernote-bs4.min.css" as="style" type="text/css" crossorigin>
	<link rel="preload stylesheet" href="/lib/jquery-confirm/css/jquery-confirm.min.css" as="style" type="text/css" crossorigin>
	<link rel="preload stylesheet" href="/css/backend/blog/form.css" as="style" type="text/css" crossorigin>
	@include('backend.blog.addimg.css')
@endsection
@section('content')
@include('backend.blog.modals.imagesGallery')
	<section class="content-header">
		<div class="row r1">
			<div class="col-12 col-sm-12 col-md-6 col1">
				<h1 class="head-title">Blog <small>Management - Form</small></h1>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col2">
				<ol class="breadcrumb">
			        <li><a href="{{ route('backoffice.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			        <li><a href="{{ route('backoffice.blog') }}">Blog</a></li>
			    	<li class="active">Form</li>
			    </ol>
			</div>
		</div>
	</section>
	<section class="content-body">
		<div class="container-fluid">
			<ul class="nav nav-tabs newest_tab">
				<li class="nav-item active">
					<a class="nav-link active" aria-current="page" data-toggle="tab" href="#tab-1">Content</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-2">SEO</a>
				</li>
				<li class="nav-item right">
					<button class="save-blog">บันทึก <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
				</li>
			</ul>
			<div class="tab-content">
				<div id="tab-1" class="tab-pane active" style="overflow-x:auto;">
					<div class="container-fluid">
						<form id="article_content" onsubmit="return false;">
							<div class="row r0">
								<div class="col-12 col-sm-12 col-md-12">
									<div class="form-group m-0">
									    <label for="active">Active</label>
										<input type="checkbox" name="active" id="active" value="1" @yield('active')>
									    <small class="form-text text-danger"></small>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-5">
									<div class="form-group m-0">
										<label>Cover <small>ภาพหน้าปก</small></label>
										<div class="cover-block">
											@if(isset($blog_cover) && $blog_cover)
												<div class="img-block">
													<div class="img-block-head">
														<span class="cover-size">{{ $blog_cover_size }}</span>
														<i class="fa fa-trash del-cover" aria-hidden="true" onclick="deleteCover({{ isset($blog->id) && $blog->id ? $blog->id : "" }})"></i>
													</div>
													<a href="{{ $blog_cover }}" target="_blank">
														<img src="{{ $blog_cover }}">
													</a>
												</div>
											@else
												<input type="file" class="coverupload" id="cover_upload" onchange="uploadCover(this,{{ isset($blog->id) && $blog->id ? $blog->id : "" }})">
												<div class="cover-blank" onclick="addCover()">
													<p>
														Upload Image
														<small>480 x 320 px</small>
													</p>
												</div>
											@endif
										</div>
										<small class="cover-desc">รูปหน้าปก (ขนาดไม่เกิน 500 KB)</small>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-7">
									@include('backend.blog.addimg.addimg')
								</div>
							</div>
							<div class="row r1">
								<div class="col-12 col-sm-12 col-md-5">
									<div class="form-group">
									    <label for="title">Title</label>
									    <input type="text" class="form-control" id="title" name="title"  placeholder="ชื่อบทความ" value="@yield('title')">
									    <small class="form-text text-danger"></small>
									</div>
									<div class="form-group">
									    <label for="slug">Slug: <a class="slug-url" href="@if(View::hasSection('url')) @yield('url') @else # @endif" style="color:green;" target="_blank">@if(View::hasSection('url')) @yield('url') @else - @endif</a></label>
									    <input type="text" class="form-control" id="slug" name="slug"  placeholder="ระบุลิ้งค์เฉพาะ" value="@yield('slug')">
									    <small class="form-text text-danger"></small>
									</div>
									<div class="form-group @if(View::hasSection('form-columns')) @yield('form-columns') @endif">
										<label for="columns">ชื่อไฟล์บทความ (.blade)</label>
										<input type="text" class="form-control" id="columns" name="columns" placeholder="columns (ไม่ต้องใส่.blade.php ใส่แต่ชื่อ file)" value="@yield('columns')">
										<small class="form-text text-danger"></small>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-7">
									<div class="col-12 col-sm-12 col-md-12 mp-lr-0">
										<div class="form-group">
										    <label for="type">Type <small>ประเภทของบทความ</small></label>
										    <select id="type" name="type" class="form-control">
										    	<option value="1" {{ isset($blog->article_type) && $blog->article_type == 1 ? "selected" : "" }}>News</option>
										    	<option value="2" {{ isset($blog->article_type) && $blog->article_type == 2 ? "selected" : "" }}>Columns</option>
										    </select>
										    <small class="form-text text-danger"></small>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-12 mp-lr-0">
										<div class="form-group">
										    <label for="start">Publish <small>วันที่เผยแพร่</small></label>
										    <div class="input_group">
										    	<i class="fa fa-calendar-minus-o icon" aria-hidden="true"></i>
										    	<input type="text" class="form-control datepicker" id="start" name="start"  placeholder="วันที่เริ่มแสดงบทความ เช่น 2022-01-10" value="@yield('start')" style="padding-right: 34px;">
										    </div>

										    <small class="form-text text-danger"></small>
										</div>
									</div>
								</div>
							</div>
							<div class="row r2">
								<div class="col-12 col-sm-12 col-md-12">
									<div class="form-group">
										<label for="description">Short Description</label>
									    <textarea class="form-control summernote-desc" id="description" name="description" style="height: 100px;">@yield('description')</textarea>
									    <small class="form-text text-danger"></small>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12">
									<div class="form-group  @yield('form-details')">
										<label for="details">Details</label>
									    <textarea class="form-control summernote-details" id="details" name="details" style="height: 100px;">@yield('details')</textarea>
									    <small class="form-text text-danger"></small>
									</div>
								</div>
							</div>
							<div class="row r3">
								<div class="col-12 col-sm-12 col-md-12">
									<small><b>หมายเหตุ</b> : บันทึกทุกครั้งที่ข้อมูลมีการเปลี่ยนแปลง</small>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div id="tab-2" class="tab-pane" style="overflow-x:auto;">
					<div class="container-fluid">
						<form id="article_seo" onsubmit="return false;">
							<div class="row r1">
								<div class="col-12 col-sm-12 col-md-12">
									<small><b>หมายเหตุ</b> : ปรับแต่ง SEO ทำให้ติดอันดับ Search Engine ดียิ่งขึ้น</small>
								</div>
								<div class="col-12 col-sm-12 col-md-6">
									<div class="form-group">
										<label for="title_seo">Title</label>
										<input type="text" class="form-control" id="title_seo" name="title_seo"  placeholder="หัวข้อ Title" value="@yield('title_seo')">
										<small class="form-text text-danger"></small>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-6">
									<div class="form-group">
										<label for="keywords_seo">Keywords</label>
										<input type="text" class="form-control" id="keywords_seo" name="keywords_seo"  placeholder="Keyword 1, Keyword 2, Keyword 3, Keyword 4" value="@yield('keywords_seo')">
										<small class="form-text text-danger"></small>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12">
									<div class="form-group">
										<label for="description_seo">Description</label>
										<textarea class="form-control" id="description_seo" name="description_seo" style="height: 100px;" placeholder="คำอธิบายแบบสั้น">@yield('description_seo')</textarea>
									    <small class="form-text text-danger"></small>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('jquery_ui')
	<script src="/lib/jquery-ui/jquery-ui.min.js" defer></script>
@endsection
@section('js')
	<script src="/lib/popper/popper.min.js"></script>
	<script src="/lib/summernote/summernote-bs4.min.js"></script>
	<script src="/lib/summernote/plugin/summernote-image-attribute-editor/summernote-image-attributes.js"></script>
	<script src="/lib/summernote/plugin/summernote-image-attribute-editor/lang/en-us.js"></script>
	<script src="/lib/jquery-confirm/js/jquery-confirm.min.js" defer></script>
	<script src="/js/backend/blog/form.js" defer></script>
	@include('backend.blog.addimg.js')
@endsection