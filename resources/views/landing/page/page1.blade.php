@extends('landing.template')
@section('style')
    <link rel="stylesheet preload" href="/lib/animate/animate.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/page/page1.css" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
<div id="landing">
    <section id="sec1">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__fadeInDown @else animate__pulse @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Head-Landingpage-Thaipolyester.webp" alt="Landingpage Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Head-Landingpage-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Landingpage Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec2" class="bg-black">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <div class="content_group m-auto">
                        <p class="p1">
                            To achieve that, you need to have an expert system in the production process that
                            produces superior products! Because of the high technology used in our production line,
                            <label class="green-hl">your defective rate will be reduced.</label> Our ready-to-ship stock can <label class="green-hl">save you a lot of time.</label>
                            And typically, the superiority of having a GRS certificate to guarantee that your product
                            is genuinely recycled can <label class="green-hl">add more value to your product and is trusted globally.</label>
                        </p>
                        <p class="p2 text-center">
                            These explain why we are specialized in the textile industry,<br>
                            with expertise in POLYESTER.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec3">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-5-5 p-0 col1">
                <div class="row r1-1 m-0">
                    <div class="col-md-12 p-0 col1-1">
                        <div class="content_block">
                            <div class="img_block wow @if($chkmo) animate__fadeInUpBig @else animate__backInLeft @endif">
                                <picture>
                                    <source srcset="\assets\images\landing\page1\mobile\Ring-Spun-Process-Lindingpage-Thaipolyester.webp" alt="Ring Spun Process Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                    <img src="\assets\images\landing\page1\desktop\Ring-Spun-Process-Lindingpage-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun Process Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 col1-2">
                        <div class="content_block">
                            <div class="img_block wow @if($chkmo) animate__fadeInUpBig @else animate__backInRight @endif">
                                <picture>
                                    <source srcset="\assets\images\landing\page1\mobile\landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC-1.webp" alt="Product Draw textured yarn Thai Polyester TPC" media="(max-width: 640px)" loading="lazy">
                                    <img src="\assets\images\landing\page1\desktop\landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC-1.webp" width="900" height="350" class="img-fluid ab-img" alt="Product Draw textured yarn Thai Polyester TPC" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6-5 p-0 col2">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__fadeInUpBig @else animate__backInDown @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC.webp" alt="Product Draw textured yarn Thai Polyester TPC" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Product Draw textured yarn Thai Polyester TPC" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
    </section>
    {{-- <section id="sec4">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <h2 class="text-center">
                    <label class="theme-hl">100% POLYESTER YARN</label><br>
                    PRODUCT LIST
                </h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__fadeInUpBig @else animate__backInUp @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Filament-Yarn-landing-page-TPC-Thaipolyester.webp" alt="Filament Yarn TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Filament-Yarn-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Filament Yarn TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__fadeInUpBig @else animate__backInUp @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Spun-Yarn-landing-page-TPC-Thaipolyester.webp" alt="Spun Yarn TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Spun-Yarn-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Spun Yarn TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__fadeInUpBig @else animate__backInUp @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Polyester-Staple-Fiber-landing-page-TPC-Thaipolyester.webp" alt="Polyester Staple Fiber TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Polyester-Staple-Fiber-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="sec4">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <h2 class="text-center m-0">
                    <label class="theme-hl">100% POLYESTER YARN</label><br>
                    PRODUCT LIST
                </h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block">
                    <table class="wow @if($chkmo) animate__fadeInUpBig @else animate__backInUp @endif">
                        <thead>
                            <tr>
                                <th width="25%">YARN TYPE</td>
                                <th width="25%">D/F</td>
                                <th width="10%">LUSTER</td>
                                <th width="20%">TYPE</td>
                                <th width="20%">COLOR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="5" class="fw-600">Partially Oriented Yarn<br>(POY)</td>
                                <td>85/36</td>
                                <td rowspan="5">SD</td>
                                <td rowspan="5">Virgin & Recycled</td>
                                <td rowspan="5">RW,DDB</td>
                            </tr>
                            <tr>
                                <td>125/36,125/72,125/144</td>
                            </tr>
                            <tr>
                                <td>165/36, 165/48</td>
                            </tr>
                            <tr>
                                <td>260/48,260/96,260/144,260/288</td>
                            </tr>
                            <tr>
                                <td>500/96</td>
                            </tr>
                            <tr>
                                <td rowspan="4" class="fw-600">Draw Textured Yarn<br>(DTY)</td>
                                <td>75/36,75/72,75/144</td>
                                <td rowspan="4">SD</td>
                                <td rowspan="4">Virgin & Recycled</td>
                                <td rowspan="4">RW,DDB,DYED YARN</td>
                            </tr>
                            <tr>
                                <td>100/36,100/48,100/96</td>
                            </tr>
                            <tr>
                                <td>150/48,150/96,150/144,150/288</td>
                            </tr>
                            <tr>
                                <td>300/96</td>
                            </tr>
                            <tr>
                                <td rowspan="6" class="fw-600">Fully Drawn Yarn<br>(FDY)</td>
                                <td>40/18,50/18</td>
                                <td rowspan="6">SD,TBR</td>
                                <td rowspan="6">Virgin & Recycled</td>
                                <td rowspan="6">RW,DDB</td>
                            </tr>
                            <tr>
                                <td>75/36,75/72</td>
                            </tr>
                            <tr>
                                <td>100/36</td>
                            </tr>
                            <tr>
                                <td>150/48,150/96,150/144</td>
                            </tr>
                            <tr>
                                <td>300/96</td>
                            </tr>
                            <tr>
                                <td>200/10,300/10</td>
                            </tr>
                            <tr>
                                <td rowspan="5" class="fw-600">Twisted Yarn<br>(DTY)</td>
                                <td>75/36/1 (Low - High Twisted)</td>
                                <td rowspan="5">SD</td>
                                <td rowspan="5">Virgin & Recycled</td>
                                <td rowspan="5">RW,DDB,DYED YARN</td>
                            </tr>
                            <tr>
                                <td>100/48/1 (Low - High Twisted)</td>
                            </tr>
                            <tr>
                                <td>150/36/1 (Low - High Twisted)</td>
                            </tr>
                            <tr>
                                <td>150/36/2 (Low - High Twisted)</td>
                            </tr>
                            <tr>
                                <td>150/48/1 (Low - High Twisted)</td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="fw-600">Twisted Yarn<br>(FDY)</td>
                                <td>75/36/1 (Low - High Twisted)</td>
                                <td rowspan="3">SD,TBR</td>
                                <td rowspan="3">Virgin & Recycled</td>
                                <td rowspan="3">RW,DDB,DYED YARN</td>
                            </tr>
                            <tr>
                                <td>100/36/1 (Low - High Twisted)</td>
                            </tr>
                            <tr>
                                <td>150/48/1 (Low - High Twisted)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="content_block">
                    <table class="wow @if($chkmo) animate__fadeInUpBig @else animate__backInUp @endif">
                        <tr>
                            <th width="25%">YARN TYPE</td>
                            <th width="25%">NE</td>
                            <th width="10%">LUSTER</td>
                            <th width="20%">TYPE</td>
                            <th width="20%">COLOR</td>
                        </tr>
                        <tr>
                            <td rowspan="4" class="fw-600">OE SPUN</td>
                            <td>10/1,12/1,14/1</td>
                            <td rowspan="4">SD</td>
                            <td rowspan="4">Virgin & Recycled</td>
                            <td rowspan="4">RW,DDB,MELANGE,DYED YARN</td>
                        </tr>
                        <tr>
                            <td>18/1,20/1</td>
                        </tr>
                        <tr>
                            <td>10/2</td>
                        </tr>
                        <tr>
                            <td>20/2</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="fw-600">RING SPUN</td>
                            <td>18/1,20/1</td>
                            <td rowspan="5">SD</td>
                            <td rowspan="5">Virgin & Recycled</td>
                            <td rowspan="5">RW,DDB,MELANGE,DYED YARN</td>
                        </tr>
                        <tr>
                            <td>18/1,30/1,32/1</td>
                        </tr>
                        <tr>
                            <td>10/2</td>
                        </tr>
                        <tr>
                            <td>20/2</td>
                        </tr>
                        <tr>
                            <td>30/2</td>
                        </tr>
                    </table>
                </div>
                <div class="content_block">
                    <table class="wow @if($chkmo) animate__fadeInUpBig @else animate__backInUp @endif">
                        <thead>
                            <tr>
                                <th width="25%">YARN TYPE</td>
                                <th width="25%">DENIER</td>
                                <th width="10%">CUT<br> LENGTH<br> (MM)</td>
                                <th width="20%">TYPE</td>
                                <th width="20%">COLOR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" class="fw-600">PSF</td>
                                <td>1.0,1.2</td>
                                <td rowspan="2">32,38,44,51</td>
                                <td rowspan="2">Virgin & Recycled</td>
                                <td>RW</td>
                            </tr>
                            <tr>
                                <td>1.4</td>
                                <td>DDB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section id="sec5">
        <ul class="row m-0">
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig" @endif>
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Polyester-Partially-Oriented-Yarn-landing-page-TPC-Thaipolyester.webp" alt="Polyester Partially Oriented Yarn TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Polyester-Partially-Oriented-Yarn-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Partially Oriented Yarn TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig @endif" data-wow-delay="0.1s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Draw-textured-Yarn-landing-page-TPC-Thaipolyester.webp" alt="Draw textured Yarn TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Draw-textured-Yarn-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Draw textured Yarn TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig @endif" data-wow-delay="0.2s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\desktop\Fully-Drawn-Yarn-Dope-Dyed-Black-landing-page-TPC-Thaipolyester.webp" alt="Fully Drawn Yarn Dope Dyed Black TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Fully-Drawn-Yarn-Dope-Dyed-Black-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Fully Drawn Yarn Dope Dyed Black TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig @endif" data-wow-delay="0.3s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Twisting-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" alt="Twisting Yarn Raw white TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Twisting-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Twisting Yarn Raw white TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig @endif" data-wow-delay="0.4s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Twisting-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" alt="Twisting Yarn Dope Dyed Black TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Twisting-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Twisting Yarn Dope Dyed Black TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig @endif" data-wow-delay="0.5s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Ring-Spun-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" alt="Ring Spun Yarn Raw white TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Ring-Spun-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun Yarn Raw white TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig @endif" data-wow-delay="0.6s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Open-End-Spun-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" alt="Open End Spun Yarn Dope Dyed Black TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Open-End-Spun-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Open End Spun Yarn Dope Dyed Black TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__fadeInLeftBig @endif" data-wow-delay="0.7s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Polyester-Staple-Fiber-landing-page-Raw-white-TPC-Thaipolyester.webp" alt="Polyester Staple Fiber Raw white TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Polyester-Staple-Fiber-landing-page-Raw-white-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber Raw white TPC Thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section id="sec6">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="theme-hl text-center m-auto">
                        Why not go with the right supplier?<br>
                        Who is always ready to provide you with<br>
                        superior products and services!
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <p class="p1 text-center m-auto">
                        You will have no risks using our products; the only risk you’d have is not choosing us.<br>
                        So don’t let your competitor get a better opportunity.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <a href="#sec15" id="get_free" title="Get Free Samples" class="text-center m-auto wow animate__bounce">GET FREE Samples</a>
                </div>
            </div>
        </div>
    </section>
    <section id="sec7">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center m-auto">
                        Two reasons why you can compete in the<br>
                        market with our service…
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <h2 class="red-hl text-center m-auto">
                        <span class="circle">1</span> 30% Higher profit
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <p class="p1 text-center m-auto">
                        We own a spinning mill and a knitting mill; that’s why the price is under our control. Also, the<br>
                        experience taught us that the more manufacturers invested with the right supplier, the more<br>
                        profitable they could gain.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col4">
                <div class="content_block d-flex pos-r">
                    <h2 class="red-hl text-center m-auto">
                        <span class="circle">2</span> We're top 3 in Thailand
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col5">
                <div class="content_block d-flex pos-r">
                    <p class="p1 text-center m-auto">
                        With our 80 years of experience, we can help you figure out solutions!<br>
                        We are certified by Intertek, GRS, and OEKO-tex standards.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sec8">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__bounceInUp @else animate__fadeInTopLeft @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Certificate-of-Registration-thaipolyester.webp" alt="Certificate of Registration thaipolyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Certificate-of-Registration-thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Certificate of Registration thaipolyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec9" class="bg-black">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="green-hl ml-0">
                        3 things will cause you to lose more money<br>
                        and waste more time if you trust the wrong supplier
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <div class="content_group ml-0">
                        <p class="p1">
                            <label class="green-hl">1. Disappointed in results</label> - When those unsatisfactory defects ruin your expectations.<br>
                            <label class="green-hl">2. You don't have the right supplier</label> - No one knows when investing in the wrong supplier.<br>
                            <label class="green-hl">3. Long lead-time</label> - can cause many damages, so where does that leave you?
                            The issues above will vanish because of our German technology!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec10">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <h2 class="red-hl text-center m-auto">
                        With Thai Polyester Company (TPC), you’ll get
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="sec11">
        <ul class="row m-0">
            <li class="col-xs-12 col-sm-12 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\desktop\A-reasonable-price-Thai-polyester.webp" alt="A reasonable price Thai polyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\A-reasonable-price-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="A reasonable price Thai polyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-12 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif" data-wow-delay="0.2s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\A-Shorter-lead-time-Thai-polyester.webp" alt="A Shorter lead time Thai polyesterr" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\A-Shorter-lead-time-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="A Shorter lead time Thai polyesterr" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-12 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif" data-wow-delay="0.4s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\A-wide-range-of-product-Thai-polyester.webp" alt="A wide range of product Thai polyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\A-wide-range-of-product-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="A wide range of product Thai polyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-12 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif" data-wow-delay="0.6s">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\No-more-supply-shortages-Thai-polyester.webp" alt="No more supply shortages Thai polyester" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\No-more-supply-shortages-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="No more supply shortages Thai polyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section id="sec12">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center m-auto">
                        Read what our customers have to say about us:
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="sec13">
        <ul class="row r1 m-0 d-flex">
            <li class="col-xs-12 col-sm-12 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__bounceInUp @else animate__bounceInUp @endif">
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Review-landing-page-TPC-1.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Review-landing-page-TPC-1.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-12 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__bounceInUp @else animate__bounceInUp @endif" @if(!$chkmo) data-wow-delay="0.1s" @endif>
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Review-landing-page-TPC-2.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Review-landing-page-TPC-2.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-12 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__bounceInUp @else animate__bounceInUp @endif" @if(!$chkmo) data-wow-delay="0.2s" @endif>
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Review-landing-page-TPC-3.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Review-landing-page-TPC-3.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-12 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__bounceInUp @else animate__bounceInUp @endif" @if(!$chkmo) data-wow-delay="0.3s" @endif>
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Review-landing-page-TPC-4.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Review-landing-page-TPC-4.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-12 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__bounceInUp @else animate__bounceInUp @endif" @if(!$chkmo) data-wow-delay="0.4s" @endif>
                        <picture>
                            <source srcset="\assets\images\landing\page1\mobile\Review-landing-page-TPC-5.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\desktop\Review-landing-page-TPC-5.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section id="sec14">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center m-auto">
                        THIS MAY BE THE MOST IMPORTANT<br>
                        DECISION YOU EVER MAKE
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                <div class="content_block pos-r">
                    <p class="p1">
                        Even after everything you have read about TPC, you may still be on the fence.<br>
                        At this point, you can go in 1 of 2 directions.<br>
                        <label class="theme-hl">1. You can try our product as a sample for FREE!</label><br>
                        <label class="theme-hl">2. You can ignore this offer and continue dealing with the problems above …</label><br>
                        The choice is clear.<br>
                        If you don't want to face with the above issues, give it a try, and you'll see how you can get a 30%<br>
                        higher profit!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sec15" class="bg-black">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <div class="content_group m-auto">
                        <h2 class="theme-hl text-center">
                            Get FREE SAMPLE<br>
                            Now!
                        </h2>
                        <form id="contact-form" data-request="landing-page" autocomplete="off">
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="NAME*">
                                <span class="text-danger name mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <input type="text" class="form-control" name="company" id="company" placeholder="COMPANY">
                                <span class="text-danger company mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-6 col-sm-6 col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL*">
                                <span class="text-danger email mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-6 col-sm-6 col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE*">
                                <span class="text-danger phone mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <textarea class="form-control" name="message" id="message" placeholder="MESSAGE" rows="5"></textarea>
                                <span class="text-danger message mb-font12"></span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div id="res" class="res"></div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="button" id="submitcontract" class="bt-contact">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec16" class="bg-gray">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center">
                        <i>Get in touch with us !</i>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row r2 m-0">
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="\assets\images\landing\page1\mobile\Icon-landing-page-TPC-Thai-Polyester-Phone.webp" alt="Phone" media="(max-width: 640px)" loading="lazy">
                                <img src="\assets\images\landing\page1\desktop\Icon-landing-page-TPC-Thai-Polyester-Phone.webp" width="900" height="350" class="img-fluid ab-img" alt="Phone" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Phone :</h3>
                        <div>
                            <a href="tel:+6634852371">+66 34 852371 to 2</a>
                        </div>
                        {{-- <p class="text-center">+66 34 852371 to 2</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="\assets\images\landing\page1\mobile\Icon-landing-page-TPC-Thai-Polyester-Email.webp" alt="Email" media="(max-width: 640px)" loading="lazy">
                                <img src="\assets\images\landing\page1\desktop\Icon-landing-page-TPC-Thai-Polyester-Email.webp" width="900" height="350" class="img-fluid ab-img" alt="Email" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Email :</h3>
                        <div>
                            <a href="mailto:support@thaipolyester.com">support@thaipolyester.com</a>
                        </div>
                        {{-- <p class="text-center">support@thaipolyester.com</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="\assets\images\landing\page1\mobile\Icon-landing-page-TPC-Thai-Polyester-Website.webp" alt="Website" media="(max-width: 640px)" loading="lazy">
                                <img src="\assets\images\landing\page1\desktop\Icon-landing-page-TPC-Thai-Polyester-Website.webp" width="900" height="350" class="img-fluid ab-img" alt="Website" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Website :</h3>
                        <div>
                            <a href="/" target="_blank">www.thaipolyester.com</a>
                        </div>
                        {{-- <p class="text-center">www.thaipolyester.com</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col4">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="\assets\images\landing\page1\mobile\Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" alt="Whatsapp" media="(max-width: 640px)" loading="lazy">
                                <img src="\assets\images\landing\page1\desktop\Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" width="900" height="350" class="img-fluid ab-img" alt="Whatsapp" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Whatsapp :</h3>
                        <div>
                            <a href="https://api.whatsapp.com/send/?phone=66639021369&text&app_absent=0" target="_blank">+66 63 902 1369</a>
                        </div>
                        {{-- <p class="text-center">+66 63 902 1369</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row r3 m-0">
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="\assets\images\landing\page1\mobile\Icon-landing-page-TPC-Thai-Polyester-Address.webp" alt="Address" media="(max-width: 640px)" loading="lazy">
                                <img src="\assets\images\landing\page1\desktop\Icon-landing-page-TPC-Thai-Polyester-Address.webp" width="900" height="350" class="img-fluid ab-img" alt="Address" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Address :</h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Head Office :</h3>
                        <p class="text-center">
                            470 Bangkuntien-Chaitaley<br>
                            Rd., Samaedum, Bangkuntien,<br>
                            Bangkok 10150 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Head Office Thai Polyester" href="/assets/images/contact/TPC Map-02.webp" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-02.webp">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Factory :</h3>
                        <p class="text-center">
                            888 Moo1, Highway 331 Km.65<br>
                            (Ban Nong Phai Kaeo), Ban Bung,<br>
                            Chonburi 20220 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Factory Thai Polyester" href="/assets/images/contact/TPC Map-03.webp" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-03.webp">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 p-0 col4">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Sales Office :</h3>
                        <p class="text-center">
                            Jongstit Park 99 Moo1,<br>
                            Soi Wat Phojae, Ekachai Rd.,<br>
                            Khaerai, Kratumban,<br>
                            Samutsakorn 74110 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Sale Office Office Thai Polyester" href="/assets/images/contact/TPC Map-01.webp" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-01.webp">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row r4 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <p class="p1 text-center m-auto">
                        copyr ight c 2019 Thai polyes ter Co. ,Ltd. Al l r ight s reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sec17" class="bg-gray">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center">
                        About US
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <p class="p1 m-auto">
                        Thai Polyester Company (TPC) was founded in 2001. We are a vertically integrated fiber polyester
                        manufacturer with a total capacity of 316,800 tons per year, utilizing innovative technology
                        worldwide. TPC is a registered company specializing in polyester yarn, fiber, and filament. We
                        export polyester yarn to a variety of countries. We use high-tech German machine in our process.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
    {{-- <script src="\lib\jquery-on-scrolled-to\on-scrolled-to.min.js"></script> --}}
    <script src="/lib/WOW-master/dist/wow.min.js"></script>
    <script>
        wow = new WOW({
            animateClass: 'animate__animated',
        })
        wow.init();
    </script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
    <script src="/js/landing/page/page1.js"></script>
@endsection
