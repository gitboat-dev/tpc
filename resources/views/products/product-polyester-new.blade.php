@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/product-polyester-new.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('og-image','/assets/images/product-new/desktop/bg-head.webp')
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
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
                                        <source srcset="/assets/images/product-new/mobile/Ring-Spun-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Ring-Spun-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="Ring Spun Yarn Polyester Thaipolyester" loading="lazy">
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
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
                                        <source srcset="/assets/images/product-new/mobile/PSF-Polyester-Staple-Fiber-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/PSF-Polyester-Staple-Fiber-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="PSF Polyester Staple Fiber Thaipolyester" loading="lazy">
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item blue p-0 pos-r">
                        <picture>
                            <source srcset="/assets/images/product-new/mobile/bg-blue.webp"  media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/product-new/desktop/bg-blue.webp" width="900" height="350" class="img-fluid" alt="Polyester Product" loading="lazy">
                        </picture>
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 p-0 slide-img">
                                    <picture>
                                        <source srcset="/assets/images/product-new/mobile/Dope-dyed-polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Dope-dyed-polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="Dope dyed polyester Thaipolyester" loading="lazy">
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
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
                                        <source srcset="/assets/images/product-new/mobile/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="DTY Draw Textured Yarn Polyester Thaipolyester" loading="lazy">
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
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
                                        <source srcset="/assets/images/product-new/mobile/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="FDY Fully Drawn Yarn Polyester Thaipolyester" loading="lazy">
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Spun Type</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item blue p-0 pos-r">
                        <picture>
                            <source srcset="/assets/images/product-new/mobile/bg-blue.webp"  media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/product-new/desktop/bg-blue.webp" width="900" height="350" class="img-fluid" alt="Polyester Product" loading="lazy">
                        </picture>
                        <div class="content">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 p-0 slide-img">
                                    <picture>
                                        <source srcset="/assets/images/product-new/mobile/Monofilament-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Monofilament-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="Monofilament Polyester Thaipolyester" loading="lazy">
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
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
                                        <source srcset="/assets/images/product-new/mobile/Filament-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Filament-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid mr-0" alt="POY Partially Oriented Yarn Polyester Thaipolyester" loading="lazy">
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
                                            <source srcset="/assets/images/product-new/mobile/Icon-Fiber-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Fiber-White.webp" width="900" height="350" class="img-fluid" alt="Fiber" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Fiber</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Yarn-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Yarn-Type-White.webp" width="900" height="350" class="img-fluid" alt="Yarn Type" loading="lazy">
                                        </picture>
                                        <div class="type-content m-auto">
                                            <span>Yarn Type</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 p-0 type-lists d-flex">
                                    <div class="type-group m-auto d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/product-new/mobile/Icon-Spun-Type-White.webp"  media="(max-width: 991px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/Icon-Spun-Type-White.webp" width="900" height="350" class="img-fluid" alt="Spun Type" loading="lazy">
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
        <section id="sec2">
            <div class="row r1 d-flex">
                <div class="col-xs-7 col-sm-7 col-md-7 p-0 col1">
                    <a href="{{route('product.psf')}}" title="Polyester Staple Fiber">
                        <div class="prod-block d-flex w-100p h-100p prod1">
                            <div class="col-xs-5 col-sm-5 col-md-6 p-0 d-flex m-auto">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/product-new/mobile/PSF-Polyester-Staple-Fiber-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/product-new/desktop/PSF-Polyester-Staple-Fiber-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="PSF Polyester Staple Fiber Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                            <div class="col-xs-7 col-sm-7 col-md-6 p-0 d-flex m-auto">
                                <div class="prod-desc m-auto">
                                    <h2 class="prod-title text-center m-0 fw-600">FIBER</h2>
                                    <small class="d-block text-center">(Polyester Staple Fiber)</small>
                                    <br>
                                    <span class="d-block text-center">PSF Virgin / PSF Recycled</span>
                                    <table>
                                        <tr>
                                            <th>DENIER</th>
                                            <td>: 1.0 ,1.2 ,1.4</td>
                                        </tr>
                                        <tr>
                                            <th>CUT LENGTH (MM)</th>
                                            <td>
                                                <p class="m-auto">: 32,38,44,51</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>COLOR</th>
                                            <td>: RW ,DDB</td>
                                        </tr>
                                    </table>
                                    <div class="star">
                                        <picture>
                                            <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 p-0 col2">
                    <a href="{{route('product.filament')}}" title="Filament yarn">
                        <div class="prod-block d-flex w-100p h-100p prod2">
                            <div class="col-xs-7 col-sm-7 col-md-7 p-0 d-flex m-auto">
                                <div class="prod-desc m-auto">
                                    <h2 class="prod-title text-center m-0 fw-600">Filament yarn</h2>
                                    <div class="star">
                                        <picture>
                                            <source srcset="/assets/images/product-new/mobile/star-white.webp"  media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/star-white.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 p-0 d-flex m-auto">
                                <picture class="mr-0">
                                    <source srcset="/assets/images/product-new/mobile/Filament-Yarn-Polyester-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/product-new/desktop/Filament-Yarn-Polyester-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="Filament Yarn Polyester Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row r2 d-flex">
                <div class="col-xs-5 col-sm-5 col-md-5 p-0 col1">
                    <a href="{{route('product.poy')}}" title="Partially Oriented Yarn (POY)">
                        <div class="prod-block d-flex w-100p h-100p prod3">
                            <div class="col-xs-5 col-sm-5 col-md-5 p-0 d-flex mb-0">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/product-new/mobile/POY-Partially-Oriented-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/product-new/desktop/POY-Partially-Oriented-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="POY Partially Oriented Yarn Polyester Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                            <div class="col-xs-7 col-sm-7 col-md-7 p-0 d-flex m-auto">
                                <div class="prod-desc m-auto">
                                    <h2 class="prod-title m-0 fw-600">YARN TYPE</h2>
                                    <small class="d-block">Partially Oriented Yarn (POY)</small>
                                    <table>
                                        <tr>
                                            <th>LUSTER</th>
                                            <td>: SD</td>
                                        </tr>
                                        <tr>
                                            <th>TYPE</th>
                                            <td>
                                                <p class="m-auto">: Virgin & Recycled</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>COLOR</th>
                                            <td>: RW,DDB</td>
                                        </tr>
                                        <tr>
                                            <th class="d-flex">
                                                D/F
                                            </th>
                                            <td>
                                                : 85/36, 125/36, 125/72, 125/144,
                                                165/36, 165/48, 260/48, 260/96,
                                                260/144, 260/288, 500/96
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="star">
                                        <picture>
                                            <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 p-0 col2">
                    <a href="{{route('product.dty')}}" title="Draw Textured Yarn (DTY)">
                        <div class="prod-block d-flex w-100p h-100p prod4">
                            <div class="col-xs-7 col-sm-7 col-md-6 p-0 d-flex m-auto">
                                <div class="prod-desc m-auto">
                                    <h2 class="prod-title m-0 fw-600">YARN TYPE</h2>
                                    <small class="d-block">Draw Textured Yarn (DTY)</small>
                                    <br>
                                    <table>
                                        <tr>
                                            <th>LUSTER</th>
                                            <td>: SD</td>
                                        </tr>
                                        <tr>
                                            <th>TYPE</th>
                                            <td>
                                                <p class="m-auto">: Virgin & Recycled</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>COLOR</th>
                                            <td>: RW,DDB,DYED YARN</td>
                                        </tr>
                                        <tr>
                                            <th class="d-flex">
                                                D/F
                                            </th>
                                            <td>
                                                : 75/36, 75/72, 75/144,<br>
                                                100/36, 100/48, 100/96,<br>
                                                150/48, 150/96, 150/144,<br>
                                                150/288, 300/96
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="star">
                                        <picture>
                                            <source srcset="/assets/images/product-new/mobile/star-white.webp"  media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/star-white.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-6 p-0 d-flex m-auto">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/product-new/mobile/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/product-new/desktop/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="DTY Draw Textured Yarn Polyester Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row r3 d-flex">
                <div class="col-xs-7 col-sm-7 col-md-7 p-0 r3-b1">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex col1">
                        <a href="{{route('product.fdy')}}" title="Fully Drawn Yarn (FDY)" class="w-100p">
                            <div class="prod-block d-flex w-100p h-100p prod5">
                                <div class="col-xs-7 col-sm-7 col-md-6 p-0 d-flex m-auto">
                                    <div class="prod-desc m-auto">
                                        <h2 class="prod-title m-0 fw-600">YARN TYPE</h2>
                                        <small class="d-block">Fully Drawn Yarn (FDY)</small>
                                        <br>
                                        <table>
                                            <tr>
                                                <th>LUSTER</th>
                                                <td>: SD, TBR</td>
                                            </tr>
                                            <tr>
                                                <th>TYPE</th>
                                                <td>
                                                    <p class="m-auto">: Virgin & Recycled</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>COLOR</th>
                                                <td>: RW, DDB</td>
                                            </tr>
                                            <tr>
                                                <th class="d-flex">
                                                    D/F
                                                </th>
                                                <td>
                                                    : 40/18, 50/18, 75/36,<br>
                                                    75/72, 100/36, 150/48,<br>
                                                    150/96, 150/144, 300/96,<br>
                                                    200/10 ,300/10
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="star">
                                            <picture>
                                                <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                                <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-sm-5 col-md-6 p-0 d-flex m-auto">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/product-new/mobile/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="FDY Fully Drawn Yarn Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 p-0 d-flex col2">
                        <a href="{!!url('/dope-dyed')!!}" title="Dope Dyed" class="w-100p">
                            <div class="prod-block d-flex flex-c m-flex-c w-100p h-100p prod6">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex mb-0">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/product-new/mobile/Dope-dyed-polyester-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Dope-dyed-polyester-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="Dope dyed polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex m-auto">
                                    <div class="prod-desc m-auto">
                                        <h2 class="prod-title m-0 fw-600">Dope dyed</h2>
                                        <div class="star">
                                            <picture>
                                                <source srcset="/assets/images/product-new/mobile/star-white.webp"  media="(max-width: 640px)" loading="lazy">
                                                <img src="/assets/images/product-new/desktop/star-white.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 p-0 d-flex col3">
                        <a href="{{route('product.monofilament')}}" title="Monofilament" class="w-100p">
                            <div class="prod-block d-flex flex-c m-flex-c w-100p h-100p prod7">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex m-auto">
                                    <div class="prod-desc m-auto">
                                        <h2 class="prod-title m-0 fw-600">Monofilament</h2>
                                        <div class="star">
                                            <picture>
                                                <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                                <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex m-auto">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/product-new/desktop/Monofilament-Polyester-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Monofilament-Polyester-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="Monofilament Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 p-0 r3-b2">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex col4">
                        <a href="{{route('product.twisted-yarn')}}" title="Twist Yarn" class="w-100p">
                            <div class="prod-block d-flex w-100p h-100p prod8">
                                <div class="col-xs-5 col-sm-5 col-md-5 p-0 d-flex flex-c m-flex-c mt-0">
                                    <div class="prod-desc m-auto">
                                        <h2 class="prod-title text-center m-0 fw-600">YARN TYPE</h2>
                                    </div>
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/product-new/mobile/Twist-Yarn-polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Twist-Yarn-polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="Twist Yarn polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-xs-7 col-sm-7 col-md-7 p-0 d-flex m-auto">
                                    <div class="prod-desc m-auto">
                                        <label class="d-block">Twisted Yarn (FDY)</label>
                                        <table>
                                            <tr>
                                                <th>LUSTER</th>
                                                <td>: SD, TBR</td>
                                            </tr>
                                            <tr>
                                                <th>TYPE</th>
                                                <td>
                                                    <p class="m-auto">: Virgin & Recycled</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="d-flex">COLOR</th>
                                                <td>: RW, DDB, DYED YARN</td>
                                            </tr>
                                            <tr>
                                                <th class="d-flex">
                                                    D/F
                                                </th>
                                                <td>
                                                    : 75/36/1, 100/36/1,<br>
                                                    150/48/1<br>
                                                    (Low - High Twisted)
                                                </td>
                                            </tr>
                                        </table>
                                        <br>
                                        <label class="d-block">Twisted Yarn (DTY)</label>
                                        <table>
                                            <tr>
                                                <th>LUSTER</th>
                                                <td>: SD</td>
                                            </tr>
                                            <tr>
                                                <th>TYPE</th>
                                                <td>
                                                    <p class="m-auto">: Virgin & Recycled</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="d-flex">COLOR</th>
                                                <td>: RW,DDB,DYED YARN</td>
                                            </tr>
                                            <tr>
                                                <th class="d-flex">
                                                    D/F
                                                </th>
                                                <td>
                                                    : 75/36/1,100/48/1,<br>
                                                    150/36/1,150/36/2,<br>
                                                    150/48/1<br>
                                                    (Low - High Twisted)
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="star">
                                            <picture>
                                                <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                                <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex col5">
                        <a href="{{route('product.spun-yarn')}}" title="Spun Yarn" class="w-100p">
                            <div class="prod-block d-flex w-100p h-100p prod9">
                                <div class="col-xs-6 col-sm-6 col-md-6 p-0 d-flex m-auto">
                                    <div class="prod-desc m-auto">
                                        <h2 class="prod-title text-center m-0 fw-600">Spun Yarn</h2>
                                        <div class="star">
                                            <picture>
                                                <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                                <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 p-0 d-flex m-auto">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/product-new/mobile/Ring-Spun-OE-Spun-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/product-new/desktop/Ring-Spun-OE-Spun-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="Ring Spun OE Spun Yarn Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row r4 d-flex">
                <div class="col-xs-5 col-sm-5 col-md-5 p-0 col1">
                    <a href="{{route('product.ring-spun')}}" title="Ring Spun">
                        <div class="prod-block d-flex w-100p h-100p prod10">
                            <div class="col-xs-8 col-sm-8 col-md-8 p-0 d-flex m-auto">
                                <div class="prod-desc m-auto">
                                    <h2 class="prod-title m-0 fw-600">SPUN TYPE</h2>
                                    <small class="d-block">RING SPUN</small>
                                    <br>
                                    <table>
                                        <tr>
                                            <th>LUSTER</th>
                                            <td>: SD</td>
                                        </tr>
                                        <tr>
                                            <th>TYPE</th>
                                            <td>
                                                : Virgin & Recycled
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="d-flex">COLOR</th>
                                            <td>: RW, DDB, MELANGE,<br> DYED YARN</td>
                                        </tr>
                                        <tr>
                                            <th class="d-flex">
                                                D/F
                                            </th>
                                            <td>
                                                : 18/1, 20/1, 30/1,<br>
                                                32/1, 10/2, 20/2,<br>
                                                30/2
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="star">
                                        <picture>
                                            <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 p-0 d-flex mr-0">
                                <picture class="mr-0">
                                    <source srcset="/assets/images/product-new/mobile/Ring-Spun-Yarn-Polyester-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/product-new/desktop/Ring-Spun-Yarn-Polyester-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="POY Partially Oriented Yarn Polyester Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 p-0 col2">
                    <a href="{{route('product.open-end')}}" title="Open End">
                        <div class="prod-block d-flex w-100p h-100p prod11">
                            <div class="col-xs-7 col-sm-7 col-md-6 p-0 d-flex m-auto">
                                <div class="prod-desc m-auto">
                                    <h2 class="prod-title m-0 fw-600">SPUN TYPE</h2>
                                    <small class="d-block">OE SPUN</small>
                                    <br>
                                    <table>
                                        <tr>
                                            <th>LUSTER</th>
                                            <td>: SD</td>
                                        </tr>
                                        <tr>
                                            <th>TYPE</th>
                                            <td>
                                                <p class="m-auto">: Virgin & Recycled</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="d-flex">COLOR</th>
                                            <td>: RW, DDB, MELANGE,<br> DYED YARN</td>
                                        </tr>
                                        <tr>
                                            <th class="d-flex">
                                                D/F
                                            </th>
                                            <td>
                                                : 10/1, 12/1, 14/1,<br>
                                                18/1, 20/1, 10/2,<br>
                                                20/2
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="star">
                                        <picture>
                                            <source srcset="/assets/images/product-new/mobile/star-black.webp"  media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/product-new/desktop/star-black.webp" width="900" height="350" class="img-fluid" alt="star" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-6 p-0 d-flex m-auto">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/product-new/mobile/OE-Spun-Yarn-Polyester-Thaipolyester.webp"  media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/product-new/desktop/OE-Spun-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="OE Spun Yarn Polyester Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('custom-script')
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/product-polyester-new.js?v={{ time() }}"></script>
@endsection
