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
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item green p-0 pos-r">
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
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
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
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
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
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
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
                                        <source srcset="\assets\images\product-new\mobile\DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\product-new\desktop\DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="DTY Draw Textured Yarn Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex">
                                    <h2 class="slide-title m-auto fw-600 show-d">Polyester<br> Product</h2>
                                    <h2 class="slide-title ml-0 fw-600 show-m">Draw Textured Yarn (DTY)</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
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
                                        <source srcset="\assets\images\product-new\mobile\FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\product-new\desktop\FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="FDY Fully Drawn Yarn Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex">
                                    <h2 class="slide-title m-auto fw-600 show-d">Polyester<br> Product</h2>
                                    <h2 class="slide-title ml-0 fw-600 show-m">Fully Drawn Yarn (FDY)</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
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
                                        <source srcset="\assets\images\product-new\mobile\Monofilament-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\product-new\desktop\Monofilament-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="Monofilament Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex">
                                    <h2 class="slide-title m-auto fw-600 show-d">Polyester<br> Product</h2>
                                    <h2 class="slide-title ml-0 fw-600 show-m">Monofilament</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
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
                                        <source srcset="\assets\images\product-new\mobile\Filament-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\product-new\desktop\Filament-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="POY Partially Oriented Yarn Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex">
                                    <h2 class="slide-title m-auto fw-600 show-d">Polyester<br> Product</h2>
                                    <h2 class="slide-title ml-0 fw-600 show-m">Partially Oriented Yarn (POY)</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slide-footer">
                            <div class="row m-auto type-block">
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="\assets\images\product-new\mobile\Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="\assets\images\product-new\desktop\Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
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
