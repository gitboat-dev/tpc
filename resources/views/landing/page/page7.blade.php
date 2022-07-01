@extends('landing.template')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preload stylesheet" href="/css/landing/page/page7.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','/assets/images/landing/page7/desktop/Head-Landing-page-Thaipolyester.webp?v={{time()}}')
@section('content')
<div id="landing">
    <section id="sec1">
        <div class="row m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content pos-r d-flex">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page7/desktop/Head-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page7/desktop/Head-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Head Landing page Thaipolyester">
                        </picture>
                    </div>
                    <div class="pos-ab w-100p h-100p d-flex">
                        <div class="title-block d-flex mt-0 mr-0">
                            <h1 class="head-title default theme-hl fw-bold text-center m-auto">
                                Thai Polyester<br>
                                limited company
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec2">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="default text-center fw-bold">
                        Thai Polyester limited company (TPC) - In the polyester industry,<br>
                        we are one of the best in Southeast Asia.
                    </h2>
                    <h3 class="text-center">
                        We are one of Thailand's largest yarn producers.
                    </h3>
                    <form id="contact-form1" data-request="landing-page" autocomplete="off">
                        <div class="form-group col-xs-12 col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="NAME*">
                            <span class="text-danger name mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="company" id="company" placeholder="COMPANY*">
                            <span class="text-danger company mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL*">
                            <span class="text-danger email mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE*">
                            <span class="text-danger phone mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex form-check">
                            <input type="checkbox" id="privacy">
                            <label class="ml-0 fw-n">I hereby consent Thai Polyester limited company (TPC) to collect, use or disclose my given information for the company's promotion.</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="res1" class="res"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex">
                            <button id="submit-f1" type="submit" class="btn btn-regis m-auto">Register for free catalog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="sec3">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold">why you have to choose us?</h2>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 card-block d-flex">
                    <div class="card d-flex flex-c m-flex-c">
                        <div class="card-title text-center">
                            <h3 class="fw-bold">Good</h3>
                        </div>
                        <div class="card-desc text-center d-flex">
                            <p class="m-auto">High Quality</p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page7/mobile/good-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page7/desktop/good-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 card-block d-flex">
                    <div class="card d-flex flex-c m-flex-c">
                        <div class="card-title text-center">
                            <h3 class="fw-bold">New</h3>
                        </div>
                        <div class="card-desc text-center d-flex">
                            <p class="m-auto">New Technology</p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page7/mobile/New-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page7/desktop/New-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="New Landing page Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 card-block d-flex">
                    <div class="card d-flex flex-c m-flex-c">
                        <div class="card-title text-center">
                            <h3 class="fw-bold">Fast</h3>
                        </div>
                        <div class="card-desc text-center d-flex">
                            <p class="m-auto">
                                Fast Support<br>
                                Resposibility<br>
                                Fast Transpotation
                            </p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page7/mobile/Fast-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page7/desktop/Fast-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Fast Landing page Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 card-block d-flex">
                    <div class="card d-flex flex-c m-flex-c">
                        <div class="card-title text-center">
                            <h3 class="fw-bold">Exactly</h3>
                        </div>
                        <div class="card-desc text-center d-flex">
                            <p class="m-auto">Amount Quantity</p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page7/mobile/Exactly-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page7/desktop/Exactly-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Exactly Landing page Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec4">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold">Products</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                    <ul class="nav nav-tabs prod_tab d-flex">
                        <li class="nav-item active m-0">
                            <a class="nav-link active" aria-current="page" data-toggle="tab" href="#tab-1">All</a>
                        </li>
                        <li class="nav-item m-0">
                            <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-2">Polyester Staple Fiber (PSF)</a>
                        </li>
                        <li class="nav-item m-0">
                            <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-3">Filament Yarn</a>
                        </li>
                        <li class="nav-item m-0">
                            <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-4">Spun Yarn</a>
                        </li>
                        <li class="nav-item m-0">
                            <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-5">Recycled Polyester Spun Yarn</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active" style="overflow-x:auto;">
                            <div class="row prod-row m-0">
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default"><span class="tl0 m-tl3">PSF</span></h2>
                                        </div>
                                        <div class="card-desc text-center">
                                            <p><span class="tl0 m-tl2">Polyester Staple Fiber</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/POY-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/POY-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default"><span class="tl0 m-tl3">POY</span></h2>
                                        </div>
                                        <div class="card-desc text-center">
                                            <p><span class="tl0 m-tl2">Partially Oriented Yarn</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/FDY-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/FDY-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default"><span class="tl0 m-tl3">FDY</span></h2>
                                        </div>
                                        <div class="card-desc text-center">
                                            <p><span class="tl0 m-tl2">Fully Drawn Yarn</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/DTY-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/DTY-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default"><span class="tl0 m-tl3">DTY</span></h2>
                                        </div>
                                        <div class="card-desc text-center">
                                            <p><span class="tl0 m-tl2">Draw Textured Yarn</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Twisted-yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Twisted-yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Twisted yarn
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/desktop/Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Mono Filament Yarns
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Dope-Dyed-Black-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Dope-Dyed-Black-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Dope Dyed Black
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Ring-Spun-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Ring-Spun-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Ring Spun Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default"><span class="tl0 m-tl3">Ring spun</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/OE-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/OE-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="OE Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default"><span class="tl0 m-tl3">OE spun</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled PSF Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Staple Fiber (PSF)
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Filament Yarn Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Filament Yarn
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Spun Yarn Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Spun Yarn
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane" style="overflow-x:auto;">
                            <div class="row prod-row m-0">
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default"><span class="tl0 m-tl3">PSF</span></h2>
                                        </div>
                                        <div class="card-desc text-center">
                                            <p><span class="tl0 m-tl2">Polyester Staple Fiber</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled PSF Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Staple Fiber (PSF)
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane" style="overflow-x:auto;">
                            <div class="row prod-row m-0">
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/desktop/Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Mono Filament Yarns
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Filament Yarn Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Filament Yarn
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane" style="overflow-x:auto;">
                            <div class="row prod-row m-0">
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Spun Yarn Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Spun Yarn
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane" style="overflow-x:auto;">
                            <div class="row prod-row m-0">
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled PSF Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Staple Fiber (PSF)
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Filament Yarn Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Filament Yarn
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-3 d-flex prod-block">
                                    <div class="card">
                                        <div class="card-img">
                                            <div class="img_block w-100p">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page7/mobile/Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page7/desktop/Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Spun Yarn Thaipolyester" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="card-title text-center">
                                            <h2 class="fw-bold default">
                                                <span class="tl0 m-tl3">
                                                    Recycled Polyester
                                                    Spun Yarn
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec5">
        <div class="container">
            <div class="row m-0 d-flex m-flex-c">
                <div class="col-xs-12 col-sm-12 col-md-7 p-0 m-auto col1">
                    <div class="content pos-r d-flex">
                        <div class="img_block w-100p">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/About-US-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/About-US-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="About US Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 m-auto col2">
                    <div class="content pos-r d-flex">
                        <div class="content_group m-auto">
                            <h2 class="sec5-title text-center fw-bold">
                                ABOUT US
                            </h2>
                            <p>
                                Thai Polyester limited company (TPC) is recognized as a leading
                                polyester yarn manufacturer in Thailand.
                            </p>
                            <p>
                                Quality - Innovation - Quick response - Competitive price.
                                To meet the needs of customers in various industries, the company has
                                successfully provided a wide range of fiber and yarn products, including
                                POY, FDY, DTY, staple fiber, and spun yarn in raw white, mélange, dope
                                dyed, and yarn dyed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec6">
        <div class="container">
            <div class="row m-0 d-flex m-flex-cr">
                <div class="col-xs-12 col-sm-12 col-md-5 m-auto col1">
                    <div class="content pos-r d-flex">
                        <div class="content_group ml-0">
                            <h2 class="sec6-title default">
                                Our Strength
                            </h2>
                            <p>
                                - Reasonable Price<br>
                                - Short Lead Time<br>
                                - Trustworthy Supplier<br>
                                - Large Capacity<br>
                                - Wide Product Range
                            </p>
                        </div>
                    </div>
                    <div class="content pos-r d-flex">
                        <div class="content_group ml-0">
                            <h2 class="sec6-title default">
                                Why you should buy products<br>
                                and services from TPC?
                            </h2>
                            <p>
                                - On time<br>
                                - Responsibility<br>
                                - Prompt Service<br>
                                - One Stop service<br>
                                - Competitive Price<br>
                                - Service Mind<br>
                                - Experience over 80 Years<br>
                                - German Technology<br>
                                - Free consulation<br>
                                - Free sample (5Kg-20Kg)
                            </p>
                        </div>
                    </div>
                    <div class="content pos-r d-flex">
                        <div class="content_group ml-0">
                            <h2 class="sec6-title default">
                                What distinguishes us from<br>
                                our competitors?
                            </h2>
                            <p>
                                - Competitive Price<br>
                                - LNG(Green Factory in Process)<br>
                                - We are one of the biggest yarn manufacturer in Thailand<br>
                                - Global Brand Name Customer chose us
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 p-0 m-auto col2">
                    <div class="content pos-r d-flex">
                        <div class="img_block w-100p">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Process-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Process-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="About US Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec7" class="d-flex">
        <div class="container m-auto">
            <div class="slide">
                <div class="owl-carousel owl-theme">
                    <div class="item text-center p-0">
                        <h1>Testimonial</h1>
                        <h2><span class="tl1 m-tl1">“Always get a promotional price on selected item”</span></h2>
                        <p class="fw-bold">
                            MR.AAMIR TARIQ (CEO)<br>
                            Noor Enterprises, Pakistan
                        </p>
                    </div>
                    <div class="item text-center p-0">
                        <h1>Testimonial</h1>
                        <h2><span class="tl1 m-tl1">“Always get a promotional price on selected item”</span></h2>
                        <p class="fw-bold">
                            MR.AAMIR TARIQ (CEO)<br>
                            Noor Enterprises, Pakistan
                        </p>
                    </div>
                    <div class="item text-center p-0">
                        <h1>Testimonial</h1>
                        <h2><span class="tl1 m-tl1">“Always get a promotional price on selected item”</span></h2>
                        <p class="fw-bold">
                            MR.AAMIR TARIQ (CEO)<br>
                            Noor Enterprises, Pakistan
                        </p>
                    </div>
                    <div class="item text-center p-0">
                        <h1>Testimonial</h1>
                        <h2><span class="tl1 m-tl1">“Always get a promotional price on selected item”</span></h2>
                        <p class="fw-bold">
                            MR.AAMIR TARIQ (CEO)<br>
                            Noor Enterprises, Pakistan
                        </p>
                    </div>
                    <div class="item text-center p-0">
                        <h1>Testimonial</h1>
                        <h2><span class="tl1 m-tl1">“Always get a promotional price on selected item”</span></h2>
                        <p class="fw-bold">
                            MR.AAMIR TARIQ (CEO)<br>
                            Noor Enterprises, Pakistan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec8">
        <div class="container">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h1 class="text-center fw-bold">Our Certifications</h1>
                </div>
            </div>
            <div class="row r2 m-0 d-flex">
                <div class="col-xs-6 col-sm-6 col-md-4 p-0 col1">
                    <div class="img_block w-100p">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 p-0 col2 d-flex flex-c">
                    <div class="img_block w-100p m-auto">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                    <div class="img_block w-100p m-auto">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 p-0 col3">
                    <div class="img_block w-100p">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec9" class="bg-green">
        <div class="container">
            <h2 class="text-center h-title">Contact Us</h2>
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex pos-r">
                    <form id="contact-form2" data-request="landing-page" autocomplete="off" class="m-auto">
                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                            <input type="text" class="w-100p" name="name" id="name" placeholder="NAME*">
                            <span class="text-danger name mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                            <input type="text" class="w-100p" name="company" id="company" placeholder="COMPANY*">
                            <span class="text-danger company mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6">
                            <input type="email" class="w-100p" name="email" id="email" placeholder="EMAIL*">
                            <span class="text-danger email mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6">
                            <input type="email" class="w-100p" name="phone" id="phone" placeholder="PHONE*">
                            <span class="text-danger phone mb-font12"></span>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                            <textarea class="w-100p" name="message" id="message" rows="5" placeholder="MESSAGE"></textarea>
                            <span class="text-danger message mb-font12"></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div id="res2" class="res"></div>
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex">
                            <button id="submit-f2" type="submit" class="btn btn-regis m-auto">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-black">
        <div class="container-fluid">
            <div class="footer_title">
                <div class="container"><h1><strong>Thai Polyester</strong></h1></div>
            </div>
        </div>
        <div class="container">
            <div class="footer_body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="content_group fd-flex">
                            <div class="content fp-0">
                                <div class="title">
                                    <h3 class="theme-hl"><strong>Our Product</strong></h3>
                                </div>
                                <div class="desc">
                                    <h4 class="theme-hl">
                                        <strong>• Polyester Product</strong>
                                    </h4>
                                    <ul class="product_lists">
                                        <li>
                                            <a href="{{route('product.psf')}}" title="PSF">
                                                - PSF
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.filament')}}" title="Filament yarn">
                                                - Filament yarn
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.poy')}}" title="POY">
                                                - POY
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.fdy')}}" title="FDY">
                                                - FDY
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.dty')}}" title="DTY">
                                                - DTY
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.twisted-yarn')}}" title="Twisted yarn">
                                                - Twisted yarn
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.monofilament')}}" title="Monofilament">
                                                - Monofilament
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{!!url('/dope-dyed')!!}" title="Dope dyed">
                                                - Dope dyed
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.spun-yarn')}}" title="Spun yarn">
                                                - Spun yarn
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.ring-spun')}}" title="Ring Spun">
                                                - Ring Spun
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('product.open-end')}}" title="Open end">
                                                - Open end
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">
                                    <h4 class="theme-hl">
                                        <strong>• 100% Recycled Polyester</strong>
                                    </h4>
                                    <ul class="product_lists">
                                        <li>
                                            <a href="{!!url('/recycled-products')!!}" title="100% Recycled Polyester">
                                                - 100% Recycled Polyester
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="content_group">
                            <div class="content">
                                <div class="icon">
                                    <picture>
                                        <source srcset="/assets/images/footer/mobile/Address-Footer-TPC.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/footer/desktop/Address-Footer-TPC.webp" width="900" height="350" class="img-fluid" alt="Address">
                                    </picture>
                                </div>
                                <div class="title">
                                    <h3 class="theme-hl"><strong>Address : Head Office</strong></h3>
                                </div>
                                <div class="desc">
                                    <p>
                                        470 Bangkuntien-Chaitaley
                                        Rd., Samaedum, Bangkuntien,
                                        Bangkok 10150 Thailand
                                    </p>
                                </div>
                                <div class="map">
                                    <a class="a-map" title="Map Head Office Thai Polyester" href="/assets/images/contact/TPC Map-02.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-02.webp?v={{time()}}">
                                        Map
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <picture>
                                        <source srcset="/assets/images/footer/mobile/Email-Footer-TPC.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/footer/desktop/Email-Footer-TPC.webp" width="900" height="350" class="img-fluid" alt="Address">
                                    </picture>
                                </div>
                                <div class="title">
                                    <h3 class="theme-hl"><strong>Email :</strong></h3>
                                </div>
                                <div class="desc">
                                    <a href="mailto: support@thaipolyester.com" title="support@thaipolyester.com">
                                        support@thaipolyester.com
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <div class="icon">
                                    <picture>
                                        <source srcset="/assets/images/footer/mobile/PHONE-Footer-TPC.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/footer/desktop/PHONE-Footer-TPC.webp" width="900" height="350" class="img-fluid" alt="Address">
                                    </picture>
                                </div>
                                <div class="title">
                                    <h3 class="theme-hl"><strong>Phone :</strong></h3>
                                </div>
                                <div class="desc">
                                    <a href="tel:+6634852371" title="+66 34 852371 to 2">
                                        +66 34 852371 to 2
                                    </a>
                                </div>
                                <div class="social">
                                    <ul class="social_lists">
                                        <li>
                                            <a href="https://www.facebook.com/Eco.Thaipolyester/" target="_blank" title="facebook">
                                                <picture>
                                                    <source srcset="/assets/images/footer/mobile/ICON-FACEBOOK-Footer-TPC.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/footer/desktop/ICON-FACEBOOK-Footer-TPC.webp" width="900" height="350" class="img-fluid" alt="facebook">
                                                </picture>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/thai-polyester-co-ltd-thailand" target="_blank" title="Linkin">
                                                <picture>
                                                    <source srcset="/assets/images/footer/mobile/Icon-Linkin-Footer-Tpc.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/footer/desktop/Icon-Linkin-Footer-Tpc.webp" width="900" height="350" class="img-fluid" alt="Linkin">
                                                </picture>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send/?phone=66639021369&text&app_absent=0" target="_blank" title="Whatsapp">
                                                <picture>
                                                    <source srcset="/assets/images/footer/mobile/Icon-whatsapp-Footer-TPC.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/footer/desktop/Icon-whatsapp-Footer-TPC.webp" width="900" height="350" class="img-fluid" alt="Whatsapp">
                                                </picture>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="content_group fd-flex">
                            <div class="content p-0">
                                <div id="g-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="text-center">
                <strong>copyright © 2019 Thai polyester Co., Ltd. All rights reserved.</strong>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/landing/page/page7.js?v={{time()}}"></script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
