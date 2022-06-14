@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/product-polyester-new.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('og-image','')
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1">
            <div class="slide">
                <div class="owl-carousel owl-theme">
                    <div class="item head p-0 pos-r">
                        <picture>
                            <source srcset="/assets/images/product-new/mobile/bg-head.webp"  media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/product-new/desktop/bg-head.webp" width="900" height="350" class="img-fluid" alt="Polyester Product" loading="lazy">
                        </picture>
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h1 class="slide-title text-center fw-600 show-d">Polyester Product</h1>
                                    <h1 class="slide-title text-center fw-600 show-m">Our Product</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item green p-0">
                        <picture>
                            <source srcset="/assets/images/product-new/mobile/bg-green.webp"  media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/product-new/desktop/bg-green.webp" width="900" height="350" class="img-fluid" alt="Polyester Product" loading="lazy">
                        </picture>
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 p-0 slide-img">
                                    <picture>
                                        <source srcset="\assets\images\product-new\mobile\Ring-Spun-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\product-new\desktop\Ring-Spun-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="Ring Spun Yarn Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex">
                                    <h2 class="slide-title m-auto fw-600 show-d">Polyester<br> Product</h2>
                                    <h2 class="slide-title m-auto fw-600 show-m">RING SPUN &<br> OE SPUN</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item green p-0">
                        <picture>
                            <source srcset="/assets/images/product-new/mobile/bg-green.webp"  media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/product-new/desktop/bg-green.webp" width="900" height="350" class="img-fluid" alt="Polyester Product" loading="lazy">
                        </picture>
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 p-0 slide-img">
                                    <picture>
                                        <source srcset="\assets\images\product-new\mobile\PSF-Polyester-Staple-Fiber-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\product-new\desktop\PSF-Polyester-Staple-Fiber-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="PSF Polyester Staple Fiber Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex">
                                    <h2 class="slide-title m-auto fw-600 show-d">Polyester<br> Product</h2>
                                    <h2 class="slide-title m-auto fw-600 show-m">Polyester Staple Fiber (PSF)</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item blue p-0">
                        <picture>
                            <source srcset="/assets/images/product-new/mobile/bg-blue.webp"  media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/product-new/desktop/bg-blue.webp" width="900" height="350" class="img-fluid" alt="Polyester Product" loading="lazy">
                        </picture>
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 p-0 slide-img">
                                    <picture>
                                        <source srcset="\assets\images\product-new\mobile\Dope-dyed-polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\product-new\desktop\Dope-dyed-polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="Dope dyed polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex">
                                    <h2 class="slide-title m-auto fw-600 show-d">Polyester<br> Product</h2>
                                    <h2 class="slide-title ml-0 fw-600 show-m">Dope dyed</h2>
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
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/product-polyester-new.js?v={{ time() }}"></script>
@endsection
