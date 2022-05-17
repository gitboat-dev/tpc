@extends('landing.template')
@section('style')
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/page/page4.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/spin_hover/spin.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/window_slide/wins.css?v={{time()}}" as="style" crossorigin>
@endsection
@section('og-image','')
@section('content')
    <div id="landing">
        <section id="sec1" class="bg-black">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-5 p-0 col1">
                    <div class="content_block d-flex">
                        <div class="content_group m-auto">
                            <h1>
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
                            <div class="btn">
                                <a href="#" title="contact us" class="btn-contact">
                                    contact us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 p-0 col2">
                    <div class="content_block d-flex">
                        <div class="content_group m-auto">
                            <div class="video_1">
                                <video muted loop id="video1" poster="">
                                    <source src="/assets/images/landing/page4/video/minify/TPC-Landing-Page2.mp4" type="video/mp4">
                                </video>
                                <figure class="btn-play d-flex pos-ab top-0 left-0 w-100p h-100p">
                                    <button class="m-auto" id="btn-video1" name="play">
                                        <picture>
                                            <source srcset="/assets/images/open-end/mobile/Play-Icon.webp" alt="Play video" loading="lazy" media="(max-width: 640px)">
                                            <img src="/assets/images/open-end/desktop/Play-Icon.webp" width="900" height="350" class="img-fluid ab-img" alt="Play video" loading="lazy">
                                        </picture>
                                    </button>
                                </figure>
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
            <div class="container">
                <div class="slide">
                    <div class="owl-carousel owl-theme">
                        <div class="item p-0">
                            <div class="row r1 m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="content_block d-flex">
                                        <div class="content_group d-flex m-auto">
                                            <div class="col-md-6 d-flex m-auto p-0">
                                                <p class="owl-text m-auto">
                                                    - Our Zimmer,<br>
                                                    Nuemag and<br>
                                                    Barmag machines<br>
                                                    serve stabilities<br>
                                                    (top machines<br>
                                                    in the world)
                                                </p>
                                            </div>
                                            <div class="col-md-6 d-flex m-auto">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-1.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-1.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-0">
                            <div class="row r2 m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="content_block d-flex">
                                        <div class="content_group d-flex m-auto">
                                            <div class="col-md-6 d-flex m-auto p-0">
                                                <p class="owl-text m-auto">
                                                    - For raw material<br>
                                                    testing, we have<br>
                                                    3 tanks of PTA silo
                                                </p>
                                            </div>
                                            <div class="col-md-6 d-flex m-auto">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-2.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-2.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-0">
                            <div class="row r3 m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="content_block d-flex">
                                        <div class="content_group d-flex m-auto">
                                            <div class="col-md-6 d-flex m-auto p-0">
                                                <p class="owl-text m-auto">
                                                    - A perfect<br>
                                                    PET flakes<br>
                                                    washing line
                                                </p>
                                            </div>
                                            <div class="col-md-6 d-flex m-auto">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-3.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-3.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-0">
                            <div class="row r4 m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="content_block d-flex">
                                        <div class="content_group d-flex m-auto">
                                            <div class="col-md-6 d-flex m-auto p-0">
                                                <p class="owl-text m-auto">
                                                    - 0% Carbon<br>
                                                    LNG is now<br>
                                                    processing
                                                </p>
                                            </div>
                                            <div class="col-md-6 d-flex m-auto">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-4.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-4.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-0">
                            <div class="row r5 m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="content_block d-flex">
                                        <div class="content_group d-flex m-auto">
                                            <div class="col-md-6 d-flex m-auto p-0">
                                                <p class="owl-text m-auto">
                                                    - Wellor -<br>
                                                    ganised<br>
                                                    production<br>
                                                    process
                                                </p>
                                            </div>
                                            <div class="col-md-6 d-flex m-auto">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-5.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-5.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-0">
                            <div class="row r6 m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="content_block d-flex">
                                        <div class="content_group d-flex m-auto">
                                            <div class="col-md-6 d-flex m-auto p-0">
                                                <p class="owl-text m-auto">
                                                    - Sustainable<br>
                                                    product is<br>
                                                    one of<br>
                                                    our strength
                                                </p>
                                            </div>
                                            <div class="col-md-6 d-flex m-auto">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-6.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-6.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-0">
                            <div class="row r7 m-0">
                                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                                    <div class="content_block d-flex">
                                        <div class="content_group d-flex m-auto">
                                            <div class="col-md-6 d-flex m-auto p-0">
                                                <p class="owl-text m-auto">
                                                    - And we own<br>
                                                    a Spinning mill<br>
                                                    too!
                                                </p>
                                            </div>
                                            <div class="col-md-6 d-flex m-auto">
                                                <picture>
                                                    <source srcset="/assets/images/landing/page4/mobile/polyester-Yarn-process-Thaipolyester-7.webp" media="(max-width: 640px)">
                                                    <img src="/assets/images/landing/page4/desktop/polyester-Yarn-process-Thaipolyester-7.webp" alt="polyester Yarn process Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                                </picture>
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
                    <a href="#" title="get FRFREE QUOTE">
                        get FRFREE QUOTE
                    </a>
                </div>
            </div>
        </section>
        <section id="sec6">
            <div class="slide pos-r">
                <div class="owl-carousel owl-theme">
                    <div class="item bg-opium d-flex">
                        <div class="row r1 m-auto">
                            <div class="col-xs-12 col-sm-12 col-md-12 p-0 pos-r">
                                <div class="content_block d-flex">
                                    <div class="content_group d-flex m-auto">
                                        <div class="m-auto">
                                            <h2 class="h1 text-center"><span class="m-tl2">We’re Guarantee!</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="pos-ab" style="bottom:-15px;right:30px;">
                                    SEE NEXT 01/03
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-charcoal d-flex">
                        <div class="row r1 m-auto">
                            <div class="col-xs-12 col-sm-12 col-md-12 p-0 pos-r">
                                <div class="content_block d-flex">
                                    <div class="content_group d-flex m-flex-col m-auto">
                                        <div class="col-xs-12 col-sm-6 col-md-6 d-flex m-auto p-0">
                                            <div class="m-auto m-d-flex w-100p p-15">
                                                <h2>Spinning mills</h2>
                                                <p>
                                                    <span class="m-tl2">
                                                        - High efficiency<br>
                                                        - Yarn strength<br>
                                                        - Low Oligomer<br>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 d-flex m-auto">
                                            <picture>
                                                <source srcset="/assets/images/landing/page4/mobile/polyester-Spinning-mills-Thaipolyester.webp" media="(max-width: 640px)">
                                                <img src="/assets/images/landing/page4/desktop/polyester-Spinning-mills-Thaipolyester.webp" alt="polyester Spinning mills Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="pos-ab" style="bottom:-15px;right:30px;">
                                    <small>SEE NEXT 02/03</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-clay d-flex">
                        <div class="row r1 m-auto">
                            <div class="col-xs-12 col-sm-12 col-md-12 p-0 pos-r">
                                <div class="content_block d-flex">
                                    <div class="content_group d-flex m-flex-col m-auto">
                                        <div class="col-xs-12 col-sm-6 col-md-6 d-flex m-auto p-0">
                                            <div class="m-auto m-d-flex w-100p p-15">
                                                <h2>Knitting mills</h2>
                                                <p>
                                                    <span class="m-tl2">
                                                        - Dying consistency<br>
                                                        - Dyeing ability<br>
                                                        - Stable moisture<br>
                                                        - Stable OPU
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 d-flex m-auto">
                                            <picture>
                                                <source srcset="/assets/images/landing/page4/mobile/polyester-Knitting-mills-Thaipolyester.webp" media="(max-width: 640px)">
                                                <img src="/assets/images/landing/page4/desktop/polyester-Knitting-mills-Thaipolyester.webp" alt="polyester Knitting mills Thaipolyester" width="900" height="350" class="img-fluid" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="pos-ab" style="bottom:-15px;right:30px;">
                                    <small>SEE NEXT 03/03</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/landing/page/page4.js?v={{time()}}"></script>
@endsection
