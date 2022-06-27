@extends('landing.template')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preload stylesheet" href="/css/landing/page/page7.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','/assets/images/landing/page1/og-image/og-image.webp')
@section('content')
<div id="landing">
    <section id="sec1">
        <div class="row m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content pos-r d-flex">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="\assets\images\landing\page7\desktop\Head-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="\assets\images\landing\page7\desktop\Head-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Head Landing page Thaipolyester">
                        </picture>
                    </div>
                    <div class="pos-ab w-100p h-100p d-flex">
                        <div class="title-block d-flex mt-0 mr-0">
                            <h1 class="head-title default theme-hl fw-bold text-center m-auto">
                                {{-- <span class="tl m-tl1"> --}}
                                    Thai Polyester<br>
                                    limited company
                                {{-- </span> --}}
                            </h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/landing/page/page-7.js?v={{time()}}"></script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
