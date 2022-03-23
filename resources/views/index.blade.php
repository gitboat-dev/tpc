@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/index.css?v={{ time() }}" as="style" crossorigin>
	<link rel="preload stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" as="style" media="all" crossorigin>
@endsection
@section('content')
	<h1 style="display: none;">Thai Polyester Company (TPC)</h1>
	<h2 style="display: none;">We are a leading polyester yarn manufacturer in Thailand.</h2>
	<div id="home">
		<div id="home_bg">
			<div class="section-one">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/home/mobile/Head-Home-Thaipolyester.webp" alt="Head Home Thaipolyester" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/Head-Home-Thaipolyester-1.webp" width="900" height="350" class="img-fluid ab-img img1" alt="Head Home Thaipolyester">
					        </picture>
					        <picture>
								<source srcset="/assets/images/home/mobile/Head-Home-Thaipolyester.webp" alt="Head Home Thaipolyester" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/Head-Home-Thaipolyester-2.webp" width="900" height="350" class="img-fluid ab-img img2" alt="Head Home Thaipolyester">
					        </picture>
				    	</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="content_1">
							<h2>Our Company</h2>
							<p class="p1">
								Thai Polyester Company was established in 2001. We are full integration of fiber polyester manufacturer
                                with a total capacity of 350,000 tons annually, achieved thereby of the innovative technology in the globe.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-two">
				<div class="row m-0 bg-black r1">
					<div class="col-xs-12 col-sm-12 col-md-8 p-0 col1">
						<div class="video-block">
							<video muted loop id="video1" poster="{{ $chkmobile ? "/assets/images/home/mobile/video-Thaipolyester.webp" : "/assets/images/home/desktop/video-Thaipolyester.webp" }}">
								<source src="/assets/images/home/video/Thaipolyester.mp4" type="video/mp4">
							</video>
							<figure>
								<button class="button" id="btn-video1" name="play">
									<picture>
										<source srcset="/assets/images/home/mobile/play-video-Thaipolyester.webp" alt="play video Thaipolyester" loading="lazy" media="(max-width: 640px)">
										<img src="/assets/images/home/desktop/play-video-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="play video Thaipolyester" loading="lazy">
									</picture>
								</button>
							</figure>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2">
						<div class="content_1">
							<p class="p1">
                                Thai Polyester Company (TPC) is a registered company
                                specializing in fiber and filament polyester yarn.
                                We export polyester yarn to many countries.
                                An engineering plant of our production phases has
                                successive through Zimmer AG Germany.
                                Concerning filament and the textured yarn is developed
                                with the latest generation of application
                                on German operation, Barmag take-up.
                                TPC, we landed on 3.2 Million Sq.m. at Ban Bung, Chonburi,
                                far from Laemchabang Port, within 2 hours.
							</p>
							<div class="btn-block">
								<a href="{!!url('/about')!!}" title="About Us">
									<button>ABOUT US</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-three">
				<div class="row m-0 bg-black r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<h2><span class="highlight">Our Textile Business</span></h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2">
						<div class="content_1">
							<div class="logo_block1">
								<img src="/assets/custom/images/home/Asset%2035.png" width="900" height="350" class="img-fluid ab-img" alt="THAI POLYESTER" loading="lazy">
							</div>
							<h4>THAI POLYESTER</h4>
							<p class="p1">
								TPC is a fully integrated polyester manufacturer with capacity of 350,000 tons annually.
                                Our high-quality Polymer process is guaranteed by modern German technology.
							</p>
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/home/mobile/Drawn-Textured-Yarn-or-DTY-Product-Polyester-Thaipolyester.webp" alt="Drawn Textured Yarn or DTY Product Polyester Thaipolyester" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/home/desktop/Drawn-Textured-Yarn-or-DTY-Product-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Drawn Textured Yarn or DTY Product Polyester Thaipolyester" loading="lazy">
								</picture>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3">
						<div class="content_1">
							<div class="logo_block1">
								<img src="/assets/custom/images/home/Asset%2036.png" width="900" height="350" class="img-fluid ab-img" alt="JONG STIT" loading="lazy">
							</div>
							<h4>JONG STIT</h4>
							<p class="p1">
								Jong Stit Co.,Ltd. is a leading textile entrepreneur based in Thailand. JS group is corporate
                                in vertical integration of textile manufacturers leveraging 100% polyester.
							</p>
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/home/mobile/product-jongstit-polyester-thaipolyester.webp" alt="product jongstit polyester thaipolyester" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/home/desktop/product-jongstit-polyester-thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="product jongstit polyester thaipolyester" loading="lazy">
								</picture>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col4">
						<div class="content_1">
							<div class="logo_block1">
								<img src="/assets/custom/images/home/Asset%2037.png" width="900" height="350" class="img-fluid ab-img" alt="JONG STIT" loading="lazy">
							</div>
							<h4>FASHION HOMETEX</h4>
							<p class="p1">
								We are the largest home textile supplier in Thailand, an affiliate of Jong Stit Co.,Ltd. We are
                                distributing innovative products to bring your comforts to meet our quality.
							</p>
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/home/mobile/product-jongstit-polyester-thaipolyester-1.webp" alt="product jongstit polyester thaipolyester" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/home/desktop/product-jongstit-polyester-thaipolyester-1.webp" width="900" height="350" class="img-fluid ab-img" alt="product jongstit polyester thaipolyester" loading="lazy">
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-four">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<h2><span>Our Product</span></h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="content_1">
							<h3 class="m-0">100% Recycled<br>Polyester</h3>
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/home/mobile/Recycled-Polyester-Yarn-Process-Thaipolyester.webp" alt="Recycled Polyester Yarn Process Thaipolyester" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/home/desktop/Recycled-Polyester-Yarn-Process-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img img1" alt="Recycled Polyester Yarn Process Thaipolyester" loading="lazy">
						        </picture>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
						<div class="content_1">
							<p class="p1">
                                For this reason, Thai Polyester limited company (TPC), the <span class="highlight">leading recycled polyester yarn
                                and fiber manufacturer</span> in Thailand, seriously concerned about the environmental problems
                                to protect the ecosystem and the environment for decades.
							</p>
							<a href="{!!url('/recycled-products')!!}" title="Recycled Products">...Continue reading</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-five">
				<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1509517411682 vc_row-no-padding" >
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1508395818862">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  vc_custom_1518850991393">
                                    <div class="wpb_wrapper">

                                        <div id="carousel-example-generic" class="carousel slide mb-height" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                              <li data-target="#carousel-example-generic" data-slide-to="1" class="item1"></li>
                                              <li data-target="#carousel-example-generic" data-slide-to="2" class="item2"></li>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox" >
                                              	<div class="item active" id="seesilde1" closeplay="false">
	                                                <picture>
														<source srcset="/assets/images/home/mobile/Polyester-filament-yarn-Thaipolyester-2.webp" alt="Polyester filament yarn Thaipolyester" loading="lazy" media="(max-width: 640px)">
														<img src="/assets/images/home/desktop/Polyester-filament-yarn-Thaipolyester-2-1.webp" width="900" height="350" class="img-fluid ab-img img1" alt="Polyester filament yarn Thaipolyester" loading="lazy">
											        </picture>
                                              	</div>
                                              	<div class="item" id="seesilde2" closeplay="false">
	                                                <picture>
														<source srcset="/assets/images/home/mobile/Polyester-filament-yarn-Thaipolyester-1.webp" alt="Polyester filament yarn Thaipolyester" loading="lazy" media="(max-width: 640px)">
														<img src="/assets/images/home/desktop/Polyester-filament-yarn-Thaipolyester-1-1.webp" width="900" height="350" class="img-fluid ab-img img1" alt="Polyester filament yarn Thaipolyester" loading="lazy">
											        </picture>
                                              	</div>
                                              	<div class="item" id="seesilde3" closeplay="false">
	                                                <picture>
														<source srcset="/assets/images/home/mobile/Polyester-filament-yarn-Thaipolyester-3.webp" alt="Polyester filament yarn Thaipolyester" loading="lazy" media="(max-width: 640px)">
														<img src="/assets/images/home/desktop/Polyester-filament-yarn-Thaipolyester-3-1.webp" width="900" height="350" class="img-fluid ab-img img1" alt="Polyester filament yarn Thaipolyester" loading="lazy">
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
                <div class="content_1">
    				<div class="content1_1">
    					<h2>Filament</h2>
	                	<p class="p1">
                            Thai polyester Co., Ltd., the leading polyester yarn supplier based in Thailand, has 84,000
                            tons of polyester filament production yearly. TPC manufactures four categories of polyester
                            filament yarn which are;<br>
							• Pre-Oriented Yarn (POY)<br>
							• Fully Drawn Yarn (FDY)<br>
							• Drawn Textured Yarn (DTY)<br>
							• Twisted yarn
	                	</p>
	                	<a href="{{ route('product.filament') }}" title="Filament">...Continue reading</a>
    				</div>
    			</div>
			</div>
			<div class="section-six">
				<div class="row m-0 r1">
					<div class="top-line"></div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1">
						<div class="content_1">
							<h2>Spun yarn</h2>
							<p class="p1">
                                Thai Polyester Co., Ltd. is a professional <span class="highlight">100% polyester fibers and yarns manufacturer</span> in
                                Thailand. We are also the biggest 100% polyester spun yarn manufacturer in Thailand.
                                Thai Polyester provides considerable quantities of <span class="highlight">polyester ring-spun yarn</span> and
                                <span class="highlight">polyester OE spun yarn</span> to the local customers and exports to thread suppliers, knitting, and
                                weaving manufacturers worldwide every year.
							</p>
							<a href="{{ route('product.spun-yarn') }}" title="Spun yarn">...Continue reading</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 p-0 col2">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/home/mobile/Ring-Spinning-Spun-yarn-Thaipolyester.webp" alt="Ring Spinning Spun yarn Thaipolyester" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/Ring-Spinning-Spun-yarn-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spinning Spun yarn Thaipolyester" loading="lazy">
							</picture>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 p-0 col3">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/home/mobile/Rotor-or-Open-End-%28OE%29-Spinning-Spun-yarn-Thaipolyester.webp" alt="Rotor or Open End (OE) Spinning Spun yarn Thaipolyester" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/Rotor-or-Open-End-%28OE%29-Spinning-Spun-yarn-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Rotor or Open End (OE) Spinning Spun yarn Thaipolyester" loading="lazy">
							</picture>
						</div>
					</div>
					<div class="bottom-line"></div>
				</div>
			</div>
			<div class="section-seven">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 bg-black col1">
						<h2>Our Customers</h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 p-0 bg-green col2">
						<div class="content_1">
							<p class="p1 m-0">
                                With our 20 years of experience as a one-stop service polyester yarn and fiber manufacturer
                                in Thailand, we have supplied customers in various industries located in more than 70
                                countries around the world.
							</p>
						</div>
					</div>
				</div>
				<div class="row m-0 r2">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<a title="map office thai polyester" href="/assets/images/home/desktop/Web-Home-Map-thaipolyester.webp" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/Web-Home-Map-thaipolyester.webp">
							<picture>
								<source srcset="/assets/images/home/desktop/Web-Home-Map-thaipolyester.webp" alt="map Thaipolyester customer" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/Web-Home-Map-thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="map Thaipolyester customer" loading="lazy">
							</picture>
						</a>
					</div>
				</div>
				<div class="row m-0 r3">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="content_1">
							<h3 class="m-0">
								<picture>
									<source srcset="/assets/images/home/mobile/star.webp" alt="star" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/home/desktop/star.webp" width="900" height="350" class="img-fluid ab-img" alt="star" loading="lazy">
								</picture>
								Thailand
							</h3>
							<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1_1">
								<ul class="row">
									@if(isset($our_customers) && $our_customers)
										@foreach($our_customers as $c)
											<li class="col-xs-6 col-sm-4 col-md-2-5">{{ $c }}</li>
										@endforeach
									@endif
								</ul>
							</div>
						</div>
						<div class="arrow-block">
							<picture>
								<source srcset="/assets/images/home/mobile/triangle.webp" alt="triangle" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/home/desktop/triangle.webp" width="900" height="350" class="img-fluid ab-img" alt="triangle" loading="lazy">
							</picture>
						</div>
					</div>
				</div>
			</div>
			<div class="section-eight">
				<h2><span>Certifications</span></h2>
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="content_1">
							<div class="col-xs-6 col-sm-6 col-md-4 col1_1">
								<div class="col-xs-12 col-sm-12 col-md-12 p-0">
									<a href="/assets/images/home/desktop/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp?v={{ time() }}">
										<div class="img_block1">
											<picture>
												<source srcset="/assets/images/home/mobile/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp?v={{ time() }}" alt="Global Recycled standard 100% Recycled Polyester Thaipolyester" loading="lazy" media="(max-width: 640px)">
												<img src="/assets/images/home/desktop/Global-Recycled-standard-100-Recycled-Polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img img1" alt="Global Recycled standard 100% Recycled Polyester Thaipolyester" loading="lazy">
									        </picture>
										</div>
									</a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 p-0">
									<a href="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{ time() }}">
										<div class="img_block1">
											<picture>
												<source srcset="/assets/images/home/mobile/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{ time() }}" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy" media="(max-width: 640px)">
												<img src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img img1" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
									        </picture>
										</div>
									</a>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 p-0">
									<a href="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{ time() }}">
										<div class="img_block1">
											<picture>
												<source srcset="/assets/images/home/mobile/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{ time() }}" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy" media="(max-width: 640px)">
												<img src="/assets/images/home/desktop/OEKO-TEX-Confidence-in-Textile-Standard-100-Thaipolyester-1.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img img1" alt="OEKO TEX Confidence in Textile Standard 100 Thaipolyester" loading="lazy">
									        </picture>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col1_2">
								<a href="/assets/images/home/desktop/Green-industry-Activty-Thaipolyester.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/Green-industry-Activty-Thaipolyester.webp?v={{ time() }}">
									<div class="img_block1">
										<picture>
											<source srcset="/assets/images/home/mobile/Green-industry-Activty-Thaipolyester.webp?v={{ time() }}" alt="Green industry Activty Thaipolyester" loading="lazy" media="(max-width: 640px)">
											<img src="/assets/images/home/desktop/Green-industry-Activty-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img img1" alt="Green industry Activty Thaipolyester" loading="lazy">
								        </picture>
									</div>
								</a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col1_3">
								<a href="/assets/images/home/desktop/intertek-Certificate-of-Registration-thaipolyester.webp?v={{ time() }}" data-fancybox="gallery" data-thumbnail-src="/assets/images/home/desktop/intertek-Certificate-of-Registration-thaipolyester.webp?v={{ time() }}">
									<div class="img_block1">
										<picture>
											<source srcset="/assets/images/home/mobile/intertek-Certificate-of-Registration-thaipolyester.webp?v={{ time() }}" alt="intertek Certificate of Registration thaipolyester" loading="lazy" media="(max-width: 640px)">
											<img src="/assets/images/home/desktop/intertek-Certificate-of-Registration-thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img img1" alt="intertek Certificate of Registration thaipolyester" loading="lazy">
								        </picture>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	<script src="/js/index.js?v={{ time() }}"></script>
	<script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
