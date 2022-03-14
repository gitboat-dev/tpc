@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/ring-spun.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
    <h1 style="display: none;">Ring Spun</h1>
    <div id="ring">
		<div id="ring_bg">
            <div class="section-one">
                <div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                        <div class="img_block1">
							<picture>
								<source srcset="\assets\images\ring-spun\mobile\Head-Ring-Spun-Thaipolyester.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 640px)">
								<img src="\assets\images\ring-spun\desktop\Head-Ring-Spun-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester">
					        </picture>
					    </div>
                    </div>
                </div>
            </div>
            <div class="section-two">

            </div>
        </div>
    </div>
@endsection
@section('custom-script')
	<script src="/js/ring-spun.js?v={{ time() }}"></script>
@endsection
