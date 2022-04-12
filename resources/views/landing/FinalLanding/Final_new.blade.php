@extends('landing.template')
@section('style')
<link rel="preload stylesheet" href="\css\landing\Finallanding\nav.css?v={{time()}}" as="style" crossorigin>
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
    </div>
@endsection
@section('script')
    <script src="\js\landing\Finallanding\main_new.js"></script>
@endsection
