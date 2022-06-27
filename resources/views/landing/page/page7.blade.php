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
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <h2 class="text-center fw-bold">why you have to choose us?</h2>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card d-flex flex-c m-flex-c">
                        <div class="card-title text-center">
                            <h3 class="fw-bole">Good</h3>
                        </div>
                        <div class="card-desc text-center">
                            <p>High Quality</p>
                        </div>
                        <div class="card-img">
                            3333
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">666</div>
                <div class="col-xs-6 col-sm-6 col-md-3">777</div>
                <div class="col-xs-6 col-sm-6 col-md-3">888</div>
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
