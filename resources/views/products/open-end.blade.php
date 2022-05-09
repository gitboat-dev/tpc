@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/open-end.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1" class="bg-black">
            <div class="row m-0 r1">
                <div class="col-xs-12 col-sm-12 col-md-6 col1 pos-r">
                    <div class="content_block pos-r d-flex">
                        <div class="img_block w-100p">
                            <picture>
                                <source srcset="/assets/images/open-end/mobile/OE-Spun-Open-End-Polyester-yarn-machine-Thaipolyester.webp" alt="OE Spun Open End Polyester yarn machine Thaipolyester" media="(max-width: 640px)">
                                <img src="/assets/images/open-end/desktop/OE-Spun-Open-End-Polyester-yarn-machine-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="OE Spun Open End Polyester yarn machine Thaipolyester">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 p-0 col2">
                    <div class="content_block pos-r d-flex">
                        <div class="content_group m-auto pos-r">
                            <h1 class="text-center theme-hl fw-600">
                                OPEN END<br>
                                or<br>
                                OE SPUN
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('custom-script')
	<script src="/js/open-end.js?v={{ time() }}"></script>
@endsection
