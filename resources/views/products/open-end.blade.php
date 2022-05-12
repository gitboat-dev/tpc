@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/open-end.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1" class="bg-black pos-r">
            <div class="row m-0 r1">
                <div class="col-xs-12 col-sm-12 col-md-6 col1">
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
        <section id="sec2">
            <div class="row m-0 r1">
                <div class="col-xs-12 col-sm-12 col-md-4 col1">
                    <div class="content_block pos-r">
                        <div class="content_group">
                            <h2 class="theme-hl fw-600">
                                The heart of the<br>
                                open-end process<br>
                                is a rotor,
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 bg-white col2">
                    <div class="content_block pos-r d-flex">
                        <div class="content_group m-auto">
                            <p>
                                wherein fibers can be collected and then drawn off as a yarn. For short staple spinning, most rotors are 31 to 56
                                millimeters in diameter and may contain a shallow "U" or "V" shaped fiber alignment groove around their periphery. In
                                open end spinning, the rotor rotation provides the twisting force.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 bg-white pos-r col3">
                    <div class="content_block pos-r d-flex">
                        <div class="img_block w-100p">
                            <picture>
                                <source srcset="/assets/images/open-end/mobile/Open-End-or-OE-spun-Process-Thaipolyester.webp" alt="Open End or OE spun Process Thaipolyester" media="(max-width: 640px)" loading="lazy">
                                <img src="/assets/images/open-end/desktop/Open-End-or-OE-spun-Process-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="Open End or OE spun Process Thaipolyester" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec3" class="bg-black">
            <div class="row m-0 r1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 bg-white col1">
                    <div class="content_block pos-r">
                        <div class="video_1">
                            <video muted loop id="video1" poster="{{ $chkmobile ? "/assets/images/open-end/mobile/Open-End-or-OE-spun-Video-Process-Thaipolyester.webp" : "/assets/images/open-end/desktop/Open-End-or-OE-spun-Video-Process-Thaipolyester.webp" }}">
                                <source src="/assets/images/open-end/desktop/video/minify/C0334.mp4" type="video/mp4">
                            </video>
                            <figure>
                                <button class="button" id="btn-video1" name="play">
                                    <picture>
                                        <source srcset="/assets/images/open-end/mobile/Play-Icon.webp" alt="Play video" loading="lazy" media="(max-width: 640px)">
                                        <img src="/assets/images/open-end/desktop/Play-Icon.webp" width="900" height="350" class="img-fluid ab-img" alt="Play video" loading="lazy">
                                    </picture>
                                </button>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 bg-black col2">
                    <div class="content_block pos-r d-flex">
                        <div class="content_group m-auto">
                            <p class="theme-hl" style="text-indent: 30px">
                                Twist has traditionally been inserted into
                                yarn by rotating the package upon which the
                                yarn is being wound. In the case of open-end
                                spinning, the twisting force is generated by the
                                rotation of a rotor and is transmitted by friction
                                to the fibers that make up the tail of the
                                newly-formed yarn. As this twisting tail comes
                                into contact with other fibers, it collects them.
                                Once this process is started, it is self-sustaining,
                                and yarn can then be drawn out of the rotor
                                continuously. In order to prevent twist from being
                                transmitted throughout the length of the fibers
                                that are available for collection into yarn, it is
                                necessary that these fibers not be in any
                                significant frictional contact with one another. It
                                is from this requirement, that the supply fibers
                                not be in intimate frictional contact, that
                                open-end spinning derives its descriptive name.
                                This lack of contact allows true twist to be
                                inserted into the yarn, and at the same time,
                                prevents twist from being transmitted throughout
                                the fiber supply, which would result in instant
                                stripping of the rotor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec4">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-6 pos-r p-0 col1">
                    <div class="content_block pos-r">
                        <h2 class="h1 theme-hl">Differences:</h2>
                        <div class="text-block d-flex">
                            <p class="ml-0">
                                The basic difference between ring-spun yarns and
                                open-end spun yarns is in the way they are
                                formed. The former produces yarn by inserting
                                twist into a continuous ribbon-like strand of
                                cohesive fibers delivered by the front rolls, while
                                the latter forms yarn from individual fibers
                                directly by collecting them from the inside surface
                                of a rotor by twist forces. Thus, for comparison, it
                                could be said that a ring yarn is formed from the
                                outside in, while open-end yarn is formed from
                                the inside out.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 pos-r p-0 col2">
                    <div class="content_block d-flex pos-r">
                        <div class="img_block w-100p">
                            <picture>
                                <source srcset="/assets/images/open-end/mobile/Open-End-or-OE-spun-Peocess-Thaipolyester.webp" alt="OE Spun Open End Polyester yarn machine Thaipolyester" media="(max-width: 640px)">
                                <img src="/assets/images/open-end/desktop/Open-End-or-OE-spun-Peocess-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="OE Spun Open End Polyester yarn machine Thaipolyester">
                            </picture>
                        </div>
                        <div class="text-block pos-ab bg-black">
                            <h2 class="white-hl fw-600 m-0">
                                open end<br>
                                spun yarns
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec5" class="pos-r bg-black">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <div class="content_block pos-r">
                        <div class="img_block w-100p">
                            <picture>
                                <source srcset="/assets/images/open-end/mobile/OE-Spun-Open-End-Polyester-yarn-machine-Process-Thaipolyester.webp" alt="OE Spun Open End Polyester yarn machine Process Thaipolyester" media="(max-width: 640px)">
                                <img src="/assets/images/open-end/desktop/OE-Spun-Open-End-Polyester-yarn-machine-Process-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="OE Spun Open End Polyester yarn machine Process Thaipolyester">
                            </picture>
                        </div>
                        <div class="text-block d-flex">
                            <p class="m-auto bg-black">
                                The elements basic to production of open-end
                                yarns are somewhat different from ring spinning.
                                They are:<br>
                                a) Fiber supply<br>
                                b) Drafting system<br>
                                c) Fiber collection and alignment<br>
                                d) Twist insertion -- yarn formation<br>
                                e) Package winding<br>
                                Spun yarn luster<br>
                                Luster refers to the degree of light that is
                                reflected from the surface of a fiber or the degree
                                of gloss or sheen that the fiber possesses.<br>
                                - Full dull<br>
                                - Semi-dull<br>
                                - Bright
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="sec6" class="bg-black">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <div class="img_block bg-green w-100p">
                        <picture>
                            <source srcset="/assets/images/open-end/mobile/Open-End-or-OE-spun-Product-Polyester.webp" alt="Open End or OE spun Product Polyester" media="(max-width: 640px)">
                            <img src="/assets/images/open-end/desktop/Open-End-or-OE-spun-Product-Polyester.webp" width="900" height="350" class="img-fluid" alt="Open End or OE spun Product Polyester">
                        </picture>
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
