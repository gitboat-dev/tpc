@extends('thank-you.layouts.template')
@section('style')
    <link rel="stylesheet preload" href="/lib/animate/animate.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/thank-you/thank1.min.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('og-image','\assets\images\landing\page1\og-image\og-image.webp')
@section('content')
<div id="landing">
    <div class="thank-dialog d-flex m-auto">
        <div class="thank m-auto wow animate__zoomIn">
            <div class="thank-icon d-flex pos-r">
                <div class="img_block m-auto">
                    <picture>
                        <source srcset="\assets\images\landing\page1\thank-you\mobile\mark-succeed.webp" alt="Thank you" media="(max-width: 640px)" loading="lazy">
                        <img src="\assets\images\landing\page1\thank-you\desktop\mark-succeed.webp" width="900" height="350" class="img-fluid ab-img" alt="Thank you" loading="lazy">
                    </picture>
                </div>
                <div class="thank-icon-bg pos-ab bottom-0 w-100p"></div>
            </div>
            <div class="thank-body">
                <h3 class="thank-title text-center">
                    Thank you!
                </h3>
                <p class="thank-desc text-center">
                    We'll get back to you within 24 hours by <b>support@thaipolyester.com</b>
                    Our e-mail might have gone through your Junk-mail. Kindly check in it ;)
                </p>
            </div>
            <div class="thank-web text-center">
                <a href="/" title="Thai polyester">
                    go to website
                </a>
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
