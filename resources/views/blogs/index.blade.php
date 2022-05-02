@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/index.css?v={{time()}}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1" class="bg-black">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="img_block">
                        <picture>
                            <source srcset="{{$blogs[0]['cover']['url']}}" alt="{{$head_line}}" media="(max-width: 640px)">
                            <img src="{{$blogs[0]['cover']['url']}}" width="900" height="350" class="img-fluid" alt="{{$head_line}}">
                        </picture>
                    </div>
                    <div class="container content_block pos-r">
                        <h1 class="fw-600 m-0 white-hl">{{$head_line}}</h1>
                        <ul class="path d-inline">
                            <li>
                                <a href="/" title="home">
                                    Home
                                </a>
                            </li>
                            <li class="active">{{$head_line}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('custom-script')
    {{-- <script src="/js/blogs/index.js?v={{time()}}"></script> --}}
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{time()}}"></script>
@endsection
