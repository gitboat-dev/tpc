@extends('layouts.template')
@section('style')
<link rel="preload stylesheet" href="/css/index2.css?v={{time()}}" as="style" crossorigin>
@endsection
@section('og-image','')
@section('content')
    <div id="tpc">
        <div id="tpc_bg">
            <section id="sec1" class="pos-r">
                <div class="sec1_wrapper">
                    <video autoplay muted loop playsinline id="video1" poster="">
                        <source src="/assets/images/landing/page8/video/Landing Page TPC4.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="pos-ab w-100p h-100p top-0 left-0 d-flex">
                    <div class="row m-0 w-100p h-100p">
                        <div class="col-xs-12 col-sm-12 col-md-12 d-flex h-100p col-h1">
                            <div class="head-content w-100p h-100p d-flex">
                                <div class="content m-auto">
                                    <h1 class="head-title fw-bold">
                                        Thai Polyester Company (TPC)
                                    </h1>
                                    <div class="head-desc">
                                        <p>
                                            we are leading polyester yarn recycling Manufacturer
                                        </p>
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
@endsection

