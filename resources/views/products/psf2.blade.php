@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/psf2.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('og-image','/assets/images/product/desktop/OE-Open-End-Spun-Yarn-Polyester-Thaipolyester.webp')
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1" class="bg-black pos-r">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-9 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h1 class="white-hl fw-600">
                                <span class="m-tl">What is<br>
                                polyester staple fiber?</span>
                            </h1>
                            <p class="desktop head-desc">
                                Polyester Staple Fiber (PSF) is a synthetic man-made fiber created directly via a polymerization process of polyester
                                material such as PTA (Purified Terephthalic Acid) and MEG (Mono Ethylene Glycol) under high temperature and
                                pressure. After the spinning and drawing process, the polymer becomes staple fibers and is cut to a specific cut length.
                                Polyester staple fiber plays an essential role in the textile industry due to several advantages of its characteristics.
                                Polyester staple fiber is more durable than cotton or wool. Additionally, polyester staple fiber also has high heat,
                                wrinkle and abrasion resistance, low absorbency, a stretching and shrinking resistance and quick-dry after washing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-3 p-0 col2">
                    <div class="img_block pos-ab">
                        <picture>
                            <source srcset="/assets/images/psf-v2/mobile/PSF-Product-Thaipolyester.webp" alt="" media="(max-width: 640px)">
                            <img src="/assets/images/psf-v2/desktop/PSF-Product-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col3 p-0">
                    <p class="mobile head-desc">
                        <span>&nbsp;&nbsp;&nbsp;&nbsp; Polyester Staple Fiber (PSF)</span> <span>is a synthetic man-made fiber</span> <span>created directly via a polymerization</span> process of polyester
                        material such as PTA (Purified Terephthalic Acid) and MEG (Mono Ethylene Glycol) under high temperature and
                        pressure. After the spinning and drawing process, the polymer becomes staple fibers and is cut to a specific cut length.
                        Polyester staple fiber plays an essential role in the textile industry due to several advantages of its characteristics.
                        Polyester staple fiber is more durable than cotton or wool. Additionally, polyester staple fiber also has high heat,
                        wrinkle and abrasion resistance, low absorbency, a stretching and shrinking resistance and quick-dry after washing.
                    </p>
                </div>
            </div>
        </section>
        <section id="sec2" class="bg-black pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <div class="video_1 pos-r">
                                <video autoplay muted loop playsinline id="video1" poster="">
                                    <source src="/assets/images/landing/page4/video/minify/TPC-Landing-Page2.mp4" type="video/mp4">
                                </video>
                                <figure class="btn-play d-flex pos-ab top-0 left-0 w-100p h-100p">
                                    <button class="m-auto" id="btn-video1" name="play">
                                        <picture>
                                            <source srcset="/assets/images/open-end/mobile/Play-Icon.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/open-end/desktop/Play-Icon.webp" width="900" height="350" class="img-fluid" alt="Play video" loading="lazy">
                                        </picture>
                                    </button>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col2">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h2 class="theme-hl">
                                How is polyester staple fiber made?
                            </h2>
                            <p>
                                Polyester Staple Fiber is a synthetic man-made fiber made directly from Purified Terephthalic Acid (PTA) and Mono Ethylene Glycol (MEG) or Polyethylene
                                Terephthalate (PET Chips), while recycled polyester staple fiber is made from recycled PET Chips, polyester waste, or post-consumer PET bottle flakes.
                                The production of polyester staple fiber starts from the polymerization process where PTA is fed into hot MEG under a high temperature and pressure setting.
                                Next is the melt spinning process. The bundle of continuous filaments obtained from the melt spinning technique (called tow) is subjected to the application
                                of more processes such as drawing and crimping and is then cut into fixed lengths. After the cutting process, these cut fibers are called polyester staple fibers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('custom-script')
	<script src="/js/psf2.js?v={{ time() }}"></script>
@endsection
