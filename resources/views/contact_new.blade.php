@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/contact_new.css?v={{ time() }}" as="style" crossorigin>
	<link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('content')
	<div id="contact">
		<div id="contact_bg">
			<div class="section-one">
				<div class="row m-0 r1">
					<picture>
						<source srcset="/assets/images/contact/mobile/Head-Contact-TPC.webp?v={{ time() }}" alt="Contact TPC" media="(max-width: 640px)">
						<img src="/assets/images/contact/desktop/Head-Contact-TPC.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="Contact TPC">
			        </picture>
				</div>
			</div>
			<div class="section-two bg-black">
				<div class="row m-0 r0">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col0">
						<h2><i>Get in touch with us !</i></h2>
					</div>
				</div>
				<div class="row m-0 r1">
					<div class="block">
						<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
							<div class="col-xs-12 col-sm-12 col-md-3 p-0 col1-1">
								<div class="content_block">
									<div class="img_block1">
										<picture>
											<source srcset="/assets/images/contact/mobile/Address-Contact-Icon-TPC.webp" alt="Address Contact Icon TPC" media="(max-width: 640px)" loading="lazy">
											<img src="/assets/images/contact/desktop/Address-Contact-Icon-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Address Contact Icon TPC" loading="lazy">
								        </picture>
								    </div>
								    <div class="content_1">
										<h3>Address :</h3>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 p-0 col1-2">
								<div class="content_block">
									<div class="content_1">
										<h3>Head Office :</h3>
										<p class="p1">
											470 Bangkuntien-Chaitaley
											Rd., Samaedum, Bangkuntien,
											Bangkok 10150 Thailand
										</p>
										<a title="Map Head Office Thai Polyester" href="/assets/images/contact/TPC Map-02.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-02.webp?v={{ time() }}">
											Map
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 p-0 col1-3">
								<div class="content_block">
									<div class="content_1">
										<h3>Factory :</h3>
										<p class="p1">
											888 Moo1, Highway 331 Km.65
											(Ban Nong Phai Kaeo), Ban Bung,
											Chonburi 20220 Thailand
										</p>
										<a title="Map Factory Thai Polyester" href="/assets/images/contact/TPC Map-03.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-03.webp?v={{ time() }}">
											Map
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-3 p-0 col1-4">
								<div class="content_block">
									<div class="content_1">
										<h3>Sale Office :</h3>
										<p class="p1">
											Jongstit Park 99 Moo1,
											Soi Wat Phojae, Ekachai Rd.,
											Khaerai, Kratumban,
											Samutsakorn 74110 Thailand
										</p>
										<a title="Map Sale Office Office Thai Polyester" href="/assets/images/contact/TPC Map-01.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/contact/TPC Map-01.webp?v={{ time() }}">
											Map
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row m-0 r2">
					<div class="block">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0 col2">
							<div class="col-xs-12 col-sm-12 col-md-6 p-0 col2-1">
								<div class="content_block">
									<div class="img_block1">
										<picture>
											<source srcset="/assets/images/contact/mobile/Phone-Contact-icon-TPC.webp" alt="Phone Contact icon TPC" media="(max-width: 640px)" loading="lazy">
											<img src="/assets/images/contact/desktop/Phone-Contact-icon-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Phone Contact icon TPC" loading="lazy">
								        </picture>
								    </div>
								    <div class="content_1">
										<h3>Phone :</h3>
										<p class="p1">
											<a href="tel:+6634852371">
												+66 34 852371 to 2
											</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 p-0 col2-2">
								<div class="content_block">
									<div class="img_block1">
										<picture>
											<source srcset="/assets/images/contact/mobile/Email-Contact-icon-TPC.webp" alt="Email Contact icon TPC" media="(max-width: 640px)" loading="lazy">
											<img src="/assets/images/contact/desktop/Email-Contact-icon-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Email Contact icon TPC" loading="lazy">
								        </picture>
								    </div>
								    <div class="content_1">
										<h3>Email :</h3>
										<p class="p1">
											<a href="mailto:support@thaipolyester.com">
												support@thaipolyester.com
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-three">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 p-0 col1-1">
							<div class="content_block">
								<h3>how we can help your business grow!</h3>
								<h2>
									<span>
										Be Our Success
									</span>
									<br>
									Partner
								</h2>
								<h1>CONTACT US</h1>
								<form id="contact-form" data-request="contact" autocomplete="off">
									<div class="form-group col-xs-6 col-sm-6 col-md-6">
							            <input type="text" class="form-control" name="name" id="name" placeholder="FIRST NAME">
							            <span class="text-danger name mb-font12"></span>
									</div>
									<div class="form-group col-xs-6 col-sm-6 col-md-6">
							            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="LAST NAME">
							            <span class="text-danger lastname mb-font12"></span>
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-12">
								        <input type="text" class="form-control" name="company" id="company" placeholder="COMPANY">
								        <span class="text-danger company mb-font12"></span>
									</div>
									<div class="form-group col-xs-6 col-sm-6 col-md-6">
								        <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE">
								        <span class="text-danger phone mb-font12"></span>
									</div>
									<div class="form-group col-xs-6 col-sm-6 col-md-6">
							            <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL">
							            <span class="text-danger email mb-font12"></span>
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-12">
		            					<textarea class="form-control" name="message" id="message" placeholder="MESSAGE"></textarea>
		            					<span class="text-danger message mb-font12"></span>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div id="res" class="res"></div>
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-12 text-center btn-block">
										<button type="button" id="submitcontract" class="bt-contact">
											SUBMIT
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0 col1-2">
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/contact/mobile/Map-Contact-TPC.webp" alt="Map Contact TPC JPG" media="(max-width: 640px)" loading="lazy">
									<img src="/assets/images/contact/desktop/Map-Contact-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Map Contact TPC JPG" loading="lazy">
						        </picture>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-four">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 p-0 col1-1">
							<div class="contact_logo">
								<div class="col-xs-6 col-sm-6 col-md-7 p-0 col1">
									<div class="content_1">
										<h2>
											LET'S<br>
											GROW<br>
											TOGETHER<br>
										</h2>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-5 p-0 col2">
									<div class="img_block1">
										<picture>
											<source srcset="/assets/images/contact/mobile/Let-is-Grow-Together-Contact-TPC.webp" alt="Let is Grow Together Contact TPC" media="(max-width: 640px)" loading="lazy">
											<img src="/assets/images/contact/desktop/Let-is-Grow-Together-Contact-TPC.webp" width="900" height="350" class="img-fluid ab-img" alt="Let is Grow Together Contact TPC" loading="lazy">
								        </picture>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	<script src="/js/contact_new.js?v={{ time() }}"></script>
	<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
