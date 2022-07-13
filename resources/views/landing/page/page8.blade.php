@extends('landing.template')
@section('style')
    <link rel="preload stylesheet" href="/css/landing/page/page8.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/sliding_door/sliding_door.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','/assets/images/landing/page8/desktop/polyester-Knitting-mills-Thaipolyester.webp')
@section('content')
<div id="landing">
    <section id="sec1" class="pos-r">
        <div class="wrapper">
            <video autoplay muted loop playsinline id="video1" poster="">
                <source src="/assets/images/landing/page8/video/Landing Page TPC4.mp4" type="video/mp4">
            </video>
        </div>
        <div class="pos-ab w-100p h-100p top-0 left-0 d-flex">
            <div class="row m-0 w-100p h-100p">
                <div class="col-xs-12 col-sm-6 col-md-5 d-flex h-100p col-h1">
                    <div class="head-content h-100p d-flex">
                        <div class="content m-auto">
                            <h1 class="head-title fw-bold">
                                TPC,<br>
                                your Polyester<br>
                                Destination
                            </h1>
                            <div class="head-desc">
                                <p>
                                    - Exporting Polyester Fiber and Yarn to
                                    over 70 countries all around the world.<br>
                                    - Our total capacity of Fiber, Yarn and
                                    Filament is around 350,000 tons annually.
                                </p>
                            </div>
                            <div class="head-btn">
                                <a href="#sec8" title="contact us" class="ml-0">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec2" class="pos-r">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold sec2-title">
                        <span class="m-tl0">
                            Here’s a thing you have been dealing with
                        </span>
                    </h2>
                    <h3 class="text-center fw-bold theme-hl sec2-sub-title">Low Consistency?</h3>
                    <h3 class="text-center fw-bold theme-hl sec2-sub-title">Low Yarn Quality?</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="sec3" class="pos-r">
        <div class="container">
            <div class="text-slide-block pos-r d-flex" data-current="1" data-slide="5" data-time="5000">
                <h1 class="sec3-title red-hl text-slide">No worries</h1>
            </div>
        </div>
        <div class="slide">
            <div class="owl-carousel owl-theme">
                <div class="item p-0 pos-r">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Thaipolyester-1.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Thaipolyester-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                        </picture>
                    </div>
                    <div class="d-flex pos-ab top-0 left-0 w-100p h-100p bg-black-opa slide-content active">
                        <div class="row m-0 d-flex m-auto w-100p h-100p">
                            <div class="col-xs-12 col-sm-12 col-md-12 d-flex m-auto">
                                <div class="content m-auto">
                                    <div class="content_group">
                                        <h3 class="slide-title text-center">
                                            Our Zimmer, Nuemag and<br>
                                            Barmag machines serve stabilities<br>
                                            (top machines in the world)
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-0 pos-r">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Thaipolyester-2.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Thaipolyester-2.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                        </picture>
                    </div>
                    <div class="d-flex pos-ab top-0 left-0 w-100p h-100p bg-black-opa slide-content">
                        <div class="row m-0 d-flex m-auto w-100p h-100p">
                            <div class="col-xs-12 col-sm-12 col-md-12 d-flex m-auto">
                                <div class="content m-auto">
                                    <div class="content_group">
                                        <h3 class="slide-title text-center">
                                            For raw material<br>
                                            testing, we have<br>
                                            3 tanks of PTA silo
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-0 pos-r">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Thaipolyester-3.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Thaipolyester-3.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                        </picture>
                    </div>
                    <div class="d-flex pos-ab top-0 left-0 w-100p h-100p bg-black-opa slide-content">
                        <div class="row m-0 d-flex m-auto w-100p h-100p">
                            <div class="col-xs-12 col-sm-12 col-md-12 d-flex m-auto">
                                <div class="content m-auto">
                                    <div class="content_group">
                                        <h3 class="slide-title text-center">
                                            A perfect PET flakes<br>
                                            washing line
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-0 pos-r">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Thaipolyester-5.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Thaipolyester-5.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                        </picture>
                    </div>
                    <div class="d-flex pos-ab top-0 left-0 w-100p h-100p bg-black-opa slide-content">
                        <div class="row m-0 d-flex m-auto w-100p h-100p">
                            <div class="col-xs-12 col-sm-12 col-md-12 d-flex m-auto">
                                <div class="content m-auto">
                                    <div class="content_group">
                                        <h3 class="slide-title text-center">
                                            Well-organised<br>
                                            production process
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-0 pos-r">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Thaipolyester-7.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Thaipolyester-7.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="polyester Yarn process Thaipolyester">
                        </picture>
                    </div>
                    <div class="d-flex pos-ab top-0 left-0 w-100p h-100p bg-black-opa slide-content">
                        <div class="row m-0 d-flex m-auto w-100p h-100p">
                            <div class="col-xs-12 col-sm-12 col-md-12 d-flex m-auto">
                                <div class="content m-auto">
                                    <div class="content_group">
                                        <h3 class="slide-title text-center">
                                            And we own<br>
                                            a Spinning mill too!
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec4" class="pos-r">
        <div class="container">
            <h2 class="text-center sec4-desc">
                No matter what kind of POLYESTER,<br>
                <span class="fw-bold sec4-title">we have it ALL</span> – both Virgin and <span class="theme-hl">Recycled</span> version
            </h2>
            <div class="row r1 m-0">
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door poy">
                    <div class="sliding_icon_right">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/ICON-1.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/ICON-1.webp" alt="POY" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Partially Oriented Yarn – POY</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    It’s produced by melting and
                                    extruding a polyester chip or
                                    flake, making directly from
                                    PTA and MEG by spinning
                                    and take-up, and it's
                                    primarily used in texturizing
                                    to create textured yarn
                                    (DTY).
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-POY-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-POY-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Partially Oriented Yarn - POY
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door fdy">
                    <div class="sliding_icon_right">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/ICON-1.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/ICON-1.webp" alt="FDY" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Fully Drawn Yarn – FDY</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    It’s a highly drawn and
                                    capable of producing
                                    high-strength fabrics and
                                    also known as Polyester
                                    Filament Yarn (PFY) or Spin
                                    Draw Yarn (SDY). FDY is
                                    commonly used as a weft
                                    and weave fabric, it can also
                                    be knitted and woven with
                                    other filament yarn.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-FDY-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-FDY-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Fully Drawn Yarn – FDY
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door dty">
                    <div class="sliding_icon_right_m_converse">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/ICON-2.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/ICON-2.webp" alt="DTY" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right_m_converse">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Draw Textured Yarn – DTY</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    Is a filament yarn with a
                                    soft crimp, a high bulky
                                    textured with a soft
                                    cottony feel, and high
                                    durability. Draw Textured
                                    Yarn (DTY) yarn is
                                    obtained when Polyester
                                    POY is simultaneously
                                    twisted & drawn.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-DTY-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-DTY-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Draw Textured Yarn – DTY
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door ty">
                    <div class="sliding_icon_right_m_converse">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/ICON-4.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/ICON-4.webp" alt="Twisted yarn" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right_m_converse">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Twisted yarn</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    The process by which fibers
                                    are arranged around the
                                    axis of yarn is called yarn
                                    twist. It imparts strength to
                                    the yarn.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Twisted-Yarn-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Twisted-Yarn-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Twisted yarn
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door ddb">
                    <div class="sliding_icon_right">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/ICON-1.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/ICON-1.webp" alt="Dope Dyed Black" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Dope Dyed Black</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    Is made by incorporating a
                                    masterbatch colorant into
                                    the polymer melt during the
                                    spinning or extrusion
                                    process. As a result, fully
                                    pigmented fibers and
                                    filaments emerge from the
                                    spinnerets in a single step.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Dope-Dyed-Black-Thaipolyester-1.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Dope-Dyed-Black-Thaipolyester-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Dope Dyed Black
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door psf">
                    <div class="sliding_icon_right">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/Icon-5.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/Icon-5.webp" alt="PSF" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Polyester Staple Fiber – PSF</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    directly from PTA & MEG or
                                    PET, with various uses in the
                                    textile, automotive and
                                    furniture industries. "Staple
                                    Fiber" often refers to natural
                                    fiber such as cotton or wool.
                                    Product table charge
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-PSF-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-PSF-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Polyester Staple Fiber – PSF
                            </div>
                        </div>
                    </div>


                    {{-- <div class="border_animation_tb">
                        <div class="border_animation_icon">
                            <div class="border_icon">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/Icon-5.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page8/desktop/Icon-5.webp" alt="PSF" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="wins d-flex w-100p">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Polyester Staple Fiber – PSF</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    directly from PTA & MEG or
                                    PET, with various uses in the
                                    textile, automotive and
                                    furniture industries. "Staple
                                    Fiber" often refers to natural
                                    fiber such as cotton or wool.
                                    Product table charge
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-PSF-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-PSF-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Polyester Staple Fiber – PSF
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door ring">
                    <div class="sliding_icon_right_m_converse">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/ICON-3.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/ICON-3.webp" alt="PSF" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right_m_converse">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">Ring spun</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    Ring spinning is a method of
                                    spinning textile fibers to
                                    make a yarn. This
                                    process provides a soft
                                    desirable fabric.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-Ring-Spun-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-Ring-Spun-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                Ring spun
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 p-0 d-flex sliding_door oe">
                    <div class="sliding_icon_right_m_converse">
                        <div class="sliding_icon">
                            <picture>
                                <source srcset="/assets/images/landing/page8/mobile/ICON-3.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page8/desktop/ICON-3.webp" alt="OE spun" width="900" height="350" class="img-fluid" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="sliding_door_container d-flex w-100p">
                        <div class="sliding_block_right_m_converse">
                            <div class="sliding_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">OE spun</span>
                                </label>
                            </div>
                            <div class="sliding_content">
                                <p class="m-tl2">
                                    Open-end spinning is a
                                    technology for creating yarn
                                    without using a
                                    spindle.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-OE-Spun-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-OE-Spun-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                OE spun
                            </div>
                        </div>
                    </div>


                    {{-- <div class="border_animation_tb">
                        <div class="border_animation_icon">
                            <div class="border_icon">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/ICON-3.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page8/desktop/ICON-3.webp" alt="OE spun" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="wins d-flex w-100p">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="m-0 fw-n">
                                    <span class="m-tl1">OE spun</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    Open-end spinning is a
                                    technology for creating yarn
                                    without using a
                                    spindle.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="img_block d-flex w-100p">
                                <picture>
                                    <source srcset="/assets/images/landing/page8/mobile/polyester-Yarn-process-OE-Spun-Thaipolyester.webp?v={{time()}}" media="(max-width: 991px)">
                                    <img src="/assets/images/landing/page8/desktop/polyester-Yarn-process-OE-Spun-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                </picture>
                            </div>
                            <div class="caption tl m-tl2 text-center fw-600" style="margin-top: 10px;">
                                OE spun
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="btn text-center w-100p">
                <a href="#sec8" title="get FRFREE QUOTE" class="move_to">
                    get a FREE QUOTE
                </a>
            </div>
        </div>
    </section>
    <section id="sec5" class="pos-r">
        <div class="slide bg-black">
            <div class="owl-carousel owl-theme d-flex">
                <div class="item p-0">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h2 class="text-center sec5-title">
                                    We Guarantee!
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-0 pos-r">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/polyester-Spinning-mills-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/polyester-Spinning-mills-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="polyester Spinning mills Thaipolyester">
                        </picture>
                    </div>
                    <div class="d-flex pos-ab top-0 left-0 w-100p h-100p">
                        <div class="container m-auto">
                            <div class="row m-0 d-flex">
                                <div class="col-xs-12 col-sm-9 col-md-10 p-0 d-flex m-auto">
                                    <div class="content ml-0">
                                        <div class="content_group">
                                            <h2 class="sec5-title">Spinning mills</h2>
                                            <h3 class="sec5-sub-title">
                                                - High efficiency<br>
                                                - Yarn strength<br>
                                                - Low Oligomer
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-0 pos-r">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/polyester-Knitting-mills-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/polyester-Knitting-mills-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="polyester Knitting mills Thaipolyester">
                        </picture>
                    </div>
                    <div class="d-flex pos-ab top-0 left-0 w-100p h-100p">
                        <div class="container m-auto">
                            <div class="row m-0 d-flex">
                                <div class="col-xs-12 col-sm-9 col-md-10 p-0 d-flex m-auto">
                                    <div class="content ml-0">
                                        <div class="content_group">
                                            <h2 class="sec5-title">Knitting mills</h2>
                                            <h3 class="sec5-sub-title">
                                                - Dyeing consistency<br>
                                                - Dyeing ability<br>
                                                - Stable moisture<br>
                                                - Stable OPU
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec6" class="pos-r">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold sec6-title">
                        <span class="m-tl0">
                            Our Customer Satisfaction
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="owl-carousel owl-theme">
                <div class="item text-center p-0">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/landing-page-V4-1.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/landing-page-V4-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                        </picture>
                    </div>
                    <div class="pos-ab d-flex w-100p h-100p top-0 left-0">
                        <div class="row m-0 d-flex m-auto w-100p">
                            <div class="col-xs-6 col-sm-6 col-md-6 p-0 m-auto">
                                <div class="img_block d-flex w-100p">
                                    <picture class="mr-0">
                                        <source srcset="/assets/images/landing/page8/mobile/3.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page8/desktop/3.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 m-auto">
                                <h2 class="theme-hl text-center item-title">
                                    "A very quick<br>
                                    response from<br>
                                    enthusiastic<br>
                                    salesperson"
                                </h2>
                                <p class="item-desc">
                                    Mirza Md. Shahadat Hossain , Rubel<br>
                                    CEO Shazman Trade International
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item text-center p-0">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/landing-page-V4-2.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/landing-page-V4-2.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                        </picture>
                    </div>
                    <div class="pos-ab d-flex w-100p h-100p top-0 left-0">
                        <div class="row m-0 d-flex m-auto w-100p">
                            <div class="col-xs-6 col-sm-6 col-md-6 p-0 m-auto">
                                <div class="img_block d-flex w-100p">
                                    <picture class="mr-0">
                                        <source srcset="/assets/images/landing/page8/mobile/1.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page8/desktop/1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 m-auto">
                                <h2 class="theme-hl text-center item-title">
                                    “Can’t believe that<br>
                                    TPC also gave us a<br>
                                    technical problem<br>
                                    solving”
                                </h2>
                                <p class="item-desc">
                                    Mr. Gopal ,Purchasing Manager<br>
                                    Comilla spinning mills LTD (united Group)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item text-center p-0">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/landing-page-V4-3.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/landing-page-V4-3.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                        </picture>
                    </div>
                    <div class="pos-ab d-flex w-100p h-100p top-0 left-0">
                        <div class="row m-0 d-flex m-auto w-100p">
                            <div class="col-xs-6 col-sm-6 col-md-6 p-0 m-auto">
                                <div class="img_block d-flex w-100p">
                                    <picture class="mr-0">
                                        <source srcset="/assets/images/landing/page8/mobile/2.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page8/desktop/2.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 m-auto">
                                <h2 class="theme-hl text-center item-title">
                                    "A long-term<br>
                                    supply with stable<br>
                                    quality that we<br>
                                    appreciate the<br>
                                    most"
                                </h2>
                                <p class="item-desc">
                                    MNH GLOBAL CO., LTD, KOREA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item text-center p-0">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/landing-page-V4-4.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/landing-page-V4-4.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                        </picture>
                    </div>
                    <div class="pos-ab d-flex w-100p h-100p top-0 left-0">
                        <div class="row m-0 d-flex m-auto w-100p">
                            <div class="col-xs-6 col-sm-6 col-md-6 p-0 m-auto">
                                <div class="img_block d-flex w-100p">
                                    <picture class="mr-0">
                                        <source srcset="/assets/images/landing/page8/mobile/4.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page8/desktop/4.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 m-auto">
                                <h2 class="theme-hl text-center item-title">
                                    "High technology<br>
                                    German<br>
                                    machine is one of<br>
                                    my favourite"<br>
                                </h2>
                                <p class="item-desc">
                                    Mr. Rahman, SR-Tex BD LTD.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item text-center p-0">
                    <div class="img_block w-100p">
                        <picture>
                            <source srcset="/assets/images/landing/page8/mobile/landing-page-V4-5.webp?v={{time()}}" media="(max-width: 640px)">
                            <img src="/assets/images/landing/page8/desktop/landing-page-V4-5.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                        </picture>
                    </div>
                    <div class="pos-ab d-flex w-100p h-100p top-0 left-0">
                        <div class="row m-0 d-flex m-auto w-100p">
                            <div class="col-xs-6 col-sm-6 col-md-6 p-0 m-auto">
                                <div class="img_block d-flex w-100p">
                                    <picture class="mr-0">
                                        <source srcset="/assets/images/landing/page8/mobile/5.webp?v={{time()}}" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page8/desktop/5.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Thaipolyester">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 m-auto">
                                <h2 class="theme-hl text-center item-title">
                                    “Always get a<br>
                                    promotional<br>
                                    price on selected<br>
                                    item”
                                </h2>
                                <p class="item-desc">
                                    MR.AAMIR TARIQ (CEO)
                                    Noor Enterprises, Pakistan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec7" class="pos-r">
        <div class="container">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="text-center fw-bold">
                        <span class="m-tl0">
                            Our Certifications
                        </span>
                    </h2>
                </div>
            </div>
            <div class="row r2 m-0 d-flex">
                <div class="col-xs-6 col-sm-6 col-md-4 p-0 col1">
                    <div class="img_block w-100p">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 p-0 col2 d-flex flex-c">
                    <div class="img_block w-100p m-auto">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                    <div class="img_block w-100p m-auto">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 p-0 col3">
                    <div class="img_block w-100p">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec8" class="pos-r bg-black">
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
                                <input type="text" class="form-control" name="company" id="company" placeholder="COMPANY*">
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
    <section id="sec9" class="pos-r bg-gray">
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
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Phone.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Phone.webp" width="900" height="350" class="img-fluid" alt="Phone" loading="lazy">
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
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Email.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Email.webp" width="900" height="350" class="img-fluid" alt="Email" loading="lazy">
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
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Website.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Website.webp" width="900" height="350" class="img-fluid" alt="Website" loading="lazy">
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
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" width="900" height="350" class="img-fluid ab-img" alt="Whatsapp" loading="lazy">
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
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Address.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Address.webp" width="900" height="350" class="img-fluid" alt="Address" loading="lazy">
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
                        copyright © 2019 Thai Polyester Co. ,Ltd. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sec10" class="pos-r bg-gray">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold sec10-title">
                        <span class="tl0 m-tl0">
                            About US
                        </span>
                    </h2>
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
<script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/js/landing/page/page8.min.js?v={{time()}}"></script>
<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{time()}}"></script>
@endsection
