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
    </div>
</div>
@endsection
@section('custom-script')
	<script src="/js/open-end.js?v={{ time() }}"></script>
@endsection
