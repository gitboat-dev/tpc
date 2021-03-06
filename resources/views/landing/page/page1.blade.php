@extends('landing.template')
@section('style')
    <link rel="stylesheet preload" href="/lib/animate/animate.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/page/page1.min.css?v={{ time() }}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','/assets/images/landing/page1/og-image/og-image.webp')
@section('content')
<div id="landing">
    <section id="sec1">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <div class="content_group m-auto text-center">
                        <p class="p1 wow animate__fadeIn">Growing your sales by</p>
                        <p class="p2 red-hl wow animate__bounceIn">30%</p>
                        <p class="p3 wow animate__fadeInUpBig">
                            with our high-efficiency polyester yarn and<br>
                            a modern German system
                        </p>
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
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/Ring-Spun-Process-Lindingpage-Thaipolyester.webp" alt="Ring Spun Process Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/Ring-Spun-Process-Lindingpage-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun Process Thaipolyester" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0 col1-2">
                        <div class="content_block">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC-1.webp" alt="Product Draw textured yarn Thai Polyester TPC" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC-1.webp" width="900" height="350" class="img-fluid ab-img" alt="Product Draw textured yarn Thai Polyester TPC" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6-5 p-0 col2">
                <div class="content_block">
                    <div class="img_block">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC.webp" alt="Product Draw textured yarn Thai Polyester TPC" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/landing-page-Product-Draw-textured-yarn-Thai-Polyester-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Product Draw textured yarn Thai Polyester TPC" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
    </section>
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
                    <table>
                        <tr>
                            <th width="23.5%">FIBER</td>
                            <th width="23.5%">DENIER</td>
                            <th width="15%">
                                CUT<br>
                                LENGTH<br>
                                (MM)
                            </td>
                            <th width="19%">TYPE</td>
                            <th width="19%">COLOR</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="fw-600">
                                <div class="img_block d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page1/mobile/Polyester-Staple-Fiber-landing-page-Raw-Black-TPC-Thaipolyester.webp" alt="PSF Virgin" media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/landing/page1/desktop/Polyester-Staple-Fiber-landing-page-Raw-Black-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Virgin" loading="lazy">
                                    </picture>
                                </div>
                                PSF Virgin
                            </td>
                            <td class="fw-600 text_focus">*1.0,1.2*</td>
                            <td rowspan="2">
                                32,38,<br>
                                44,51
                            </td>
                            <td rowspan="2">Virgin</td>
                            <td>RW</td>
                        </tr>
                        <tr>
                            <td>1.4</td>
                            <td>DDB</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="fw-600">
                                <div class="img_block d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page1/mobile/Polyester-Staple-Fiber-landing-page-Raw-white-TPC-Thaipolyester.webp" alt="PSF Recycled" media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/landing/page1/desktop/Polyester-Staple-Fiber-landing-page-Raw-white-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Recycled" loading="lazy">
                                    </picture>
                                </div>
                                PSF Recycled
                            </td>
                            <td class="fw-600 text_focus">*1.2*</td>
                            <td rowspan="2">
                                32,38,<br>
                                44,51
                            </td>
                            <td rowspan="2">Recycled</td>
                            <td>RW</td>
                        </tr>
                        <tr>
                            <td>1.4</td>
                            <td>DDB</td>
                        </tr>
                    </table>
                </div>
                <div class="content_block">
                    <table>
                        <thead>
                            <tr>
                                <th width="23.5%">YARN TYPE</td>
                                <th width="23.5%">D/F</td>
                                <th width="15%">LUSTER</td>
                                <th width="19%">TYPE</td>
                                <th width="19%">COLOR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="5" class="fw-600">
                                    <div class="img_block d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/landing/page1/mobile/Fully-Drawn-Yarn-Dope-Dyed-Black-landing-page-TPC-Thaipolyester.webp" alt="POY Partially Oriented Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/landing/page1/desktop/Fully-Drawn-Yarn-Dope-Dyed-Black-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="POY Partially Oriented Yarn Polyester Thaipolyester" loading="lazy">
                                        </picture>
                                    </div>
                                    Partially Oriented Yarn<br>(POY)
                                </td>
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
                                <td rowspan="4" class="fw-600">
                                    <div class="img_block d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/landing/page1/mobile/Draw-textured-Yarn-landing-page-TPC-Thaipolyester.webp" alt="Draw Textured Yarn" media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/landing/page1/desktop/Draw-textured-Yarn-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Draw textured Yarn" loading="lazy">
                                        </picture>
                                    </div>
                                    Draw Textured Yarn<br>(DTY)
                                </td>
                                <td>75/36,75/72,75/144</td>
                                <td rowspan="4">SD</td>
                                <td rowspan="4">Virgin & Recycled</td>
                                <td rowspan="4">RW,DDB,<br>DYED YARN</td>
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
                                <td rowspan="6" class="fw-600">
                                    <div class="img_block d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/landing/page1/mobile/Polyester-Partially-Oriented-Yarn-landing-page-TPC-Thaipolyester.webp" alt="Fully Drawn Yarn" media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/landing/page1/desktop/Polyester-Partially-Oriented-Yarn-landing-page-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Fully Drawn Yarn" loading="lazy">
                                        </picture>
                                    </div>
                                    Fully Drawn Yarn<br>(FDY)
                                </td>
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
                                <td rowspan="5" class="fw-600">
                                    <div class="img_block d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/landing/page1/mobile/Twisting-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" alt="Twisted Yarn (DTY)" media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/landing/page1/desktop/Twisting-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Twisted Yarn (DTY)" loading="lazy">
                                        </picture>
                                    </div>
                                    Twisted Yarn<br>(DTY)
                                </td>
                                <td>75/36/1 (Low - High Twisted)</td>
                                <td rowspan="5">SD</td>
                                <td rowspan="5">Virgin & Recycled</td>
                                <td rowspan="5">RW,DDB,<br>DYED YARN</td>
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
                                <td rowspan="3" class="fw-600">
                                    <div class="img_block d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/landing/page1/mobile/Twisting-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" alt="Twisted Yarn (FDY)" media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/landing/page1/desktop/Twisting-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Twisted Yarn (FDY)" loading="lazy">
                                        </picture>
                                    </div>
                                    Twisted Yarn<br>(FDY)
                                </td>
                                <td>75/36/1 (Low - High Twisted)</td>
                                <td rowspan="3">SD,TBR</td>
                                <td rowspan="3">Virgin & Recycled</td>
                                <td rowspan="3">RW,DDB,<br>DYED YARN</td>
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
                    <table>
                        <tr>
                            <th width="23.5%">YARN TYPE</td>
                            <th width="23.5%">NE</td>
                            <th width="15%">LUSTER</td>
                            <th width="19%">TYPE</td>
                            <th width="19%">COLOR</td>
                        </tr>
                        <tr>
                            <td rowspan="4" class="fw-600">
                                <div class="img_block d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page1/mobile/Open-End-Spun-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" alt="OE SPUN" media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/landing/page1/desktop/Open-End-Spun-Yarn-landing-page-Dope-Dyed-Black-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="OE SPUN" loading="lazy">
                                    </picture>
                                </div>
                                OE SPUN
                            </td>
                            <td>10/1,12/1,14/1</td>
                            <td rowspan="4">SD</td>
                            <td rowspan="4">Virgin & Recycled</td>
                            <td rowspan="4">RW,DDB,<br>MELANGE,<br>DYED YARN</td>
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
                            <td rowspan="5" class="fw-600">
                                <div class="img_block d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page1/mobile/Ring-Spun-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" alt="Ring Spun" media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/landing/page1/desktop/Ring-Spun-Yarn-landing-page-Raw-white-TPC-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun" loading="lazy">
                                    </picture>
                                </div>
                                RING SPUN
                            </td>
                            <td>18/1,20/1</td>
                            <td rowspan="5">SD</td>
                            <td rowspan="5">Virgin & Recycled</td>
                            <td rowspan="5">RW,DDB,<br>MELANGE,<br>DYED YARN</td>
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
            </div>
        </div>
    </section>
    <section id="sec6">
        <ul class="row m-0">
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{{ route('product.psf') }}" title="PSF Polyester Staple Fiber" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester.webp?v={{time()}}" alt="Polyester Partially Oriented Yarn TPC Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester.webp?v={{time()}}" alt="PSF Polyester Staple Fiber Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">PSF</label>
                                    <small class="d-block text-center fw-600">(Polyester Staple Fiber)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{{ route('product.dty') }}" title="DTY Draw Textured Yarn Polyester" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" alt="DTY Draw Textured Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="DTY Draw Textured Yarn Polyester Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">DTY</label>
                                    <small class="d-block text-center fw-600">(Draw Textured Yarn)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{{ route('product.poy') }}" title="POY Partially Oriented Yarn Polyester" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/POY-Partially-Oriented-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" alt="POY Partially Oriented Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/POY-Partially-Oriented-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="POY Partially Oriented Yarn Polyester Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">POY</label>
                                    <small class="d-block text-center fw-600">(Partially Oriented Yarn)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{{ route('product.fdy') }}" title="FDY Fully Drawn Yarn Polyester" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" alt="FDY Fully Drawn Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="FDY Fully Drawn Yarn Polyester Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">FDY</label>
                                    <small class="d-block text-center fw-600">(Fully Drawn Yarn)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{{ route('product.twisted-yarn') }}" title="Twisted Yarn DTY polyester" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/Twist-Yarn-DTY-polyester-Thaipolyester.webp?v={{time()}}" alt="Twisted Yarn DTY polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/Twist-Yarn-DTY-polyester-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Twisted Yarn DTY polyester Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">Twisted Yarn</label>
                                    <small class="d-block text-center fw-600">(DTY)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{{ route('product.twisted-yarn') }}" title="Twist Yarn FDY polyester" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/Twist-Yarn-FDY-polyester-Thaipolyester.webp?v={{time()}}" alt="Twist Yarn FDY polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/Twist-Yarn-FDY-polyester-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Twist Yarn FDY polyester Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">Twisted Yarn</label>
                                    <small class="d-block text-center fw-600">(FDY)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{!!url('/open-end')!!}" title="OE Open End Spun Yarn Polyester" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/OE-Open-End-Spun-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" alt="OE Open End Spun Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/OE-Open-End-Spun-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="OE Open End Spun Yarn Polyester Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">Open End</label>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-1-5 p-0">
                <div class="content_block">
                    <div class="img_block">
                        <a href="{{ route('product.ring-spun') }}" title="Ring Spun Yarn Polyester" target="_blank">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/Ring-Spun-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" alt="Ring Spun Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/Ring-Spun-Yarn-Polyester-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun Yarn Polyester Thaipolyester" loading="lazy">
                            </picture>
                            <div class="content_group d-flex pos-ab w-100p h-100p bottom-0">
                                <div class="prod_name m-auto w-100p">
                                    <label class="d-block text-center">Ring Spun</label>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section id="sec5" class="bg-black">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <div class="content_group m-auto text-center">
                        <h2 class="green-hl animate_flashing2">???PSF???</h2>
                        <h3 class="green-hl">
                            Our BEST SELLING
                            <div class="img_block d-inline-b">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/Icon-Best-TPC.webp" alt="Recommended item" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/Icon-Best-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Recommended item" loading="lazy">
                                </picture>
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                <div class="content_block">
                    <table>
                        <thead>
                            <tr>
                                <th width="21.5%">YARN TYPE</td>
                                <th width="21.5%">DENIER</td>
                                <th width="22%">CUT<br> LENGTH<br> (MM)</td>
                                <th width="17.5%">TYPE</td>
                                <th width="17.5%">COLOR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" class="fw-600">PSF<br>Virgin</td>
                                <td class="td-white fw-600 psf-font-1">*1.0,1.2*</td>
                                <td rowspan="2">32,38,44,51</td>
                                <td rowspan="2">Virgin</td>
                                <td>RW</td>
                            </tr>
                            <tr>
                                <td class="psf-font-2">1.4</td>
                                <td>DDB</td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="fw-600">PSF<br>Recycled</td>
                                <td class="td-white fw-600 psf-font-1">*1.2*</td>
                                <td rowspan="2">32,38,44,51</td>
                                <td rowspan="2">Recycled</td>
                                <td>RW</td>
                            </tr>
                            <tr>
                                <td class="psf-font-2">1.4</td>
                                <td>DDB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <p class="p1 m-auto text-center">
                        Our high-quality product can produce premium yarn grades, the color can be customized and
                        we are trusted by spinning mills all over the world.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col4 psf-image">
                <div class="col-xs-12 col-sm-12 col-md-4-5 p-0">
                    <ul class="row m-0 p-0">
                        <li class="col-xs-6 col-sm-6 col-md-6 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-White.webp" alt="PSF Polyester Staple Fiber Thaipolyester White" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-White.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester White" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-6 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Black.webp" alt="PSF Polyester Staple Fiber Thaipolyester Black" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Black.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester Black" loading="lazy">
                                </picture>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3-75 p-0">
                    <ul class="row m-0 p-0">
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Grey.webp" alt="PSF Polyester Staple Fiber Thaipolyester Grey" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Grey.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester Grey" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Light-Grey.webp" alt="PSF Polyester Staple Fiber Thaipolyester Light Grey" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Light-Grey.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester Light Grey" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Brown.webp" alt="PSF Polyester Staple Fiber Thaipolyester Brown" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Brown.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester Brown" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue-3.webp" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue-3.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue-2.webp" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue-2.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue-1.webp" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue-1.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" loading="lazy">
                                </picture>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3-75 p-0">
                    <ul class="row m-0 p-0">
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-magenta.webp" alt="PSF Polyester Staple Fiber Thaipolyester magenta" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-magenta.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester magenta" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Orenge.webp" alt="PSF Polyester Staple Fiber Thaipolyester Orenge" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Orenge.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester Orenge" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Pink.webp" alt="PSF Polyester Staple Fiber Thaipolyester Pink" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Pink.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester Pink" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-blue.webp" alt="PSF Polyester Staple Fiber Thaipolyester blue" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-blue.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester blue" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue.webp" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-sea-blue.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester sea blue" loading="lazy">
                                </picture>
                            </div>
                        </li>
                        <li class="col-xs-4 col-sm-4 col-md-4 p-0">
                            <div class="img_block">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Green.webp" alt="PSF Polyester Staple Fiber Thaipolyester Green" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/PSF-Polyester-Staple-Fiber-Thaipolyester-Green.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester Green" loading="lazy">
                                </picture>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="sec7">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="theme-hl text-center m-auto">
                        Why not go with the right supplier<br>
                        to provide you with superior<br>
                        products and services?
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <p class="p1 text-center m-auto">
                        You will have no risks using our products; the only risk you???d have is not choosing us.<br>
                        So don???t let your competitor get a better opportunity.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <a href="#sec16" id="get_free" title="Get Free Samples" class="text-center m-auto animate_flashing1">GET FREE Samples</a>
                </div>
            </div>
        </div>
    </section>
    <section id="sec8">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center m-auto">
                        Three reasons why you can compete<br>
                        in the market with our product???
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
                        We own a spinning mill and a knitting mill; that???s why the price is under our control. Also, the<br>
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
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col6">
                <div class="content_block d-flex pos-r">
                    <h2 class="red-hl text-center m-auto">
                        <span class="circle">3</span> Our Services
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="sec9">
        <div class="row r1 m-0">
            <div class="content_block pos-r d-flex">
                <div class="col-xs-6 col-sm-6 col-md-4-25 p-0 col1">
                    <div class="img_block d-flex">
                        <a href="/assets/images/landing/page1/desktop/new-image/intertek-Certificate-of-Registration-thaipolyester.webp" title="intertek Certificate of Registration thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page1/desktop/new-image/intertek-Certificate-of-Registration-thaipolyester.webp">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/intertek-Certificate-of-Registration-thaipolyester.webp" alt="intertek Certificate of Registration thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/intertek-Certificate-of-Registration-thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="intertek Certificate of Registration thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3-5 p-0 col2">
                    {{-- <div class="col-xs-4 col-sm-4 col-md-12 p-0">
                        <div class="img_block d-flex">
                            <a href="/assets/images/landing/page1/desktop/new-image/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp" title="Global Recycled standard 100%Recycled Polyester Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page1/desktop/new-image/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp" alt="Global Recycled standard 100%Recycled Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Global Recycled standard 100%Recycled Polyester Thaipolyester" loading="lazy">
                                </picture>
                            </a>
                        </div>
                    </div> --}}
                    <div class="col-xs-4 col-sm-4 col-md-12 p-0">
                        <div class="img_block d-flex">
                            <a href="/assets/images/landing/page1/desktop/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp" title="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page1/desktop/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-12 p-0">
                        <div class="img_block d-flex">
                            <a href="/assets/images/landing/page1/desktop/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp" title="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page1/desktop/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp">
                                <picture>
                                    <source srcset="/assets/images/landing/page1/mobile/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page1/desktop/new-image/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp" width="900" height="350" class="img-fluid ab-img" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4-25 p-0 col3">
                    <div class="img_block d-flex">
                        <a href="/assets/images/landing/page1/desktop/new-image/Green-industry-Activty-Thaipolyester.webp" title="Green industry Activty Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page1/desktop/new-image/Green-industry-Activty-Thaipolyester.webp">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/new-image/Green-industry-Activty-Thaipolyester.webp" alt="Green industry Activty Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/new-image/Green-industry-Activty-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Green industry Activty Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec10" class="bg-black">
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
    <section id="sec11">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <h2 class="red-hl text-center m-auto wow @if($chkmo) animate__fadeInUpBig @else animate__zoomInLeft @endif">
                        With Thai Polyester Company (TPC), you???ll get
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="sec12">
        <ul class="row m-0">
            <li class="col-xs-3 col-sm-3 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif">
                        <picture>
                            <source srcset="/assets/images/landing/page1/desktop/A-reasonable-price-Thai-polyester.webp" alt="A reasonable price Thai polyester" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/A-reasonable-price-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="A reasonable price Thai polyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif" data-wow-delay="0.2s">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/A-Shorter-lead-time-Thai-polyester.webp" alt="A Shorter lead time Thai polyesterr" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/A-Shorter-lead-time-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="A Shorter lead time Thai polyesterr" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif" data-wow-delay="0.4s">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/A-wide-range-of-product-Thai-polyester.webp" alt="A wide range of product Thai polyester" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/A-wide-range-of-product-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="A wide range of product Thai polyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-3 col-sm-3 col-md-3">
                <div class="content_block pos-r">
                    <div class="img_block wow @if($chkmo) animate__backInUp @else animate__flipInX @endif" data-wow-delay="0.6s">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/No-more-supply-shortages-Thai-polyester.webp" alt="No more supply shortages Thai polyester" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/No-more-supply-shortages-Thai-polyester.webp" width="900" height="350" class="img-fluid ab-img" alt="No more supply shortages Thai polyester" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section id="sec13">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center m-auto">
                        Our Testimonials
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="sec14">
        <ul class="row r1 m-0 d-flex">
            <li class="col-xs-12 col-sm-6 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/Review-landing-page-TPC-1.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/Review-landing-page-TPC-1.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/Review-landing-page-TPC-2.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/Review-landing-page-TPC-2.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/Review-landing-page-TPC-3.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/Review-landing-page-TPC-3.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/Review-landing-page-TPC-4.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/Review-landing-page-TPC-4.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-6">
                <div class="content_block pos-r">
                    <div class="img_block">
                        <picture>
                            <source srcset="/assets/images/landing/page1/mobile/Review-landing-page-TPC-5.webp" alt="Review" media="(max-width: 640px)" loading="lazy">
                            <img src="/assets/images/landing/page1/desktop/Review-landing-page-TPC-5.webp" width="900" height="350" class="img-fluid ab-img" alt="Review" loading="lazy">
                        </picture>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section id="sec15">
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
                        <label class="theme-hl">2. You can ignore this offer and continue dealing with the problems above ???</label><br>
                        The choice is clear.<br>
                        If you don't want to face with the above issues, just try, and <b>you'll see how you can get a 30%<br>
                        higher profit!</b>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sec16" class="bg-black">
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
    <section id="sec17" class="bg-gray">
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
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/Icon-landing-page-TPC-Thai-Polyester-Phone.webp" alt="Phone" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/Icon-landing-page-TPC-Thai-Polyester-Phone.webp" width="900" height="350" class="img-fluid ab-img" alt="Phone" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Phone :</h3>
                        <div>
                            <a href="tel:+6634852371">+66 34 852371 to 2</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/Icon-landing-page-TPC-Thai-Polyester-Email.webp" alt="Email" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/Icon-landing-page-TPC-Thai-Polyester-Email.webp" width="900" height="350" class="img-fluid ab-img" alt="Email" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Email :</h3>
                        <div>
                            <a href="mailto:support@thaipolyester.com">support@thaipolyester.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/Icon-landing-page-TPC-Thai-Polyester-Website.webp" alt="Website" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/Icon-landing-page-TPC-Thai-Polyester-Website.webp" width="900" height="350" class="img-fluid ab-img" alt="Website" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Website :</h3>
                        <div>
                            <a href="/" target="_blank">www.thaipolyester.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col4">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" alt="Whatsapp" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" width="900" height="350" class="img-fluid ab-img" alt="Whatsapp" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Whatsapp :</h3>
                        <div>
                            <a href="https://api.whatsapp.com/send/?phone=66639021369&text&app_absent=0" target="_blank">+66 63 902 1369</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row r3 m-0">
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page1/mobile/Icon-landing-page-TPC-Thai-Polyester-Address.webp" alt="Address" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/landing/page1/desktop/Icon-landing-page-TPC-Thai-Polyester-Address.webp" width="900" height="350" class="img-fluid ab-img" alt="Address" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Address :</h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Head Office :</h3>
                        <p class="text-center">
                            470 Bangkuntien-Chaitaley<br>
                            Rd., Samaedum, Bangkuntien,<br>
                            Bangkok 10150 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Head Office Thai Polyester" href="/assets/images/contact/TPC Map-02.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-02.webp?v={{time()}}">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Factory :</h3>
                        <p class="text-center">
                            888 Moo1, Highway 331 Km.65<br>
                            (Ban Nong Phai Kaeo), Ban Bung,<br>
                            Chonburi 20220 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Factory Thai Polyester" href="/assets/images/contact/TPC Map-03.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-03.webp?v={{time()}}">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col4">
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
                            <a class="a-map" title="Map Sale Office Office Thai Polyester" href="/assets/images/contact/TPC Map-01.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-01.webp?v={{time()}}">
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
    <section id="sec18" class="bg-gray">
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
    <script src="/lib/WOW-master/dist/wow.min.js"></script>
    <script>
        wow = new WOW({
            animateClass: 'animate__animated',
        })
        wow.init();
    </script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
    <script src="/js/landing/page/page1.min.js?v={{ time() }}"></script>
@endsection
