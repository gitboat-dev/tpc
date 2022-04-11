@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/vp-vs-rp.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
    <div id="vpvsrp">
        <div id="vpvsrp_bg">
            <section class="sec1">
                <div class="img_block">
                    <picture>
                        <source srcset="\assets\images\blogs\columns\vp-vs-rp\mobile\Head-Virgin-Polyester-VS-Recycled-Polyester-Thaipolyester.webp" alt="Ring Spun Thaipolyester" media="(max-width: 640px)">
                        <img src="\assets\images\blogs\columns\vp-vs-rp\desktop\Head-Virgin-Polyester-VS-Recycled-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun Thaipolyester">
                    </picture>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('custom-script')
@endsection
