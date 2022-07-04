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
                <source src="/assets/images/landing/page8/video/Landing Page TPC4.mp4" type="video/mp4">
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
    <section id="sec2" class="pos-r">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold sec2-title">
                        <span class="m-tl0">
                            Here’s a thing you have been dealing with
                        </span>
                    </h2>
                    <h3 class="text-center fw-bold theme-hl">Low Consistency?</h3>
                    <h3 class="text-center fw-bold theme-hl">Low Yarn Quality?</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="sec3" class="pos-r"></section>
    <section id="sec4" class="pos-r"></section>
    <section id="sec5" class="pos-r"></section>
    <section id="sec6" class="pos-r">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold sec2-title">
                        <span class="m-tl0">
                            Our Customer Satisfaction
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="owl-carousel owl-theme">
                <div class="item text-center p-0">

                    {{-- <h1>Testimonial</h1>
                    <h2><span class="tl1 m-tl1">“Always get a promotional price on selected item”</span></h2>
                    <p>
                        MR.AAMIR TARIQ (CEO)<br>
                        Noor Enterprises, Pakistan
                    </p> --}}
                </div>
                <div class="item text-center p-0">
                    <h1>Testimonial</h1>
                    <h2><span class="tl1 m-tl1">“Can’t believe that TPC also gave us a technical problem solving”</span></h2>
                    <p>
                        Mr. Gopal ,Purchasing Manager<br>
                        Comilla spinning mills LTD (united Group)
                    </p>
                </div>
                <div class="item text-center p-0">
                    <h1>Testimonial</h1>
                    <h2><span class="tl1 m-tl1">"A long-term supply with stable quality that we appreciate the most"</span></h2>
                    <p>
                        MNH GLOBAL CO., LTD, KOREA
                    </p>
                </div>
                <div class="item text-center p-0">
                    <h1>Testimonial</h1>
                    <h2><span class="tl1 m-tl1">"A very quick response from enthusiastic salesperson"</span></h2>
                    <p>
                        Mirza Md. Shahadat Hossain , Rubel<br>
                        CEO Shazman Trade International
                    </p>
                </div>
                <div class="item text-center p-0">
                    <h1>Testimonial</h1>
                    <h2><span class="tl1 m-tl1">"High technology German machine is one of my favourite"</span></h2>
                    <p>
                        Mr. Rahman, SR-Tex BD LTD.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sec7" class="pos-r">
        <div class="container">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2 class="text-center fw-bold">
                        <span class="m-tl0">
                            Our Certifications
                        </span>
                    </h2>
                </div>
            </div>
            <div class="row r2 m-0 d-flex">
                <div class="col-xs-6 col-sm-6 col-md-4 p-0 col1">
                    <div class="img_block w-100p">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 p-0 col2 d-flex flex-c">
                    <div class="img_block w-100p m-auto">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-1.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                    <div class="img_block w-100p m-auto">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-2.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 p-0 col3">
                    <div class="img_block w-100p">
                        <a title="Certificate Polyester Landing page Thaipolyester" href="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}">
                            <picture>
                                <source srcset="/assets/images/landing/page7/mobile/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page7/desktop/Certificate-Polyester-Landing-page-Thaipolyester-3.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Certificate Polyester Landing page Thaipolyester" loading="lazy">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec8" class="pos-r bg-black">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                <div class="content_block d-flex pos-r">
                    <div class="content_group m-auto">
                        <h2 class="theme-hl text-center">
                            Get FREE SAMPLE<br>
                            Now!
                        </h2>
                        <form id="contact-form" data-request="landing-page" autocomplete="off">
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="NAME*">
                                <span class="text-danger name mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <input type="text" class="form-control" name="company" id="company" placeholder="COMPANY">
                                <span class="text-danger company mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-6 col-sm-6 col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL*">
                                <span class="text-danger email mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-6 col-sm-6 col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE*">
                                <span class="text-danger phone mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <textarea class="form-control" name="message" id="message" placeholder="MESSAGE" rows="5"></textarea>
                                <span class="text-danger message mb-font12"></span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div id="res" class="res"></div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="button" id="submitcontract" class="bt-contact">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec9" class="pos-r bg-gray">
        <div class="row r1 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <h2 class="text-center">
                        <i>Get in touch with us !</i>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row r2 m-0">
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Phone.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Phone.webp" width="900" height="350" class="img-fluid" alt="Phone" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Phone :</h3>
                        <div>
                            <a href="tel:+6634852371">+66 34 852371 to 2</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Email.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Email.webp" width="900" height="350" class="img-fluid" alt="Email" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Email :</h3>
                        <div>
                            <a href="mailto:support@thaipolyester.com">support@thaipolyester.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Website.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Website.webp" width="900" height="350" class="img-fluid" alt="Website" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Website :</h3>
                        <div>
                            <a href="/" target="_blank">www.thaipolyester.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col4">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Whatsapp.webp" width="900" height="350" class="img-fluid ab-img" alt="Whatsapp" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Whatsapp :</h3>
                        <div>
                            <a href="https://api.whatsapp.com/send/?phone=66639021369&text&app_absent=0" target="_blank">+66 63 902 1369</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row r3 m-0">
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <div class="img_block">
                            <picture>
                                <source srcset="/assets/images/landing/page4/mobile/Icon-landing-page-TPC-Thai-Polyester-Address.webp" media="(max-width: 640px)">
                                <img src="/assets/images/landing/page4/desktop/Icon-landing-page-TPC-Thai-Polyester-Address.webp" width="900" height="350" class="img-fluid" alt="Address" loading="lazy">
                            </picture>
                        </div>
                        <h3 class="theme-hl text-center">Address :</h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col2">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Head Office :</h3>
                        <p class="text-center">
                            470 Bangkuntien-Chaitaley<br>
                            Rd., Samaedum, Bangkuntien,<br>
                            Bangkok 10150 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Head Office Thai Polyester" href="/assets/images/contact/TPC Map-02.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-02.webp?v={{time()}}">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col3">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Factory :</h3>
                        <p class="text-center">
                            888 Moo1, Highway 331 Km.65<br>
                            (Ban Nong Phai Kaeo), Ban Bung,<br>
                            Chonburi 20220 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Factory Thai Polyester" href="/assets/images/contact/TPC Map-03.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-03.webp?v={{time()}}">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 p-0 col4">
                <div class="content_block d-flex pos-r">
                    <div class="content_group">
                        <h3 class="theme-hl text-center">Sales Office :</h3>
                        <p class="text-center">
                            Jongstit Park 99 Moo1,<br>
                            Soi Wat Phojae, Ekachai Rd.,<br>
                            Khaerai, Kratumban,<br>
                            Samutsakorn 74110 Thailand
                        </p>
                        <div class="text-center">
                            <a class="a-map" title="Map Sale Office Office Thai Polyester" href="/assets/images/contact/TPC Map-01.webp?v={{time()}}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-01.webp?v={{time()}}">
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row r4 m-0">
            <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                <div class="content_block d-flex pos-r">
                    <p class="p1 text-center m-auto">
                        copyright © 2019 Thai Polyester Co. ,Ltd. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="sec10" class="pos-r bg-gray">
        <div class="container">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
                    <h2 class="text-center fw-bold sec10-title">
                        <span class="tl0 m-tl0">
                            About US
                        </span>
                    </h2>
                    <p class="p1 m-auto">
                        Thai Polyester Company (TPC) was founded in 2001. We are a vertically integrated fiber polyester
                        manufacturer with a total capacity of 316,800 tons per year, utilizing innovative technology
                        worldwide. TPC is a registered company specializing in polyester yarn, fiber, and filament. We
                        export polyester yarn to a variety of countries. We use high-tech German machine in our process.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/js/landing/page/page8.js?v={{time()}}"></script>
<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{time()}}"></script>
@endsection
