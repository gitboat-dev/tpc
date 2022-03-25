@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/contact.css?v={{time()}}" as="style" crossorigin>
	<link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
    <div id="tpc">
        <div id="tpc-bg">
            <section id="sec1">
                <div class="row r1 m-0">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content_block pos-r">
                            <div class="img_block">
                                <picture>
                                    <source srcset="\assets\images\contact\mobile\Head-Contact-TPC.webp?v={{time()}}" alt="Contact TPC" media="(max-width: 640px)">
                                    <img src="\assets\images\contact\desktop\Head-Contact-TPC.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Contact TPC">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec2" class="bg-gray">
                <div class="row r1 m-0">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content_block d-flex pos-r">
                            <h2 class="text-center"><i>Get in touch with us !</i></h2>
                        </div>
                    </div>
                </div>
                <div class="row r2 m-0 d-flex">
                    <div class="col-xs-12 col-sm-6 col-md-2-4 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="content_group">
                                <div class="img_block">
                                    <picture>
                                        <source srcset="\assets\images\contact\mobile\Icon-Contact-US-TPC-Thai-Polyester-Phone.webp?v={{time()}}" alt="Phone" media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\contact\desktop\Icon-Contact-US-TPC-Thai-Polyester-Phone.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Phone" loading="lazy">
                                    </picture>
                                </div>
                                <h3 class="theme-hl text-center">Phone :</h3>
                                <div class="text-center">
                                    <a href="tel:+6634852371" title="Phone">+66 34 852371 to 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2-4 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="content_group">
                                <div class="img_block">
                                    <picture>
                                        <source srcset="\assets\images\contact\mobile\Icon-Contact-US-TPC-Thai-Polyester-Email.webp?v={{time()}}" alt="Email" media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\contact\desktop\Icon-Contact-US-TPC-Thai-Polyester-Email.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Email" loading="lazy">
                                    </picture>
                                </div>
                                <h3 class="theme-hl text-center">Email :</h3>
                                <div class="text-center">
                                    <a href="mailto:support@thaipolyester.com" title="Email">support@thaipolyester.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2-4 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="content_group">
                                <div class="img_block">
                                    <picture>
                                        <source srcset="\assets\images\contact\mobile\Icon-Facebook-Contact-US-Thaipolyester.webp?v={{time()}}" alt="Facebook" media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\contact\desktop\Icon-Facebook-Contact-US-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Facebook" loading="lazy">
                                    </picture>
                                </div>
                                <h3 class="theme-hl text-center">Facebook :</h3>
                                <div class="text-center">
                                    <a href="https://www.facebook.com/Eco.Thaipolyester/" target="_blank" title="Facebook">EcoTPC</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2-4 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="content_group">
                                <div class="img_block">
                                    <picture>
                                        <source srcset="\assets\images\contact\mobile\Icon-linkedin-Contact-US-Thaipolyester.webp?v={{time()}}" alt="Linkedin" media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\contact\desktop\Icon-linkedin-Contact-US-Thaipolyester.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Linkedin" loading="lazy">
                                    </picture>
                                </div>
                                <h3 class="theme-hl text-center">linkedin :</h3>
                                <div class="text-center">
                                    <a href="https://www.linkedin.com/company/thai-polyester-co-ltd-thailand" target="_blank" title="Linkedin">Thai Polyester Co., Ltd</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2-4 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="content_group">
                                <div class="img_block">
                                    <picture>
                                        <source srcset="\assets\images\contact\mobile\Icon-Contact-US-TPC-Thai-Polyester-Whatsapp.webp?v={{time()}}" alt="Whatsapp" media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\contact\desktop\Icon-Contact-US-TPC-Thai-Polyester-Whatsapp.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Whatsapp" loading="lazy">
                                    </picture>
                                </div>
                                <h3 class="theme-hl text-center">Whatsapp :</h3>
                                <div class="text-center">
                                    <a href="https://api.whatsapp.com/send/?phone=66639021369&text&app_absent=0" target="_blank" title="Whatsapp">+66 63 902 1369</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row r3 m-0 d-flex">
                    <div class="col-xs-12 col-sm-6 col-md-3 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="content_group">
                                <div class="img_block">
                                    <picture>
                                        <source srcset="\assets\images\contact\mobile\Icon-Contact-US-TPC-Thai-Polyester-Address.webp?v={{time()}}" alt="Address" media="(max-width: 640px)" loading="lazy">
                                        <img src="\assets\images\contact\desktop\Icon-Contact-US-TPC-Thai-Polyester-Address.webp?v={{time()}}" width="900" height="350" class="img-fluid ab-img" alt="Address" loading="lazy">
                                    </picture>
                                </div>
                                <h3 class="theme-hl text-center">Address :</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 p-0">
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
                    <div class="col-xs-12 col-sm-6 col-md-3 p-0">
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
                    <div class="col-xs-12 col-sm-6 col-md-3 p-0">
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
            </section>
            <section id="sec3" class="bg-black">
                <div class="row m-0 r1">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content_block pos-r">
                            <h3 class="theme-hl text-center fw-n">
                                We can help your business grow!
                            </h3>
                            <h2 class="theme-hl text-center fw-n">
                                <span class="white-hl">Be Our Success</span><br>
                                Partner
                            </h2>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content-block d-flex">
                            <div class="content-group">
                                <h1 class="theme-hl text-center fw-n">CONTACT US</h1>
                                <form id="contact-form" data-request="contact" autocomplete="off">
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
									<div class="form-group col-xs-12 col-sm-12 col-md-12 text-center btn-block">
										<button type="button" id="submitcontract" class="bt-contact">
											SEND
										</button>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sec4">
                <div class="row m-0 r1">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content_block d-flex pos-r">
                            <div class="content-group">
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex col1">
                                    <h3 class="m-auto">
                                        LET'S<br>
                                        GROW<br>
                                        TOGETHER
                                    </h3>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 d-flex col2">
                                    <div class="img_block m-auto">
                                        <picture>
                                            <source srcset="\assets\images\contact\mobile\Let-is-Grow-Together-Contact-TPC.webp?v={{time()}}" alt="Let is Grow Together Contact" media="(max-width: 640px)">
                                            <img src="\assets\images\contact\desktop\Let-is-Grow-Together-Contact-TPC.webp?v={{time()}}" width="900" height="350" class="img-fluid" alt="Let is Grow Together Contact">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('custom-script')
	<script src="/js/contact.js?v={{time()}}"></script>
	<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{time()}}"></script>
@endsection
