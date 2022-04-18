@extends('landing.template')
@section('style')
<link rel="preload stylesheet" href="\css\landing\Finallanding\nav.css?v={{time()}}" as="style" crossorigin>
<link rel="preload stylesheet" href="\css\landing\Finallanding\style_new.css?v={{time()}}" as="style" crossorigin>
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
                            <form id="contact-form" data-request="landing-page" autocomplete="off">
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
                                    <input type="checkbox" value="">
                                    <label class="ml-0 fw-n">I hereby consent Thai Polyester limited company (TPC) to collect, use or disclose my given information for the company's promotion.</label>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex">
                                    <button type="submit" class="btn btn-regis m-auto">Register for free catalog</button>
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
                        <img src="\assets\images\landing\Finallanding\v1_02.png" alt="">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">New</h3>
                        <p class="card-desc">New Technology</p>
                        <img src="\assets\images\landing\Finallanding\v1_04.png" alt="">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">Fast</h3>
                        <p class="card-desc">Fast Support<br>Resposibility<br>Fast Transpotation</p>
                        <img src="\assets\images\landing\Finallanding\v1_03.png" alt="">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">Exactly</h3>
                        <p class="card-desc">Amount Quantity</p>
                        <img src="\assets\images\landing\Finallanding\v1_01.png" alt="">
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
                                        <img src="\assets\images\landing\Finallanding\001" alt="monofilament">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\002.png" alt="dope dyed">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\003.png" alt="dty">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\004.png" alt="twisted">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\005.png" alt="spun yarn">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\006.png" alt="psf">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\007.png" alt="filament">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\008.png" alt="fdy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\009.png" alt="poy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\006.png" alt="psf">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\007.png" alt="filament">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\009.png" alt="poy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\008.png" alt="fdy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\003.png" alt="dty">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\004.png" alt="twisted">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-8" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\001" alt="monofilament">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\002.png" alt="dope dyed">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-10" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\005.png" alt="spun yarn">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-11" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\001" alt="monofilament">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-12" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\003.png" alt="dty">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\008.png" alt="fdy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\009.png" alt="poy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-13" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="\assets\images\landing\Finallanding\005.png" alt="spun yarn">
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
                    <div class="col-xs-12 col-sm-5 col-md-5 col1">
                        <img src="\assets\images\landing\Finallanding\v1_77.png">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col2">
                        <h2 class="h-title">ABOUT US</h2>
                        <h3 class="h-sub-title">Thai Polyester limited company (TPC) is recognized as a leading polyester yarn manufacturer in Thailand.</h3>
                        <p>Quality - Innovation - Quick response - Competitive price.<br>To meet the needs of customers in various industries, the company has successfully provided a wide range of fiber and yarn products, including POY, FDY, DTY, staple fiber, and spun yarn in raw white, mélange, dope dyed, and yarn dyed.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="\js\landing\Finallanding\main_new.js"></script>
@endsection
