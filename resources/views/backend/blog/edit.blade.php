@extends('backend.blog.form')
@if(isset($blog) && $blog)
	@section('token-id',$blog->id)
	@if($blog->active == 1)
		@section('active','checked')
	@endif
	@section('title',$blog->article_title)
	@section('slug',$blog->article_slug)
	@if(isset($slug) && $slug)
		@section('url',$slug)
	@endif
	@section('columns',$blog->article_columns)
	@if($blog->article_type == 1)
		@section('form-columns','hide')
	@endif
	@section('description',$blog->article_description)
	@section('details',$blog->article_details)
	@if($blog->article_type > 1)
		@section('form-details','hide')
	@endif
	@section('start',$blog->article_date_start)
	@section('title_seo',$blog->seo_title)
	@section('keywords_seo',$blog->seo_keywords)
	@section('description_seo',$blog->seo_description)
@endif
