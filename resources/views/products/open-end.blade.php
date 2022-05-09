@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/open-end.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
<h1 style="display: none;">Ring Spun</h1>
<div id="tpc">
    <div id="tpc_bg">

    </div>
</div>
@endsection
@section('custom-script')
	{{-- <script src="/js/open-end.js?v={{ time() }}"></script> --}}
@endsection
