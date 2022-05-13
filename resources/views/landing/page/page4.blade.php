@extends('landing.template')
@section('style')
    <link rel="preload stylesheet" href="/css/landing/page/page4.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/spin-hover/spin.css?v={{time()}}" as="style" crossorigin>
@endsection
@section('og-image','')
@section('content')
    <div id="landing">
        {{-- <div class="spin-block fdy">
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
        </div> --}}
        <section id="sec1" class="bg-black">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-5 p-0">
                    <div class="content_block d-flex">
                        <div class="content_group m-auto">
                            <h1>
                                TPC,<br>
                                your Polyester<br>
                                Destination
                            </h1>
                            <p class="h2">
                                - Exporting Polyester Fiber and Yarn to
                                over 70 countries all around the world.<br>
                                - Our total capacity of Fiber, Yarn and
                                Filament is around 350,000 tons annually.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 p-0"></div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="/js/landing/page/page4.js?v={{time()}}"></script>
@endsection
