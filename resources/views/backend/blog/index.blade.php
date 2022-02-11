@extends('backend.layout.app')
@section('css')
	<link rel="preload stylesheet" href="/lib/DataTables/datatables.min.css" as="style" type="text/css" crossorigin>
	<link rel="preload stylesheet" href="/lib/jquery-confirm/css/jquery-confirm.min.css" as="style" type="text/css" crossorigin>
	<style>
		#blog_select{
			display: none;
		}
	</style>
@endsection
@section('content')
	<section class="content-header">
		<div class="row r1">
			<div class="col-12 col-sm-12 col-md-6 col1">
				<h1 class="head-title">Blog <small>Control panel</small></h1>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col2">
				<ol class="breadcrumb">
			        <li><a href="{{ route('backoffice.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			    	<li class="active">Blog</li>
			    </ol>
			</div>
		</div>
	</section>
	<section class="content-body">
		<div class="container-fluid">
			<ul class="nav nav-tabs newest_tab">
				<li class="nav-item active">
					<a class="nav-link active" aria-current="page" data-toggle="tab" href="#tab-1">Article</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="tab-1" class="tab-pane active" style="overflow-x:auto;">
					<textarea id="blog_select"></textarea>
					@include('backend.blog.tables.blog_lists')
				</div>
			</div>
		</div>
	</section>
@endsection
@section('js')
	<script src="/lib/DataTables/datatables.min.js" defer></script>
	<script src="/lib/jquery-confirm/js/jquery-confirm.min.js" defer></script>
	<script src="/js/backend/blog/blog.js" defer></script>
@endsection