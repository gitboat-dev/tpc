@extends('landing.template')
@section('style')
    <link rel="preload stylesheet" href="/css/landing/page/page4.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/spin-hover/spin.css?v={{time()}}" as="style" crossorigin>
    <style>
        .spin-block.fdy{
            --spin-color: var(--msBg);
            --spin-color-hover: var(--msBgOpacity);
        }
    </style>
@endsection
@section('og-image','')
@section('content')
    <div id="landing">
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
    </div>
@endsection
@section('script')
    <script src="/js/landing/page/page4.js?v={{time()}}"></script>
@endsection
