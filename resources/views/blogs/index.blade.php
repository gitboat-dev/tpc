@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/index.css?v={{time()}}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1">
            5555
        </section>
    </div>
</div>
@endsection
@section('custom-script')
    <script src="/js/blogs/index.js?v={{time()}}"></script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{time()}}"></script>
@endsection
