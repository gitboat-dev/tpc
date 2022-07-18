@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/new.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
@endsection
@if($blog && isset($blog))
    @if(isset($blog['cover']['url']))
        @section('og-image',$blog['cover']['url'])
    @endif
@endif
@section('content')
    <div id="tpc">
        <div id="tpc_bg">
            <section id="sec1" class="pos-r bg-white">
                @if(isset($blog) && $blog)
                    @if(count($blog->banner) > 1)
                        <div class="slide">
                            <div class="owl-carousel owl-theme">
                                @foreach($blog->banner as $banner)
                                    <div class="item p-0 pos-r">
                                        <div class="img_block w-100p">
                                            <picture>
                                                <source srcset="{{$banner['url']}}" media="(max-width: 640px)">
                                                <img src="{{$banner['url']}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                                            </picture>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        @foreach($blog->banner as $banner)
                            <div class="row m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="img_block w-100p">
                                        <picture>
                                            <source srcset="{{$banner['url']}}" media="(max-width: 640px)">
                                            <img src="{{$banner['url']}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
            </section>
            <section id="sec2" class="pos-r">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-xs-12 col-sm-12 col-md-8 p-0">
                            <div class="title-block">
                                <h1 class="mt-0 fw-600 default">{{$blog->article_title}}</h1>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 p-0">
                            222
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/blogs/new.js?v={{time()}}"></script>
@endsection
