@extends('landing.template')
@section('style')
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/page/page4.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/spin_hover/spin.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/window_slide/wins.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','/assets/images/landing/page4/desktop/polyester-Spinning-mills-Thaipolyester.webp')
@section('content')
    <div id="landing">
        <section id="sec1" class="bg-black">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-5 p-0 col1">
                    <div class="content_block d-flex">
                        <div class="content_group m-auto">
                            <h1 class="fw-bold">
                                TPC,<br>
                                your Polyester<br>
                                Destination
                            </h1>
                            <p class="h2 default">
                                <span class="tl1 m-tl1">
                                    - Exporting Polyester Fiber and Yarn to
                                    over 70 countries all around the world.<br>
                                    - Our total capacity of Fiber, Yarn and
                                    Filament is around 350,000 tons annually.
                                </span>
                            </p>
                            <div class="btn desktop">
                                <a href="#sec9" title="contact us" class="btn-contact move_to">
                                    contact us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 p-0 col2">
                    <div class="content_block d-flex">
                        <div class="content_group m-auto">
                            <div class="video_1 pos-r">
                                <video muted loop id="video1" poster="">
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
                            <div class="btn text-center mobile w-100p">
                                <a href="#sec9" title="contact us" class="btn-contact move_to">
                                    contact us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec2">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="content_block d-flex">
                        <div class="content_group m-auto">
                            <h2 class="default fw-600 text-center" style="margin-bottom:60px;">Here’s a thing you have been dealing with</h2>
                            <h3 class="text-center">
                                Low Consistency?<br>
                                Low Yarn Quality?
                            </h3>
                            <h2 class="sec2-title fw-600 text-center red-hl">No worries</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec3">
            <div class="slide">
                <div class="owl-carousel owl-theme">
                    <div class="item r1 p-0">
                        <div class="row d-flex">
                            <div class="col-xs-6 col-sm-6 col-md-6 pr-0 m-auto">
                                <div class="d-flex">
                                    <p class="owl-text m-auto">
                                        - Our Zimmer,<br>
                                        Nuemag and<br>
                                        Barmag machines<br>
                                        serve stabilities<br>
                                        (top machines<br>
                                        in the world)
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 pl-0 m-auto">
                                <div class="d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-1.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-1.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item r2 p-0">
                        <div class="row d-flex">
                            <div class="col-xs-6 col-sm-6 col-md-6 pr-0 m-auto">
                                <div class="d-flex">
                                    <p class="owl-text m-auto">
                                        - For raw material<br>
                                        testing, we have<br>
                                        3 tanks of PTA silo
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 pl-0 m-auto">
                                <div class="d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-2.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-2.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item r3 p-0">
                        <div class="row d-flex">
                            <div class="col-xs-6 col-sm-6 col-md-6 pr-0 m-auto">
                                <div class="d-flex">
                                    <p class="owl-text m-auto">
                                        - A perfect<br>
                                        PET flakes<br>
                                        washing line
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 pl-0 m-auto">
                                <div class="d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-3.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-3.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item r4 p-0">
                        <div class="row d-flex">
                            <div class="col-xs-6 col-sm-6 col-md-6 pr-0 m-auto">
                                <div class="d-flex">
                                    <p class="owl-text m-auto">
                                        - 0% Carbon<br>
                                        LNG is now<br>
                                        processing
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 pl-0 m-auto">
                                <div class="d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-4.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-4.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item r5 p-0">
                        <div class="row d-flex">
                            <div class="col-xs-6 col-sm-6 col-md-6 pr-0 m-auto">
                                <div class="d-flex">
                                    <p class="owl-text m-auto">
                                        - Wellor -<br>
                                        ganised<br>
                                        production<br>
                                        process
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 pl-0 m-auto">
                                <div class="d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-5.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-5.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item r6 p-0">
                        <div class="row d-flex">
                            <div class="col-xs-6 col-sm-6 col-md-6 pr-0 m-auto">
                                <div class="d-flex">
                                    <p class="owl-text m-auto">
                                        - Sustainable<br>
                                        product is<br>
                                        one of<br>
                                        our strength
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 pl-0 m-auto">
                                <div class="d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-6.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-6.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item r7 p-0">
                        <div class="row d-flex">
                            <div class="col-xs-6 col-sm-6 col-md-6 pr-0 m-auto">
                                <div class="d-flex">
                                    <p class="owl-text m-auto">
                                        - And we own<br>
                                        a Spinning mill<br>
                                        too!
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 pl-0 m-auto">
                                <div class="d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-7.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-7.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec4">
            <div class="container">
                <h2 class="h2 default text-center">
                    No matter what kind of POLYESTER,<br>
                    <span class="h1 default fw-600">we have it ALL</span> – both Virgin and Recycled version
                </h2>
            </div>
        </section>
        <section id="sec5">
            <div class="container">
                <div class="row r1 m-0">
                    <div class="col-xs-6 col-sm-6 col-md-3 d-flex spining wins">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="theme-hl m-0 fw-n">
                                    <span class="m-tl1">Partially Oriented Yarn – POY</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    It’s produced by melting
                                    and extruding a polyester
                                    chip or flake, making
                                    directly from PTA and
                                    MEG by spinning and
                                    take-up, and it's primarily
                                    used in texturizing to
                                    create textured yarn
                                    (DTY).
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="spin-block poy">
                                <div class="spin-circle-full">
                                    <div class="spin-icon">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/ICON-1.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/ICON-1.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="spin-pic">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-POY-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-POY-Thaipolyester.webp" alt="polyester Yarn process POY Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="caption tl1 m-tl2 text-center fw-600">
                                Partially Oriented Yarn (POY)
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 d-flex spining wins">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="theme-hl m-0 fw-n">
                                    <span class="m-tl1">Fully Drawn Yarn – FDY</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    It’s a highly drawn and
                                    capable of producing
                                    high-strength fabrics and
                                    also known as Polyester
                                    Filament Yarn (PFY) or
                                    Spin Draw Yarn (SDY).
                                    FDY is commonly used as
                                    a weft and weave fabric, it
                                    can also be knitted and
                                    woven with other filament
                                    yarn.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="spin-block fdy">
                                <div class="spin-circle-full">
                                    <div class="spin-icon">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/ICON-1.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/ICON-1.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="spin-pic">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-FDY-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-FDY-Thaipolyester.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="caption tl1 m-tl2 text-center fw-600">
                                Fully Drawn Yarn – FDY
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 d-flex spining wins">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="theme-hl m-0 fw-n">
                                    <span class="m-tl1">Draw Textured Yarn – DTY</span>
                                </label>
                            </div>
                            <div class="wins_content">
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
                            <div class="spin-block dty">
                                <div class="spin-circle-full">
                                    <div class="spin-icon">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/ICON-2.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/ICON-2.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="spin-pic">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-DTY-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-DTY-Thaipolyester.webp" alt="polyester Yarn process DTY Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="caption tl1 m-tl2 text-center fw-600">
                                Draw Textured Yarn – DTY
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 d-flex spining wins">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="theme-hl m-0 fw-n">
                                    <span class="m-tl1">Twisted yarn</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    The process by which
                                    fibers are arranged
                                    around the axis of yarn is
                                    called yarn twist. It
                                    imparts strength to the
                                    yarn.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="spin-block ty">
                                <div class="spin-circle-full">
                                    <div class="spin-icon">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/ICON-4.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/ICON-4.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="spin-pic">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Twisted-Yarn-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Twisted-Yarn-Thaipolyester.webp" alt="polyester Yarn process Twisted Yarn Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="caption tl1 m-tl2 text-center fw-600">
                                Twisted yarn
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 d-flex spining wins">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="theme-hl m-0 fw-n">
                                    <span class="m-tl1">Dope Dyed Black</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    Is made by incorporating a masterbatch colorant into
                                    the polymer melt during the spinning or extrusion
                                    process.<br>
                                    As a result, fully pigmented fibers and filaments emerge
                                    from the spinnerets in a single step.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="col-xs-6 col-sm-6 col-md-6 p-0 d-flex">
                                <div class="spin-block dope-dyed-black m-auto">
                                    <div class="spin-circle-full">
                                        <div class="spin-icon">
                                            <picture>
                                                <source srcset="/assets/images/landing/page4/mobile/ICON-1.webp" media="(max-width: 640px)">
                                                <img src="/assets/images/landing/page4/desktop/ICON-1.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <div class="spin-pic">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Dope-Dyed-Black-Thaipolyester-1.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Dope-Dyed-Black-Thaipolyester-1.webp" alt="polyester Yarn process Ring Spun Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 p-0 d-flex">
                                <div class="spin-block dope-dyed-black m-auto">
                                    <div class="spin-circle-full">
                                        <div class="spin-icon">
                                            <picture>
                                                <source srcset="/assets/images/landing/page4/mobile/ICON-2.webp" media="(max-width: 640px)">
                                                <img src="/assets/images/landing/page4/desktop/ICON-2.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <div class="spin-pic">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Dope-Dyed-Black-Thaipolyester-2.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Dope-Dyed-Black-Thaipolyester-2.webp" alt="polyester Yarn process OE Spun Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="caption tl1 m-tl2 text-center fw-600">
                                Dope Dyed Black
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 d-flex spining wins">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="theme-hl m-0 fw-n">
                                    <span class="m-tl1">Ring spun</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    Ring spinning is a method
                                    of spinning textile fibers
                                    to make a yarn. This
                                    process provides a soft
                                    desirable fabric.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="spin-block ring">
                                <div class="spin-circle-full">
                                    <div class="spin-icon">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/ICON-3.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/ICON-3.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="spin-pic">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Ring-Spun-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Ring-Spun-Thaipolyester.webp" alt="polyester Yarn process Ring Spun Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="caption tl1 m-tl2 text-center fw-600">
                                Ring spun
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 d-flex spining wins">
                        <div class="wins_block">
                            <div class="wins_header">
                                <label class="theme-hl m-0 fw-n">
                                    <span class="m-tl1">OE spun</span>
                                </label>
                            </div>
                            <div class="wins_content">
                                <p class="m-tl2">
                                    Open-end spinning is a
                                    technology for creating
                                    yarn without using a
                                    spindle.
                                </p>
                            </div>
                        </div>
                        <div class="m-auto">
                            <div class="spin-block oe">
                                <div class="spin-circle-full">
                                    <div class="spin-icon">
                                        <picture>
                                            <source srcset="/assets/images/landing/page4/mobile/ICON-3.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/landing/page4/desktop/ICON-3.webp" alt="" width="900" height="350" class="img-fluid" loading="lazy">
                                        </picture>
                                    </div>
                                </div>
                                <div class="spin-pic">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-OE-Spun-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-OE-Spun-Thaipolyester.webp" alt="polyester Yarn process OE Spun Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="caption tl1 m-tl2 text-center fw-600">
                                OE spun
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h5 class="theme-hl">Polyester Staple Fiber – PSF</h5>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
                        <div class="m-auto">
                            <div class="col-xs-12 col-sm-12 col-md-6 p-0">
                                <p>
                                    Is a synthetic fiber made directly from PTA & MEG or
                                    PET, with various uses in the textile, automotive and
                                    furniture industries. "Staple Fiber" often refers to
                                    natural fiber such as cotton or wool.
                                    Product table charge
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 p-0 d-flex">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-PSF-Thaipolyester.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-PSF-Thaipolyester.webp" alt="polyester Yarn process OE Spun Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn text-center w-100p">
                    <a href="#sec9" title="get FRFREE QUOTE" class="move_to">
                        get FRFREE QUOTE
                    </a>
                </div>
            </div>
        </section>
        <section id="sec6">
            <div class="slide">
                <div class="owl-carousel owl-theme">
                    <div class="item bg-opium">
                        <div class="pos-ab top-0 left-0 w-100p h-100p d-flex">
                            <h2 class="h1 text-center m-auto"><span class="m-tl2">We’re Guarantee!</span></h2>
                        </div>
                        <div class="row d-flex m-flex-col">
                            <div class="col-xs-12 col-sm-12 col-md-6 p-0 d-flex">
                                <div class="sec6-content m-auto d-flex d-flex-col">
                                    <div class="col-xs-7 col-sm-6 col-md-12 d-flex m-auto">
                                        <h2 class="sec6-title fw-bold">
                                            <span class="m-tl2">
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="col-xs-5 col-sm-6 col-md-12 d-flex m-auto">
                                        <p class="sec6-details">
                                            <span class="m-tl2">
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 d-flex">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/landing/page4/mobile/sec6.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/sec6.webp" alt="polyester Spinning mills Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="see-next">SEE NEXT 01/03</div>
                    </div>
                    <div class="item bg-charcoal">
                        <div class="row d-flex m-flex-col">
                            <div class="col-xs-12 col-sm-12 col-md-6 p-0 d-flex">
                                <div class="sec6-content m-auto d-flex d-flex-col">
                                    <div class="col-xs-7 col-sm-6 col-md-12 d-flex m-auto">
                                        <h2 class="sec6-title fw-bold">
                                            <span class="m-tl2">
                                                Spinning mills
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="col-xs-5 col-sm-6 col-md-12 d-flex m-auto">
                                        <p class="sec6-details">
                                            <span class="m-tl2">
                                                - High efficiency<br>
                                                - Yarn strength<br>
                                                - Low Oligomer<br>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 d-flex">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Spinning-mills-Thaipolyester.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/polyester-Spinning-mills-Thaipolyester.webp" alt="polyester Spinning mills Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="see-next">SEE NEXT 02/03</div>
                    </div>
                    <div class="item bg-clay">
                        <div class="row d-flex m-flex-col">
                            <div class="col-xs-12 col-sm-12 col-md-6 p-0 d-flex">
                                <div class="sec6-content m-auto d-flex d-flex-col">
                                    <div class="col-xs-7 col-sm-6 col-md-12 d-flex m-auto">
                                        <h2 class="sec6-title fw-bold">
                                            <span class="m-tl2">
                                                Knitting mills
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="col-xs-5 col-sm-6 col-md-12 d-flex m-auto">
                                        <p class="sec6-details">
                                            <span class="m-tl2">
                                                - Dying consistency<br>
                                                - Dyeing ability<br>
                                                - Stable moisture<br>
                                                - Stable OPU
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 d-flex">
                                <picture class="m-auto">
                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Knitting-mills-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/polyester-Knitting-mills-Thaipolyester.webp" alt="polyester Knitting mills Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="see-next">SEE NEXT 03/03</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec7">
            <h2 class="text-center" style="margin-bottom: 40px;">Our Customer’s Satisfaction</h2>
            <div class="slide pos-r">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="review-block d-flex">
                            <div class="m-auto">
                                <h3 class="theme-hl text-center">
                                    <span class="tl1 m-tl1">
                                        Can’t believe that TPC<br>
                                        also gave us a technical<br>
                                        problem solving”
                                    </span>
                                </h3>
                                <picture class="company-logo">
                                    <source srcset="/assets/images/landing/page4/mobile/1.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/1.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                                <h5 class="fw-600 text-center">
                                    <span class="tl1 m-tl1">
                                        Mr. Gopal ,Purchasing Manager<br>
                                        Comilla spinning mills LTD (united Group)
                                    </span>
                                </h5>
                                <picture class="company-star">
                                    <source srcset="/assets/images/landing/page4/mobile/Star.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/Star.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-block d-flex">
                            <div class="m-auto">
                                <h3 class="theme-hl text-center">
                                    <span class="tl1 m-tl1">
                                        "A long-term supply with<br>
                                        stable quality that we<br>
                                        appreciate the most"
                                    </span>
                                </h3>
                                <picture class="company-logo">
                                    <source srcset="/assets/images/landing/page4/mobile/2.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/2.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                                <h5 class="fw-600 text-center">
                                    <span class="tl1 m-tl1">
                                        MNH GLOBAL CO., LTD, KOREA
                                    </span>
                                </h5>
                                <picture class="company-star">
                                    <source srcset="/assets/images/landing/page4/mobile/Star.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/Star.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-block d-flex">
                            <div class="m-auto">
                                <h3 class="theme-hl text-center">
                                    <span class="tl1 m-tl1">
                                        "A very quick<br>
                                        response from<br>
                                        enthusiastic<br>
                                        salesperson"
                                    </span>
                                </h3>
                                <picture class="company-logo">
                                    <source srcset="/assets/images/landing/page4/mobile/3.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/3.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                                <h5 class="fw-600 text-center">
                                    <span class="tl1 m-tl1">
                                        Mirza Md. Shahadat Hossain , Rubel<br>
                                        CEO Shazman Trade Internationa
                                    </span>
                                </h5>
                                <picture class="company-star">
                                    <source srcset="/assets/images/landing/page4/mobile/Star.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/Star.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-block d-flex">
                            <div class="m-auto">
                                <h3 class="theme-hl text-center">
                                    <span class="tl1 m-tl1">
                                        "High technology<br>
                                        German<br>
                                        machine is one of<br>
                                        my favourite"
                                    </span>
                                </h3>
                                <picture class="company-logo">
                                    <source srcset="/assets/images/landing/page4/mobile/4.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/4.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                                <h5 class="fw-600 text-center">
                                    <span class="tl1 m-tl1">
                                        Mr. Rahman, SR-Tex BD LTD.
                                    </span>
                                </h5>
                                <picture class="company-star">
                                    <source srcset="/assets/images/landing/page4/mobile/Star.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/Star.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review-block d-flex">
                            <div class="m-auto">
                                <h3 class="theme-hl text-center">
                                    <span class="tl1 m-tl1">
                                        “Always get a<br>
                                        promotional<br>
                                        price on selected<br>
                                        item”
                                    </span>
                                </h3>
                                <picture class="company-logo">
                                    <source srcset="/assets/images/landing/page4/mobile/5.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/5.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                                <h5 class="fw-600 text-center">
                                    <span class="tl1 m-tl1">
                                        MR.AAMIR TARIQ (CEO)<br>
                                        Noor Enterprises, Pakistan
                                    </span>
                                </h5>
                                <picture class="company-star">
                                    <source srcset="/assets/images/landing/page4/mobile/Star.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/Star.webp" alt="MNH GLOBAL CO., LTD, KOREA" width="900" height="350" class="img-fluid" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec8">
            <h2 class="text-center">Our Certifications</h2>
            <div class="row r1 m-0">
                <div class="content_block pos-r d-flex">
                    <div class="col-xs-6 col-sm-6 col-md-4-25 p-0 col1">
                        <div class="img_block d-flex">
                            <a href="/assets/images/landing/page4/desktop/intertek-Certificate-of-Registration-thaipolyester.webp" title="intertek Certificate of Registration thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page4/desktop/intertek-Certificate-of-Registration-thaipolyester.webp">
                                <picture>
                                    <source srcset="/assets/images/landing/page4/mobile/intertek-Certificate-of-Registration-thaipolyester.webp" media="(max-width: 640px)">
                                    <img src="/assets/images/landing/page4/desktop/intertek-Certificate-of-Registration-thaipolyester.webp" width="900" height="350" class="img-fluid" alt="intertek Certificate of Registration thaipolyester" loading="lazy">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3-5 p-0 col2">
                        {{-- <div class="col-xs-4 col-sm-4 col-md-12 p-0">
                            <div class="img_block d-flex">
                                <a href="/assets/images/landing/page4/desktop/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp" title="Global Recycled standard 100% Recycled Polyester Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page4/desktop/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="Global Recycled standard 100% Recycled Polyester Thaipolyester" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                        </div> --}}
                        <div class="col-xs-4 col-sm-4 col-md-12 p-0">
                            <div class="img_block d-flex">
                                <a href="/assets/images/landing/page4/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp" title="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page4/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-12 p-0">
                            <div class="img_block d-flex">
                                <a href="/assets/images/landing/page4/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp" title="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page4/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp">
                                    <picture>
                                        <source srcset="/assets/images/landing/page4/mobile/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp" media="(max-width: 640px)">
                                        <img src="/assets/images/landing/page4/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4-25 p-0 col3">
                        <div class="img_block d-flex">
                            <a href="/assets/images/landing/page4/desktop/Green-industry-Activty-Thaipolyester.webp" title="Green industry Activty Thaipolyester" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page4/desktop/Green-industry-Activty-Thaipolyester.webp">
                                <picture>
                                    <source srcset="/assets/images/landing/page4/mobile/Green-industry-Activty-Thaipolyester.webp" media="(max-width: 640px)" loading="lazy">
                                    <img src="/assets/images/landing/page4/desktop/Green-industry-Activty-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="Green industry Activty Thaipolyester" loading="lazy">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec9" class="bg-black">
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
        <section id="sec10" class="bg-gray">
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
                            copyr ight c 2019 Thai polyes ter Co. ,Ltd. Al l r ight s reserved.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec11" class="bg-gray">
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
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/landing/page/page4.min.js?v={{time()}}"></script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
