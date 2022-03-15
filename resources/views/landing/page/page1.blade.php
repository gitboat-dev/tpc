@extends('landing.template')
@section('style')
    <link rel="preload stylesheet" href="\css\landing\page\page1.css" as="style" crossorigin>

@endsection
@section('content')
<div id="landing">
    <section class="sec1">
        <div class="row r1 m-0">
            <div class="class=col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="img_block">
                    <picture>
                        <source srcset="\assets\images\ring-spun\mobile\Head-Ring-Spun-Thaipolyester.webp" alt="Ring Spun Thaipolyester" media="(max-width: 640px)">
                        <img src="\assets\images\ring-spun\desktop\Head-Ring-Spun-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun Thaipolyester">
                    </picture>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
@endsection
