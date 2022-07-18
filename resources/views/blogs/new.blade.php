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
            <section id="sec1" class="bg-black">
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
                            <div class="item p-0 pos-r">
                                <div class="img_block w-100p">
                                    <picture>
                                        <source srcset="{{$banner['url']}}" media="(max-width: 640px)">
                                        <img src="{{$banner['url']}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                                    </picture>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
            </section>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/blogs/new.js?v={{time()}}"></script>
@endsection
