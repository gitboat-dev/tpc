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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="\js\landing\Finallanding\main_new.js"></script>
@endsection
