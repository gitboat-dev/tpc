@extends('landing.template')
@section('style')
    <link rel="preload stylesheet" href="/css/landing/page/page8.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
<div id="landing">
    <section id="sec1" class="pos-r">
        <div class="wrapper">
            <video autoplay muted loop playsinline id="video1" poster="">
                <source src="/assets/images/landing/test/Landing Page TPC4.mp4" type="video/mp4">
            </video>
        </div>
        <div class="pos-ab w-100p h-100p top-0 left-0 d-flex">
            <div class="row m-0 w-100p h-100p">
                <div class="col-xs-12 col-sm-6 col-md-5 d-flex h-100p col-h1">
                    <div class="head-content h-100p d-flex">
                        <div class="content m-auto">
                            <h1 class="head-title fw-bold">
                                TPC,<br>
                                your Polyester<br>
                                Destination
                            </h1>
                            <div class="head-desc">
                                <p>
                                    - Exporting Polyester Fiber and Yarn to
                                    over 70 countries all around the world.<br>
                                    - Our total capacity of Fiber, Yarn and
                                    Filament is around 350,000 tons annually.
                                </p>
                            </div>
                            <div class="head-btn">
                                <a href="#" title="contact us" class="ml-0">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec2" class="pos-r">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold sec2-title">
                        <span class="m-tl0">
                            Here’s a thing you have been dealing with
                        </span>
                    </h2>
                    <h3 class="text-center fw-bold theme-hl">Low Consistency?</h3>
                    <h3 class="text-center fw-bold theme-hl">Low Yarn Quality?</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
{{-- <script src="/js/landing/page/page8.js?v={{time()}}"></script> --}}
<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{time()}}"></script>
@endsection
