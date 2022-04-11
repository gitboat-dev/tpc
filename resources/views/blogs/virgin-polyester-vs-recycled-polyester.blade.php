@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/vp-vs-rp.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
    <div id="tpc">
        <div id="tpc_bg">
            <section id="sec1">
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content_block pos-r d-flex">
                            <div class="img_block w-100p">
                                <picture>
                                    <source srcset="\assets\images\blogs\columns\vp-vs-rp\mobile\Head-Virgin-Polyester-VS-Recycled-Polyester-Thaipolyester.webp" alt="Virgin Polyester VS Recycled Polyester" media="(max-width: 640px)">
                                    <img src="\assets\images\blogs\columns\vp-vs-rp\desktop\Head-Virgin-Polyester-VS-Recycled-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="Virgin Polyester VS Recycled Polyester">
                                </picture>
                            </div>
                            <div class="content_group m-auto pos-ab w-100p h-100p d-flex">
                                <h1 class="h-title text-center m-auto w-100p desktop">Virgin Polyester VS Recycled Polyester</h1>
                                <h1 class="h-title text-center m-auto w-100p mobile"><span class="m-tl1">Virgin Polyester<br> VS<br> Recycled Polyester</span></h1>
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
