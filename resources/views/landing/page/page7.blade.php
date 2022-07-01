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
                        <div class="card-desc text-center">
                            <p>High Quality</p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="\assets\images\landing\page7\mobile\good-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="\assets\images\landing\page7\desktop\good-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                        <div class="card-desc text-center">
                            <p>New Technology</p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="\assets\images\landing\page7\mobile\New-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="\assets\images\landing\page7\desktop\New-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="New Landing page Thaipolyester" loading="lazy">
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
                        <div class="card-desc text-center">
                            <p>
                                Fast Support<br>
                                Resposibility<br>
                                Fast Transpotation
                            </p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="\assets\images\landing\page7\mobile\Fast-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="\assets\images\landing\page7\desktop\Fast-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Fast Landing page Thaipolyester" loading="lazy">
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
                        <div class="card-desc text-center">
                            <p>Amount Quantity</p>
                        </div>
                        <div class="card-img">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="\assets\images\landing\page7\mobile\Exactly-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="\assets\images\landing\page7\desktop\Exactly-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Exactly Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\POY-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\POY-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\FDY-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\FDY-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\DTY-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\DTY-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Twisted-yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Twisted-yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\desktop\Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Dope-Dyed-Black-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Dope-Dyed-Black-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Ring-Spun-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Ring-Spun-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Ring Spun Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\OE-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\OE-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="OE Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled PSF Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Filament Yarn Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Spun Yarn Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled PSF Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\desktop\Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Mono-Filament-Yarns-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="good Landing page Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Filament Yarn Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Spun Yarn Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-PSF-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled PSF Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-Filament-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Filament Yarn Thaipolyester" loading="lazy">
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
                                                    <source srcset="\assets\images\landing\page7\mobile\Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                                    <img src="\assets\images\landing\page7\desktop\Recycled-Spun-Yarn-landing-page-V3-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Recycled Spun Yarn Thaipolyester" loading="lazy">
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
                                <source srcset="\assets\images\landing\page7\mobile\About-US-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="\assets\images\landing\page7\desktop\About-US-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="About US Landing page Thaipolyester" loading="lazy">
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
                                <source srcset="\assets\images\landing\page7\mobile\Process-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="\assets\images\landing\page7\desktop\Process-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="About US Landing page Thaipolyester" loading="lazy">
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
                        <picture>
                            <source srcset="\assets\images\landing\page7\mobile\Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="\assets\images\landing\page7\desktop\Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 p-0 col2 d-flex flex-c">
                    <div class="img_block w-100p m-auto">
                        <picture>
                            <source srcset="\assets\images\landing\page7\mobile\Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="\assets\images\landing\page7\desktop\Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                    <div class="img_block w-100p m-auto">
                        <picture>
                            <source srcset="\assets\images\landing\page7\mobile\Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="\assets\images\landing\page7\desktop\Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 p-0 col3">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="\assets\images\landing\page7\mobile\Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="\assets\images\landing\page7\desktop\Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                        </picture>
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
    <script src="/js/landing/page/page7.js?v={{time()}}"></script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
