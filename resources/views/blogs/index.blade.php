@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet" href="/css/blogs/index.css?v={{time()}}" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="content_block pos-r d-flex">
                        <div class="img_block">
                            <picture>
                                {{-- <source srcset="\assets\images\blogs\columns\vp-vs-rp\mobile\Head-Virgin-Polyester-VS-Recycled-Polyester-Thaipolyester.webp" alt="Virgin Polyester VS Recycled Polyester" media="(max-width: 640px)"> --}}
                                <img src="{{$blogs[0]['cover']['url']}}" width="900" height="350" class="img-fluid" alt="Virgin Polyester VS Recycled Polyester">
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
    <script src="/js/blogs/index.js?v={{time()}}"></script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{time()}}"></script>
@endsection
