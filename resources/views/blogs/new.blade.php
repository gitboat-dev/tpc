@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/new.css?v={{time()}}" as="style" crossorigin>
@endsection
@if($blogs && isset($blogs))
    @if(isset($blogs[0]['cover']['url']))
        @section('og-image',$blogs[0]['cover']['url'])
    @endif
@endif
@section('content')
    <div id="tpc">
        <div id="tpc_bg">
        </div>
    </div>
@endsection
@section('custom-script')
@endsection
