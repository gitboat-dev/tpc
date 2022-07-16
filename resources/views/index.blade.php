@extends('layouts.template')
@section('style')
<link rel="preload stylesheet" href="/css/index.min.css?v={{time()}}" as="style" crossorigin>
@endsection
@section('og-image','/assets/images/home/desktop/HOME-Thaipolyester.webp')
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
                                    <source srcset="/assets/images/home/mobile/Catalog-company-profile-ThaiPolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/home/desktop/Catalog-company-profile-ThaiPolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Catalog company profile ThaiPolyester" loading="lazy">
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
                                <a href="https://www.thaipolyester.com/book/en/tpc/company-profile-and-catalog-en" title="Download" class="m-auto" target="_blank">
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
                        <source srcset="/assets/images/home/mobile/HOME-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                        <img src="/assets/images/home/desktop/HOME-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Catalog company profile ThaiPolyester" loading="lazy">
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
                                <a href="{!!url('/about')!!}" title="About Us" class="m-auto">
                                    ABOUT US
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec4" class="pos-r bg-black">
                <h2 class="sec4-title text-center theme-hl fw">Our Textile Business</h2>
                <div class="container">
                    <div class="row m-0">
                        <div class="col-xs-12 col-sm-12 col-md-4 p-0">
                            <div class="img_block w-100p pos-r">
                                <picture>
                                    <source srcset="/assets/images/home/mobile/Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/home/desktop/Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                            <div class="d-flex pos-ab top-0 left-0 w-100p h-100p content">
                                <div class="content_group m-auto">
                                    <h2 class="text-center fw-600"><span class="tl2 m-tl1">THAI POLYESTER</span></h2>
                                    <div class="content-desc">
                                        <p class="text-center">
                                            TPC is a Fully Integrated Polyester
                                            manufacturer with total capacity 316,800
                                            tons per annual. Our high-quality
                                            Polymer process is guaranteed by
                                            modern German technology.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 p-0">
                            <div class="img_block w-100p pos-r">
                                <picture>
                                    <source srcset="/assets/images/home/mobile/Jongstit.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/home/desktop/Jongstit.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Jongstit" loading="lazy">
                                </picture>
                            </div>
                            <div class="d-flex pos-ab top-0 left-0 w-100p h-100p content">
                                <div class="content_group m-auto">
                                    <h2 class="text-center fw-600"><span class="tl2 m-tl1">JONG STIT</span></h2>
                                    <div class="content-desc">
                                        <p class="text-center">
                                            Jong Stit Co.,Ltd. is leading textile
                                            entrepreneur based in Thailand. JS group
                                            corperate in vertival intergration of
                                            textile manufacturer leveraging 100%
                                            polyester.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 p-0">
                            <div class="img_block w-100p pos-r">
                                <picture>
                                    <source srcset="/assets/images/home/mobile/FashionHometex.webp?v={{time()}}" media="(max-width: 640px)">
                                    <img src="/assets/images/home/desktop/FashionHometex.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="FashionHometex" loading="lazy">
                                </picture>
                            </div>
                            <div class="d-flex pos-ab top-0 left-0 w-100p h-100p content">
                                <div class="content_group m-auto">
                                    <h2 class="text-center fw-600"><span class="tl2 m-tl1">FASHION HOMETEX</span></h2>
                                    <div class="content-desc">
                                        <p class="text-center">
                                            We are the largest home textile supplier
                                            in thailand an affiliate of Jong Stit
                                            Co.,Ltd. Distributing innovative products
                                            to bring your comforts meet our quality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec5" class="pos-r">
                <div class="container">
                    <h2 class="sec5-title text-center m-0 fw">Our Product</h2>
                    <h2 class="sec5-title text-center fw-600 theme-hl"><span class="tl0 m-tl">100% Recycled Polyester</span></h2>
                    <div class="row m-0 r1">
                        <div class="col-xs-12 col-sm-12 col-md-2-5 p-0 col1">
                            <div class="recycled-row">
                                <div class="recycled-col1 text-center">
                                    <div class="step-tag">
                                        STEP 1
                                    </div>
                                </div>
                                <div class="recycled-img-block step1 recycled-col2">
                                    <div class="recycled-img">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/PET-Plastic-Bottles-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/PET-Plastic-Bottles-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="PET Plastic Bottles Thaipolyester" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="recycled-img-icon">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/icon.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/icon.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Next Step ThaiPolyester" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="recycled-col3 text-center">
                                    <h4 class="fw-600 m-0">PET Plastic Bottles</h4>
                                    <small class="fw-600" style="line-height: 100%;">
                                        <span class="tl0 m-tl">Post consumer bottles<br>
                                        are collected and washed</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2-5 p-0 col2">
                            <div class="recycled-row">
                                <div class="recycled-col1 text-center">
                                    <div class="step-tag">
                                        STEP 2
                                    </div>
                                </div>
                                <div class="recycled-img-block step2 recycled-col2">
                                    <div class="recycled-img">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/Flake-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/Flake-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Flake Thaipolyester" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="recycled-img-icon">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/icon.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/icon.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Next Step ThaiPolyester" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="recycled-col3 text-center">
                                    <h4 class="fw-600 m-0">Flake</h4>
                                    <small class="fw-600" style="line-height: 100%;">
                                        <span class="tl0 m-tl">Bottles shredded into Flake</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2-5 p-0 col3">
                            <div class="recycled-row">
                                <div class="recycled-col1 text-center">
                                    <div class="step-tag">
                                        STEP 3
                                    </div>
                                </div>
                                <div class="recycled-img-block step3 recycled-col2">
                                    <div class="recycled-img">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/Fiber-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/Fiber-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Fiber Thaipolyester" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="recycled-img-icon">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/icon.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/icon.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Next Step ThaiPolyester" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="recycled-col3 text-center">
                                    <h4 class="fw-600 m-0">Fiber</h4>
                                    <small class="fw-600" style="line-height: 100%;">
                                        <span class="tl0 m-tl">
                                            Flake are melted and<br>
                                            extruded into fiber
                                        </span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2-5 p-0 col4">
                            <div class="recycled-row">
                                <div class="recycled-col1 text-center">
                                    <div class="step-tag">
                                        STEP 4
                                    </div>
                                </div>
                                <div class="recycled-img-block step4 recycled-col2">
                                    <div class="recycled-img">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/Yarn-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/Yarn-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Yarn Thaipolyester" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="recycled-img-icon">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/icon.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/icon.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Next Step ThaiPolyester" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="recycled-col3 text-center">
                                    <h4 class="fw-600 m-0">Yarn</h4>
                                    <small class="fw-600" style="line-height: 100%;">
                                        <span class="tl0 m-tl">Fibre are spun into Polyester Yarn</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2-5 p-0 col5">
                            <div class="recycled-row">
                                <div class="recycled-col1 text-center">
                                    <div class="step-tag">
                                        STEP 5
                                    </div>
                                </div>
                                <div class="recycled-img-block step5 recycled-col2">
                                    <div class="recycled-img">
                                        <picture>
                                            <source srcset="/assets/images/home/mobile/Fabric-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                            <img src="/assets/images/home/desktop/Fabric-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Fabric Thaipolyester" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="recycled-img-icon">
                                    </div>
                                </div>
                                <div class="recycled-col3 text-center">
                                    <h4 class="fw-600 m-0">Fabric</h4>
                                    <small class="fw-600" style="line-height: 100%;">
                                        <span class="tl0 m-tl">
                                            yarn are knitted or<br>
                                            woven into fabric
                                        </span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 r2">
                        <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                            <div class="content d-flex">
                                <div class="content_group m-auto">
                                    <p class="text-center">
                                        For this reason, Thai Polyester limited company (TPC), the <span class="theme-hl">leading recycled polyester yarn and fiber manufacturer</span> in Thailand, concerns seriously
                                        about the environmental problems to protect the ecosystem and the environment for decades.
                                    </p>
                                    <div class="recycled-btn d-flex">
                                        <a href="{!!url('/recycled-products')!!}" title="100% Recycled Polyester" class="mr-0">
                                            ...Continue reading
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec6" class="pos-r">
                <div class="img_block w-100p pos-r">
                    <picture>
                        <source srcset="/assets/images/home/mobile/Filament-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                        <img src="/assets/images/home/desktop/Filament-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Filament Thaipolyester" loading="lazy">
                    </picture>
                </div>
                <div class="d-flex content">
                    <div class="content_group m-auto">
                        <h2 class="theme-hl fw">Filament</h2>
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
                            <a href="{{route('product.filament')}}" title="Filament" class="mr-0">
                                ...Continue reading
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec7" class="pos-r">
                <div class="img_block w-100p pos-r">
                    <picture>
                        <source srcset="/assets/images/home/mobile/Spun-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                        <img src="/assets/images/home/desktop/Spun-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Spun Thaipolyester" loading="lazy">
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
                                <a href="{{route('product.spun-yarn')}}" title="Spun yarn" class="mr-0">
                                    ...Continue reading
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec8" class="pos-r">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-xs-12 col-sm-12 col-md-12 col1">
                            <div class="content d-flex">
                                <div class="content_group m-auto">
                                    <h2 class="text-center fw">
                                        Our Custumers
                                    </h2>
                                    <p class="text-center">
                                        our 20 years experience, as one stop service polyester yarn and fiber manufacturer in Thailand, we have supplied customers in variety industries who are
                                        located more than 70 countries around the world.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                        <a title="Map Our Custumers Thaipolyester" href="/assets/images/home/desktop/Map-Our-Custumers-Thaipolyester.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/Map-Our-Custumers-Thaipolyester.webp?v={{time()}}">
							<picture>
								<source srcset="/assets/images/home/mobile/Map-Our-Custumers-Thaipolyester.webp?v={{time()}}" alt="map Thaipolyester customer" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/Map-Our-Custumers-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Map Our Custumers Thaipolyester" loading="lazy">
							</picture>
						</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
                        <h3 class="text-center fw-600 thailand">
                            <picture>
                                <source srcset="/assets/images/home/mobile/star.webp" alt="star" loading="lazy" media="(max-width: 640px)">
                                <img src="/assets/images/home/desktop/star.webp" width="900" height="350" class="img-fluid star" alt="star" loading="lazy">
                            </picture>
                            Thailand
                        </h3>
                        <ul class="row custumer-lists">
                            @if(isset($our_customers) && $our_customers)
                                @foreach($our_customers as $c)
                                    <li class="col-xs-6 col-sm-4 col-md-2-5">{{ $c }}</li>
                                @endforeach
                            @endif
                        </ul>
                        <div class="arrow-block">
							<picture>
								<source srcset="/assets/images/home/mobile/triangle.webp" alt="triangle" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/triangle.webp" width="900" height="350" class="img-fluid ab-img" alt="triangle" loading="lazy">
							</picture>
						</div>
                    </div>
                </div>
            </section>
            <section id="sec9" class="pos-r">
                <div class="container">
                    <div class="row r1 m-0">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h2 class="text-center fw">
                                Certification
                            </h2>
                        </div>
                    </div>
                    <div class="row r2 m-0 d-flex">
                        <div class="col-xs-6 col-sm-6 col-md-4 p-0 col1">
                            <div class="img_block w-100p">
                                <a title="Green industry Activty Thaipolyester" href="/assets/images/home/desktop/Green-industry-Activty-Thaipolyester.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/Green-industry-Activty-Thaipolyester.webp?v={{time()}}">
                                    <picture>
                                        <source srcset="/assets/images/home/mobile/Green-industry-Activty-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/home/desktop/Green-industry-Activty-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Green industry Activty Thaipolyester" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 p-0 col2 d-flex flex-c">
                            <div class="img_block w-100p m-auto">
                                <a title="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" href="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{time()}}">
                                    <picture>
                                        <source srcset="/assets/images/home/mobile/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                            <div class="img_block w-100p m-auto">
                                <a title="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" href="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{time()}}">
                                    <picture>
                                        <source srcset="/assets/images/home/mobile/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 p-0 col3">
                            <div class="img_block w-100p">
                                <a title="intertek Certificate of Registration thaipolyester" href="/assets/images/home/desktop/intertek-Certificate-of-Registration-thaipolyester.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/intertek-Certificate-of-Registration-thaipolyester.webp?v={{time()}}">
                                    <picture>
                                        <source srcset="/assets/images/home/mobile/intertek-Certificate-of-Registration-thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/home/desktop/intertek-Certificate-of-Registration-thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="intertek Certificate of Registration thaipolyester" loading="lazy">
                                    </picture>
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
<script src="/js/index.min.js?v={{time()}}"></script>
@endsection

