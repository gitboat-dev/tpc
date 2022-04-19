@extends('landing.template')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="preload stylesheet" href="\css\landing\Finallanding\nav.min.css?v={{time()}}" as="style" crossorigin>
<link rel="preload stylesheet" href="\css\landing\Finallanding\footer.min.css?v={{time()}}" as="style" crossorigin>
<link rel="preload stylesheet" href="\css\landing\Finallanding\style.min.css?v={{time()}}" as="style" crossorigin>
<link rel="preload stylesheet"  href="\lib\owlcarousel\assets\owl.carousel.min.css" as="style" crossorigin>
@endsection
@section('og-image','\assets\images\landing\page1\og-image\og-image.webp')
@section('content')
    <div id="landing">
        @include('landing.FinalLanding.nav')
        <section id="sec1">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="content_block pos-r">
                        <div class="img_block">
                            <picture>
                                <source src="\assets\images\landing\Finallanding\v1_94-3.png" alt="Thai Poyester" media="(max-width: 640px)">
                                <img src="\assets\images\landing\Finallanding\v1_94-3.png" alt="Thai Poyester" width="900" height="350" class="img-fluid">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec2">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="content_block pos-r d-flex">
                        <div class="content_group m-auto">
                            <h2 class="headform1 text-center">
                                Thai Polyester limited company (TPC)
                                - In the polyester industry, we are one of the best in Southeast Asia.
                            </h2>
                            <p class="subheadform1 text-center">
                                We are one of Thailand's largest yarn producers.
                            </p>
                            <form id="contact-form1" data-request="landing-page" autocomplete="off">
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                                    <span class="text-danger name mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Lastname">
                                    <span class="text-danger name mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Tel*">
                                    <span class="text-danger phone mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail*">
                                    <span class="text-danger email mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex form-check">
                                    <input type="checkbox" id="privacy">
                                    <label class="ml-0 fw-n">I hereby consent Thai Polyester limited company (TPC) to collect, use or disclose my given information for the company's promotion.</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div id="res" class="res"></div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex">
                                    <button id="submit-f1" type="submit" class="btn btn-regis m-auto">Register for free catalog</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec3">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <h2 class="text-center h-title">why you have to choose us?</h2>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">Good</h3>
                        <p class="card-desc">High Quality</p>
                        <img src="\assets\images\landing\Finallanding\v1_02.png" alt="High Quality" loading="lazy">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">New</h3>
                        <p class="card-desc">New Technology</p>
                        <img src="\assets\images\landing\Finallanding\v1_04.png" alt="New Technology" loading="lazy">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">Fast</h3>
                        <p class="card-desc">Fast Support<br>Resposibility<br>Fast Transpotation</p>
                        <img src="\assets\images\landing\Finallanding\v1_03.png" alt="Fast Support Resposibility Fast Transpotation" loading="lazy">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">Exactly</h3>
                        <p class="card-desc">Amount Quantity</p>
                        <img src="\assets\images\landing\Finallanding\v1_01.png" alt="Amount Quantity" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <section id="sec4">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <h2 class="text-center h-title">Products</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="container">
                        <ul class="nav nav-tabs row prod_tab d-flex">
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
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-4">Partially Oriented Yarn (POY)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-5">Fully Drawn Yarn (FDY)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-6">Draw Textured Yarn (DTY)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-7">Twisted Yarn</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-8">Mono Filament Yarns</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-9">Dope Dyed</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-10">Spun Yarn</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-11">Recycled Polyester Staple Fiber (PSF)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-12">Recycled Polyester Filament Yarn</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-13">Recycled Polyester Spun Yarn</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\001" alt="monofilament" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\002.png" alt="dope dyed" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\003.png" alt="dty" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\004.png" alt="twisted" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\005.png" alt="spun yarn" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\006.png" alt="psf" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\007.png" alt="filament" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\008.png" alt="fdy" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\009.png" alt="poy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\006.png" alt="psf" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\007.png" alt="filament" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\009.png" alt="poy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\008.png" alt="fdy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\003.png" alt="dty" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\004.png" alt="twisted" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-8" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\001" alt="monofilament" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\002.png" alt="dope dyed" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-10" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\005.png" alt="spun yarn" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-11" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\001" alt="monofilament" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-12" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\003.png" alt="dty" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\008.png" alt="fdy" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\009.png" alt="poy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-13" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\005.png" alt="spun yarn" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec5">
            <div class="container-fluid">
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-12 col-md-5 col1">
                        <img src="\assets\images\landing\Finallanding\v1_77.png" alt="About Us" loading="lazy">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col2">
                        <h2 class="h-title">ABOUT US</h2>
                        <h3 class="h-sub-title">Thai Polyester limited company (TPC) is recognized as a leading polyester yarn manufacturer in Thailand.</h3>
                        <p>Quality - Innovation - Quick response - Competitive price.<br>To meet the needs of customers in various industries, the company has successfully provided a wide range of fiber and yarn products, including POY, FDY, DTY, staple fiber, and spun yarn in raw white, mélange, dope dyed, and yarn dyed.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec6" class="pos-r">
            <div class="container">
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 col1">
                        <h3 class="title-lists">Our Strength</h3>
                        <ul class="lists">
                            <li>Reasonable Price</li>
                            <li>Short Lead Time</li>
                            <li>Trustworthy Supplier</li>
                            <li>Large Capacity</li>
                            <li>Wide Product Range</li>
                        </ul>
                        <h3 class="title-lists">Why you should buy products and services from TPC?</h3>
                        <ul class="lists">
                            <li>On time</li>
                            <li>Responsibility</li>
                            <li>Prompt Service</li>
                            <li>One Stop service</li>
                            <li>Competitive Price</li>
                            <li>Service Mind</li>
                            <li>Experience over 80 Years</li>
                            <li>German Technology</li>
                            <li>Free consulation</li>
                            <li>Free sample (5Kg-20Kg)</li>
                        </ul>
                        <h3 class="title-lists">What distinguishes us from our competitors?</h3>
                        <ul class="lists">
                            <li>Competitive Price</li>
                            <li>LNG(Green Factory in Process)</li>
                            <li>We are one of the biggest yarn manufacturer in Thailand</li>
                            <li>Global Brand Name Customer chose us</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 d-flex pos-r col2">
                        <img src="\assets\images\landing\Finallanding\v1_93.png" class="m-auto" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <section id="sec7">
            <div class="container-fluid">
                <div class="slide">
                    <div class="owl-carousel owl-theme">
                        <div class="item text-center p-0">
                            <h1 class="default">Testimonial</h1>
                            <h2 class="default">"High technology German machine is one of my favourite"</h2>
                            <p>Mirza Md. Shahadat Hossain , Rubel</p>
                            <p>CEO Shazman Trade International</p>
                        </div>
                        <div class="item text-center p-0">
                            <h1 class="default">Testimonial</h1>
                            <h2 class="default">"High technology German machine is one of my favourite"</h2>
                            <p>Mirza Md. Shahadat Hossain , Rubel</p>
                            <p>CEO Shazman Trade International</p>
                        </div>
                        <div class="item text-center p-0">
                            <h1 class="default">Testimonial</h1>
                            <h2 class="default">"High technology German machine is one of my favourite"</h2>
                            <p>Mirza Md. Shahadat Hossain , Rubel</p>
                            <p>CEO Shazman Trade International</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec8">
            <div class="container">
                <h2 class="text-center">Certification</h2>
                <div class="slide">
                    <div class="owl-carousel owl-theme">
                        <div class="item text-center p-0">
                            <img src="\assets\images\landing\Finallanding\v001.png" alt="oeko-tex">
                        </div>
                        <div class="item text-center p-0">
                            <img src="\assets\images\landing\Finallanding\v002.png" alt="Global Recycle Standard">
                        </div>
                        <div class="item text-center p-0">
                            <img src="\assets\images\landing\Finallanding\v003.png" alt="green ndustry">
                        </div>
                        <div class="item text-center p-0">
                            <img src="\assets\images\landing\Finallanding\v004.png" alt="certificate of registration">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec9">
            <div class="container bg-green">
                <h2 class="text-center h-title">Contact Us</h2>
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex pos-r">
                        <form id="contact-form2" data-request="landing-page" autocomplete="off" class="m-auto">
                            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                <label for="name">First Name <span style="color: #a94442;">*</span></label>
                                <input type="text" class="w-100p" name="name" id="name">
                                <span class="text-danger name mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" class="w-100p" name="lname" id="lname">
                                <span class="text-danger name mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <label for="email">E-mail <span style="color: #a94442;">*</span></label>
                                <input type="email" class="w-100p" name="email" id="email">
                                <span class="text-danger email mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <label for="phone">Tel <span style="color: #a94442;">*</span></label>
                                <input type="email" class="w-100p" name="phone" id="phone">
                                <span class="text-danger phone mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <label for="message">Message</label>
                                <textarea class="w-100p" name="message" id="message" rows="5"></textarea>
                                <span class="text-danger message mb-font12"></span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div id="res" class="res"></div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex">
                                <button id="submit-f2" type="submit" class="btn btn-regis m-auto">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @include('landing.FinalLanding.footer')
    </div>
@endsection
@section('script')
    <script src="\js\landing\Finallanding\main.min.js?v={{time()}}"></script>
    <script src="\lib\jquery-on-scrolled-to\on-scrolled-to.min.js"></script>
    <script src="\lib\owlcarousel\owl.carousel.min.js"></script>
@endsection
