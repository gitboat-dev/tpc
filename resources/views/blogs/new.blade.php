@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/new.min.css?v={{time()}}" as="style" crossorigin>
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
            {{-- <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->current()}}&title={{$title}}&summary={{$des}}&source=thaipolyester">linkedin</a> --}}
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
            <section id="sec2" class="pos-r bg-gray">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-xs-12 col-sm-12 col-md-8 col1 bg-white">
                            <div class="title-block">
                                <h1 class="mt-0 fw-600 default title">{{$blog->article_title}}</h1>
                                <span class="gray-hl fw-600 d-block start-date">
                                    <i class="fa fa-calendar" aria-hidden="true" style="margin-right: 5px;"></i>
                                    {{$blog->article_date_start}}
                                </span>
                                <ul class="path d-inline">
                                    <li>
                                        <a href="/" title="home">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/blog" title="Columns & News">
                                            Columns & News
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/blog/columns&news/news" title="News">
                                            News
                                        </a>
                                    </li>
                                    <li class="active">{{$blog->article_title}}</li>
                                </ul>
                                <div class="share-block text-left">
                                    <span class="fw-600">Share This: </span>
                                    <ul class="share d-inline">
                                        <li>
                                            <a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" class="s-facebook" title="facebook" target="_blank">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/share?text={{$blog->article_title}}&url={{url()->current()}}" class="s-twitter" title="twitter" target="_blank">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{url()->current()}}&title={{$blog->article_title}}&summary={{$blog->article_title}}&source=thaipolyester" class="s-linkedin" title="linkedin" target="_blank">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @if($blog->article_details)
                                <div class="detail-block">
                                    {!!$blog->article_details!!}
                                </div>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 p-0 col2 d-flex">
                            <div class="sidebar">
                                <div class="sidebar-title">
                                    <h3 class="fw-600">Latest News</h3>
                                </div>
                                <div class="sidebar-body">
                                    @if(isset($blogs) && $blogs)
                                        <div class="row m-0">
                                            @foreach($blogs as $bs)
                                                <figure class="col-md-12 d-flex">
                                                    <a href="/blog/{{$bs['article_slug']}}" class="col-xs-5 col-sm-5 col-md-6 col-lg-4 p-0 m-auto" title="{{$bs['article_title']}}">
                                                        <div class="img_block w-100p">
                                                            <picture>
                                                                <source srcset="{{$bs['cover']['url']}}" media="(max-width: 640px)">
                                                                <img src="{{$bs['cover']['url']}}" width="900" height="350" class="img-fluid" alt="">
                                                            </picture>
                                                        </div>
                                                    </a>
                                                    <figcaption class="col-xs-7 col-sm-7 col-md-6 col-lg-8 m-auto">
                                                        <a href="/blog/{{$bs['article_slug']}}" title="{{$bs['article_title']}}">
                                                            <h5 class="fw-600">{{$bs['article_title']}}</h5>
                                                        </a>
                                                        <small class="gray-hl">{{$bs['article_date_start']}}</small>
                                                    </figcaption>
                                                </figure>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="sidebar-footer">
                                    <div class="btn-allnews">
                                        <a href="/blog" title="All News">All News</a>
                                    </div>
                                </div>
                            </div>
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
    <script src="/js/blogs/new.min.js?v={{time()}}"></script>
@endsection
