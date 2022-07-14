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
            <section id="sec2" class="pos-r">
                <div class="container">
                    <div class="row m-0 d-flex m-flex-c">
                        <div class="col-xs-12 col-sm-12 col-md-6 p-0 m-auto">
                            <div class="img_block w-100p pos-r">
                                <picture>
                                    <source srcset="\assets\images\home-v2\mobile\Catalog-company-profile-ThaiPolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="\assets\images\home-v2\desktop\Catalog-company-profile-ThaiPolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Catalog company profile ThaiPolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 p-0 m-auto">
                            <h2 class="text-center fw-600">Our Company</h2>
                            <h3 class="text-center">
                                Thai Polyester Company has been established in 2001.
                                We are full integration of fiber polyester manufacturer
                                with total capacity 316,800 tons a years achieved
                                thereby of the innovative technology in globe.
                            </h3>
                            <div class="download-btn d-flex">
                                <a href="" title="Download" class="m-auto">
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec3" class="pos-r">
                <div class="img_block w-100p pos-r">
                    <picture>
                        <source srcset="\assets\images\home-v2\mobile\HOME-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                        <img src="\assets\images\home-v2\desktop\HOME-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Catalog company profile ThaiPolyester" loading="lazy">
                    </picture>
                </div>
                <div class="container">
                    <div class="row m-0 d-flex m-flex-c">
                        <div class="col-xs-12 col-sm-12 col-md-12 p-0 m-auto col1">
                            <p class="text-center">
                                Thai polyester is a registered company specializing in polyester yarn both fiber and filament. We export polyester yarn to many countries.
                                An engineering plant of our production phases has successive through Zimmer AG Germany. Regard to filament and textured yarn is developed with the
                                latest generation of application on German operation, Barmag take-up. TPC, we landed on 3.2 Million Sq.m at Ban Bung, Chonburi, far from
                                Laemchabang Port within 2 hours.
                            </p>
                            <div class="about-btn d-flex">
                                <a href="" title="About Us" class="m-auto">
                                    ABOUT US
                                </a>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="sec4" class="pos-r">

            </section>
            <section id="sec5" class="pos-r">

            </section>
            <section id="sec6" class="pos-r">
                <div class="img_block w-100p pos-r">
                    <picture>
                        <source srcset="\assets\images\home-v2\mobile\Filament-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                        <img src="\assets\images\home-v2\desktop\Filament-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Filament Thaipolyester" loading="lazy">
                    </picture>
                </div>
                <div class="d-flex content">
                    <div class="content_group m-auto">
                        <h2 class="theme-hl fw-600">Filament</h2>
                        <p>
                            Thai polyester Co., Ltd., who is the leading
                            polyester yarn supplier based in Thailand, has with
                            84,000 ton capacity of polyester filament production
                            yearly. TPC manufactures four<br>
                            categories of polyester filament yarn which are;<br>
                            • Pre-Oriented Yarn (POY)<br>
                            • Fully Drawn Yarn (FDY)<br>
                            • Drawn Textured Yarn (DTY)<br>
                            • Twisted yarn
                        </p>
                        <div class="filament-btn d-flex">
                            <a href="" title="Filament" class="mr-0">
                                ...Continue reading
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec7" class="pos-r">
                <div class="img_block w-100p pos-r">
                    <picture>
                        <source srcset="\assets\images\home-v2\mobile\Spun-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                        <img src="\assets\images\home-v2\desktop\Spun-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Spun Thaipolyester" loading="lazy">
                    </picture>
                </div>
                <div class="d-flex pos-ab top-0 left-0 w-100p h-100p content">
                    <div class="content_group m-auto">
                        <div class="container">
                            <h2 class="white-hl fw-600 text-center">Spun yarn</h2>
                            <p class="text-center">
                                Thai Polyester Co., Ltd. is the professional 100% polyester fibers and yarns manufacturer in Thailand, we are also recognize as the biggest
                                <span class="theme-hl">100% polyester spun yarn manufacturer</span> in Thailand. Thai Polyester provides numerous quantities of <span class="theme-hl">polyester ring spun yarn</span> and <span class="theme-hl">polyester OE spun yarn</span>
                                to the local customers and export to thread suppliers, knitting and weaving manufacturers around the world every year.
                            </p>
                            <div class="spun-btn d-flex">
                                <a href="" title="Spun yarn" class="mr-0">
                                    ...Continue reading
                                </a>
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

