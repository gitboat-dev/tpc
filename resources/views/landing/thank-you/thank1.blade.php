@extends('landing.template')
@section('style')
    <link rel="stylesheet preload" href="/lib/animate/animate.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/thank-you/thank1.css?v={{ time() }}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','\assets\images\landing\page1\og-image\og-image.webp')
@section('content')
<div class="thank" >
    <div class="thank-dialog">
        <div class="thank-content">
            <div class="thank-header">
                <div class="thank-icon">
                    <div class="img_block">
                        <picture>
                            <source srcset="\assets\images\landing\page1\thank-you\mobile\mark-succeed.webp" alt="Thank you" media="(max-width: 640px)" loading="lazy">
                            <img src="\assets\images\landing\page1\thank-you\desktop\mark-succeed.webp" width="900" height="350" class="img-fluid ab-img" alt="Thank you" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="thank-body d-flex">
                <div class="thank-group mb-0">
                    <h3 class="thank-title">Thank you!</h3>
                    <p class="thank-desc">Your submission has been received.</p>
                </div>
            </div>
            <div class="thank-footer d-flex">
                <div class="thank-group m-auto">
                    <div class="thank-close">
                        <div class="img_block d-flex">
                            <picture>
                                <source srcset="\assets\images\landing\page1\thank-you\mobile\mark-close.webp" alt="Thank you" media="(max-width: 640px)" loading="lazy">
                                <img src="\assets\images\landing\page1\thank-you\desktop\mark-close.webp" width="900" height="350" class="img-fluid ab-img" alt="Thank you" loading="lazy">
                            </picture>
                        </div>
                    </div>
                    <div class="thank-web text-center">
                        <a href="/" title="Thai polyester">
                            go to website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script src="/js/landing/page/thank.js"></script>
@endsection