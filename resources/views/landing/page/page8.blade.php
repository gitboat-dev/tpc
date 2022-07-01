@extends('landing.template')
@section('style')
    <link rel="preload stylesheet" href="/css/landing/page/page8.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
<div id="landing">
    <section id="sec1" class="pos-r">
        <div class="wrapper">
            <video autoplay muted loop playsinline id="video1" poster="">
                <source src="/assets/images/landing/test/Landing Page TPC4.mp4" type="video/mp4">
            </video>
        </div>
        <div class="pos-ab w-100p h-100p top-0 left-0 d-flex">
            <div class="row m-0 w-100p h-100p">
                <div class="col-xs-12 col-sm-6 col-md-5 d-flex h-100p col-h1">
                    <div class="head-content h-100p d-flex">
                        <div class="content m-auto">
                            <h1 class="head-title fw-bold">
                                TPC,<br>
                                your Polyester<br>
                                Destination
                            </h1>
                            <div class="head-desc">
                                <p>
                                    - Exporting Polyester Fiber and Yarn to
                                    over 70 countries all around the world.<br>
                                    - Our total capacity of Fiber, Yarn and
                                    Filament is around 350,000 tons annually.
                                </p>
                            </div>
                            <div class="head-btn">
                                <a href="#" title="contact us" class="ml-0">
                                    Contact Us
                                </a>
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
{{-- <script>
    $(document).ready(function(){
        video_resize();
        $(window).resize(function() {
            video_resize();
        });
    });
    function video_resize(){
        var videoFile = '/assets/images/landing/test/Landing Page TPC4.mp4',
            videoFile2 = '/assets/images/landing/page4/video/minify/TPC-Landing-Page2.mp4';
        if($(window).width() <= 640){
            $('#video1 source').attr('src', videoFile2);
            $("#video1")[0].load();
        }else{
            $('#video1 source').attr('src', videoFile);
            $("#video1")[0].load();
        }
    }
</script> --}}
@endsection
