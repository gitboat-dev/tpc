@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/contact.css?v={{ time() }}" as="style" crossorigin>
	<link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
    <div id="tpc">
        <div id="tpc-bg">
            <section id="sec1">
                <div class="row r1 m-0">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="img_block">
                                <picture>
                                    <source srcset="\assets\images\contact\mobile\Head-Contact-TPC.webp" alt="Contact TPC" media="(max-width: 640px)">
                                    <img src="\assets\images\contact\desktop\Head-Contact-TPC.webp" width="900" height="350" class="img-fluid" alt="Contact TPC">
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
	<script src="/js/contac.js?v={{time()}}"></script>
	<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
