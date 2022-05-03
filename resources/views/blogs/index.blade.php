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
                        {{-- @foreach($blogs as $b)
                            @if(isset($b['banner']) && $b['banner'])
                                <picture>
                                    <source srcset="{{array_values($b['banner'])[0]['url']}}" alt="{{$head_line}}" media="(max-width: 640px)">
                                    <img src="{{array_values($b['banner'])[0]['url']}}" width="900" height="350" class="img-fluid" alt="{{$head_line}}">
                                </picture>
                                @break
                            @endif
                        @endforeach --}}
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
        <section id="sec2">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-9 col-md-9 p-0 col1">
                    @if($blogs && isset($blogs))
                        @foreach($blogs as $k => $blog)
                            <div class="row m-0 @if(($k % 2) != 0) d-flex-r-re  @else d-flex-r @endif r-blog">
                                <div class="col-xs-12 col-sm-5 col-md-5 d-flex">
                                    <div class="img_block m-auto">
                                        <picture>
                                            <a href="/blog/{{$blog['article_slug']}}" title="{{$blog['article_title']}}">
                                                <source srcset="{{$blog['cover']['url']}}" alt="" media="(max-width: 640px)">
                                                <img src="{{$blog['cover']['url']}}" width="900" height="350" class="img-fluid" alt="">
                                            </a>
                                        </picture>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    <div class="content_block pos-r d-flex">
                                        <div class="content_group ml-0">
                                            <h3 class="a_tl">
                                                <a href="/blog/{{$blog['article_slug']}}" title="{{$blog['article_title']}}">
                                                    {{$blog['article_title']}}
                                                </a>
                                            </h3>
                                            <div class="a_start">
                                                <small>
                                                    <i class="fa fa-calendar" aria-hidden="true" style="margin-right: 5px;"></i>
                                                    <span class="theme-hl">{{$blog['article_date_start']}}</span>
                                                </small>
                                            </div>
                                            <div class="a_desc">
                                                {!!$blog['article_description']!!}
                                            </div>
                                            <div class="a_view">
                                                <a href="/blog/{{$blog['article_slug']}}" title="{{$blog['article_title']}}">
                                                    View More...
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 p-0 col2 desktop">
                    6666
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
