@extends('landing.template')
@section('style')
    <link rel="stylesheet preload" href="/lib/animate/animate.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/thank-you/thank1.min.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('og-image','\assets\images\landing\page1\og-image\og-image.webp')
@section('content')
<div id="landing">
    <div class="thank wow animate__zoomIn">
        <div class="thank-dialog">
            <div class="thank-content">
                <div class="thank-header">
                    {{-- <div class="thank-icon">
                        <div class="img_block">
                            <picture>
                                <source srcset="\assets\images\landing\page1\thank-you\mobile\mark-succeed.webp" alt="Thank you" media="(max-width: 640px)" loading="lazy">
                                <img src="\assets\images\landing\page1\thank-you\desktop\mark-succeed.webp" width="900" height="350" class="img-fluid ab-img" alt="Thank you" loading="lazy">
                            </picture>
                        </div>
                    </div> --}}
                </div>
                <div class="thank-body d-flex pos-r">
                    <div class="thank-group mb-0">
                        <div class="thank-icon pos-ab w-100p d-flex">
                            <div class="img_block">
                                <picture>
                                    <source srcset="\assets\images\landing\page1\thank-you\mobile\mark-succeed.webp" alt="Thank you" media="(max-width: 640px)" loading="lazy">
                                    <img src="\assets\images\landing\page1\thank-you\desktop\mark-succeed.webp" width="900" height="350" class="img-fluid ab-img" alt="Thank you" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <h3 class="thank-title">Thank you!</h3>
                        {{-- <p class="thank-desc">Your submission has been received.</p> --}}
                        <p class="thank-desc">We'll get back to you within 24 hours by <b>support@thaipolyester.com</b>
                            Our e-mail might have gone through your Junk-mail. Kindly check in it ;)</p>
                    </div>
                </div>
                <div class="thank-footer d-flex">
                    <div class="thank-group mt-50">
                        {{-- <div class="thank-close">
                            <div class="img_block d-flex">
                                <picture>
                                    <source srcset="\assets\images\landing\page1\thank-you\mobile\mark-close.webp" alt="Thank you" media="(max-width: 640px)" loading="lazy">
                                    <img src="\assets\images\landing\page1\thank-you\desktop\mark-close.webp" width="900" height="350" class="img-fluid ab-img" alt="Thank you" loading="lazy">
                                </picture>
                            </div>
                        </div> --}}
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
@endsection
