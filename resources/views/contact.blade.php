
@extends('layouts.template')
@section('style')
<link rel="stylesheet" id="js_composer_front-css" href="{!!asset('/assets/custom/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.5')!!}" type="text/css" media="all">
<link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
<style>
    .gmap{
        width:100%;
    }
    .gmap iframe{
        width:100%;
    }
</style>
@endsection
@section('content')

<!-- wraper_header_bannerinner -->
<div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid branner-contact vc_row-has-fill ">
    <div class="wpb_column vc_column_container vc_col-sm-12 ">
        <header class="woocommerce-products-header text-center">
            <h1 style="text-align: center" class="vc_custom_heading vc_custom_1520849723409">Get in touch with us</h1>
        </header>

        <!-- #page -->
<div id="page" class="site">
    <!-- #content -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">





                    <article id="post-294" class="post-294 page type-page status-publish has-post-thumbnail hentry">
                        <header class="entry-header">
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <section data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section vc_custom_1519729320894 vc_section-has-fill">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1519729633442 vc_row-o-equal-height vc_row-flex">
                                    <div class="box-shadow-contact wpb_column vc_column_container vc_col-sm-8 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1519729536737 mb-padding5">
                                            <div class="wpb_wrapper">
                                                <h2 style="font-size: 36px;line-height: 45px;text-align: center" class="vc_custom_heading vc_custom_1519730936863">We Love to Hear From You</h2>
                                                <div class="wpb_text_column wpb_content_element  vc_custom_1512018043490">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center;">Please call or email contact form and we will be happy to assist you.</p>

                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1519730957211">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <!-- rt-cf7 -->
                                                                <div id="alert-msg"></div>
                                                                <div class="radiant-contact-form rt4ef4819551253b7">
                                                                    <div role="form" class="wpcf7" id="wpcf7-f6548-p294-o1" lang="en-US" dir="ltr">
                                                                        <div class="screen-reader-response"></div>

                                                                        <form id="contact-form" data-request="contact" autocomplete="off">

<div class="form-row row">
    <div class="col-lg-12">
        <div class="form-group col-md-6 col-sm-6 col-xs-6">
            <label for="name">Your Name *</label>
            <input type="text" class="form-control" name="name" id="name">
            <span class="text-danger name mb-font12"></span>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-6">
            <label for="email">E-mail *</label>
            <input type="email" class="form-control" name="email" id="email">
            <span class="text-danger email mb-font12"></span>
        </div>
    </div>
</div>

<div class="form-row row">
    <div class="col-lg-12">
        <div class="form-group col-md-6 col-sm-6 col-xs-6">
        <label for="country">Country *</label>
            <select name="country" class="form-control" id="country">
              <option value="">- Select Country -</option>
              @foreach ($countries as $rs)
              <option value="{{$rs['name']}}">{{$rs['name']}}</option>
              @endforeach
            </select>
          <span class="text-danger country"></span>

        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-6">
        <label for="phone">Phone Number</label>
          <input type="text" class="form-control" name="phone" id="phone">
          <span class="text-danger phone mb-font12"></span>
        </div>
    </div>
</div>

<div class="form-row row">
    <div class="col-lg-12">
        <div class="form-group col-md-12">
            <label for="message">Message *</label>
            <textarea class="form-control" name="message" id="message"></textarea>
            <span class="text-danger message mb-font12"></span>
        </div>
    </div>
</div>

<div class="form-row row">
    <div class="col-lg-12">
        <div id="res" class="res"></div>
    </div>
</div>

<div class="form-row">
    <div class="col-lg-12">
        <div class="form-group col-md-12 text-center">
            <button type="button" id="submitcontract" class="btcontact">SEND</button>
        </div>
    </div>
</div>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- rt-cf7 -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1519729616372">
                                            <div class="wpb_wrapper">
                                                <h3 style="line-height: 26px;text-align: left" class="vc_custom_heading">Our Office Address</h3>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid under-line vc_custom_1519730303419">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <h2 style="font-size: 20px;line-height:20px;text-align: left" class="vc_custom_heading">Head Office:</h2>
                                                                <div style="font-size: 15px;" class="vc_custom_heading vc_custom_1519729938908">
                                                                  <p style="padding-bottom:10px">470 Bangkuntien-Chaitaley Rd.,
                                                                Samaedum, Bangkuntien, Bangkok
                                                                10150 Thailand</p>
                                                                Phone : +66(0) 2416-0112 to 8<br>
                                                                Email : <a href="mailto:gmkt@thaipolyester.com" class="mail">gmkt@thaipolyester.com</a><br>
                                                                Email : <a href="mailto:sales@thaipolyester.com" class="mail">sales@thaipolyester.com</a>
                                                              </div>


                                                              <!--   <div data-thumb="{{ asset('assets/custom/images/product/ring/1.jpg')}}" class="woocommerce-product-gallery__image"> -->
                                                                <a title="map office thai polyester" href="{{ asset('assets/custom/images/contact/TPC%20samaedum.webp')}}" data-fancybox="gallery" data-thumbnail-src="{{ asset('assets/custom/images/contact/TPC%20samaedum.webp')}}">
                                                                    <button class="btmap" style="margin-top:15px;"><i class="fa fa-map-marker"></i> Map</button>
                                                                </a>
                                                               <!-- </div> -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid under-line vc_custom_1519730747658">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <h2 style="font-size: 20px;line-height: 24px;text-align: left" class="vc_custom_heading">Factory:</h2>
                                                                <p style="font-size: 15px;line-height: 24px;text-align: left" class="vc_custom_heading vc_custom_1519730372061">888 Moo1, Highway 331 Km.65
                                                                (Ban Nong Phai Kaeo), Ban Bung,
                                                                Chonburi 20220 Thailand</p>
                                                                <a title="map factory thai polyester" href="{{ asset('assets/custom/images/contact/TPC%20chonburi.webp')}}" data-fancybox="gallery" data-thumbnail-src="{{ asset('assets/custom/images/contact/TPC%20chonburi.webp')}}">
                                                                    <button class="btmap" style="margin-top:15px;"><i class="fa fa-map-marker"></i> Map</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1519730867714">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <h2 style="font-size: 20px;line-height: 24px;text-align: left" class="vc_custom_heading">Sale Office:</h2>
                                                                <p style="font-size: 15px;line-height: 24px;text-align: left" class="vc_custom_heading vc_custom_1521001888995">Jongstit Park 99 Moo1, Soi Wat Phojae,
                                                                Ekachai Rd., Khaerai, Kratumban,
                                                                Samutsakorn 74110 Thailand</p>
                                                                <a title="map sale office thai polyester" href="{{ asset('assets/custom/images/contact/TPC%20phojae.webp')}}" data-fancybox="gallery" data-thumbnail-src="{{ asset('assets/custom/images/contact/TPC%20phojae.webp')}}">
                                                                    <button class="btmap" style="margin-top:15px;"><i class="fa fa-map-marker"></i> Map</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1988750.428065211!2d100.10541590121602!3d13.20784380000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f3762d4068c82f8!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5hOC4l-C4ouC5guC4nuC4peC4teC5gOC4reC4quC5gOC4leC4reC4o-C5jCDguIjguLPguIHguLHguJQgKFRQQyk!5e0!3m2!1sth!2sth!4v1635497599374!5m2!1sth!2sth" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- #post-294 -->
                </div>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->

    </div>
    <!-- #content -->
</div>
<!-- #page -->
    </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<!-- wraper_header_bannerinner -->


@endsection

@section('custom-script')
<script src="/js/contact.js"></script>
<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection