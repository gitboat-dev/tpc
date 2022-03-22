@extends('landing.template')
@section('style')
    <link rel="stylesheet preload" href="/lib/animate/animate.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/page/thank.css?v={{ time() }}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','\assets\images\landing\page1\og-image\og-image.webp')
@section('content')
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
