
@extends('layouts.template')

@section('style')

<link rel="stylesheet" href="/css/aboutus.css?v=0058">
@endsection
@section('content')
<div id="about">
	<div class="section-one">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="box-content">
						<div class="box-content-header">
							<img src="/assets/custom/images/aboutus/desktop/logo.webp" width="120" height="71" class="logo" alt="logo thaipolyester" loading="lazy">
						</div>
						<div class="box-content-aria">
							<p class="paragraph">
                                Thai Polyester Company (TPC) is a leading polyester yarn manufacturer in Thailand.
                                The company has proficiently provided a wide rank of fiber and yarn products such as POY, FDY, DTY,
                                staple fiber, and spun yarn in raw white, mélange, dope dyed, and yarn-dyed,
                                especially for textile application to respond to the customer in different industries.
                            </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-two">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6 p-0">
					<picture>
						<source srcset="/assets/custom/images/aboutus/mobile/about-us.webp" alt="about us thaipolyester" loading="lazy" media="(max-width: 640px)">
						<img src="/assets/custom/images/aboutus/desktop/about-us.webp" width="900" height="350" class="img-fluid ab-img" alt="about us thaipolyester" loading="lazy">
			        </picture>
				</div>
				<div class="col-md-6 col-sm-6 p-0">
					<div class="banner">
						<video muted loop id="video1" poster="{{ $m == 0 ? "/assets/custom/images/aboutus/desktop/VDO.webp" : "/assets/custom/images/aboutus/mobile/VDO.webp" }}">
				            <source src="/assets/custom/images/aboutus/about.mp4" type="video/mp4">
				        </video>
						<figure class="video1">
							<button class="button" id="btn-video1" name="play"></button>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-three">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="box-content">
						<div class="box-content-aria">
							<p class="paragraph text-align-justify">
                                This leads TPC into an expert in the polyester <br>filament and yarn manufacturer, polyester
                                staple fiber producer, polyester spun yarn manufacturer, polyester twist yarn supplier and
                                Dope Dyed polyester yarn manufacturer
                            </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-four">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="box-content-left">
						<img src="/assets/custom/images/aboutus/desktop/recycled_polyester_yarn.webp" width="510" height="669" class="img-fluid" alt="recycled polyester yarn thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6 p-0">
					<div class="box-content-right">
						<div class="box-content-aria">
							<div class="box-content-header">
								<h2>Recycled</h2>
								<h2>Polyester Yarn</h2>
								<div class="box-circle">
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
						</div>
						<p class="paragraph text-align-justify">
                            TPC is also well known as a recycled polyester yarn supplier in both fiber and filament.
                            In addition, the company has developed a new product line called “EcoTPC” a Thai sustainable brand.
                            It is originated from regenerated PET bottles, fabric and yarn waste into polyester yarn.
                            All of the products are certified by GRS. Therefore, the customers can trace back
                            on our recycled yarn and fiber composed of 100% post & pre-consumer depending on customer requirement.
                        </p>
					</div>
					<div class="box-circle-two">
						<table>
							<tr>
								<td><div></div></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td><div></div></td>
								<td><div></div></td>
							</tr>
							<tr>
								<td><div></div></td>
								<td><div></div></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-five">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="box-left">
						<h2>Certifications</h2>
						<p class="paragraph text-align-justify">
                            Thai Polyester Company supplies the
                            customers worldwide, including
                            knitting, weaving and garment
                            factories in America, Europe, Asia
                            Pacific, Asia, Southeast Asia and Africa.
                        </p>
						<p class="paragraph text-align-justify">
                            Our products are certified by
                            international standards such as ISO
                            9001:2015 and STANDARD 100 by
                            OEKO-TEX® quality control.
                        </p>
						<img src="/assets/custom/images/aboutus/desktop/oeko-tex.webp" width="400" height="149" class="img-fluid oeko-tex" alt="oeko tex thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6 p-0">
					<div class="box-right">
						<img src="/assets/custom/images/aboutus/desktop/img-middle-certificates.webp" width="204" height="760" class="img-fluid img-backgrount-center d-mobile-none" alt="img middle certificates thaipolyester" loading="lazy">
						<div class="backgrount-center d-mobile-none"></div>
						<img src="/assets/custom/images/aboutus/desktop/ISO-9001-Intertek-768x529.webp" width="180" height="123" class="img-fluid" alt="ISO 9001 Intertek thaipolyester" loading="lazy">
						<p class="paragraph text-align-justify">
                            According to Oeko-Tex® Standard 100, a
                            first-class product for baby articles, the
                            inspection results have shown that these
                            products comply with the human-ecological
                            requirements of the currently established standard.
                        </p>
						<p class="paragraph text-align-justify">
                            The company developed products
                            considerably and became the top
                            polyester yarn supplier for our customers
                            worldwide.
                        </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-six">
		<picture>
			<source srcset="/assets/custom/images/aboutus/mobile/oss-mobile.webp" media="(max-width: 767px)">
			<source srcset="/assets/custom/images/aboutus/desktop/oss-1024.webp" media="(max-width: 1024px)">
			<source srcset="/assets/custom/images/aboutus/desktop/oss-1600.webp" media="(max-width: 1600px)">
			<img src="/assets/custom/images/aboutus/desktop/oss-1920-1.webp" width="1920" height="1036" class="img-fluid circle" alt="One Stop Service" loading="lazy">
        </picture>
	    <div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 p-0">
						<div class="box-left">
							<ul class="round">
								<li>
									<h2 class="text-align-justify">One-Stop Service</h2>
								</li>
								<li>
									<p class="paragraph text-align-justify">
                                        With long experience, the
                                        company has gained confidence
                                        from both local and global
                                        consumers. As a result, TPC is a
                                        one-stop service polyester yarn
                                        and fiber manufacturer with a capacity of 350,000 tons annually.
                                    </p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 p-0">
						<div class="box-right">
							<ul class="round">
								<li>
									<p class="paragraph text-align-justify">
                                        Furthermore, our manufacturer is
                                    </p>
								</li>
								<li>
									<p class="paragraph text-align-justify">
                                        landed on 800 Acres (3.2
                                        Million Sq.m), situated at Ban Bung district, Chonburi
                                        province, 50 km away from Laem Chabang, Thailand main
                                        port, very convenient for our export customers.
                                    </p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-seven">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 p-0">
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-1.webp" width="116" height="116" class="img-fluid circle" alt="Offer High Quality And Best One Stop Service thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">
                                    {{-- Offer High Quality And Best One Stop Service --}}
                                    High-Quality, One-Stop Service
                                </p>
							</li>
							<li>
								<p class="paragraph text-align-justify">
                                    {{-- We are polyester yarn and fiber manufacturer with high quality products and provide the best one stop service. The company supplies variety products from Fiber to yarn, from virgin to recycle. The customer’s satisfaction is the company’s first priority goal. --}}
                                    We produce a high-quality product with German technology and provide the best one-stop
                                    service. In addition, the company supplies various types of fibers and yarn in virgin and
                                    recycled. Customer satisfaction is our priority.
                                </p>
							</li>
						</ul>
					</div>
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-2.webp" width="116" height="116" class="img-fluid circle" alt="Serve Customers with Innovative Product thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">
                                    {{-- Serve Customers with Innovative Product --}}
                                    Innovative Product
                                </p>
							</li>
							<li>
								<p class="paragraph text-align-justify">
                                    {{-- We emphasize on our products through research and development by using up-to-date technology in all production process in order to serve international consumers. --}}
                                    We emphasize our products through research and development by using up-to-date
                                    technology in all production processes to serve international consumers.
                                </p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 p-0">
					<div class="our-mission">
						<h2>Our Missions</h2>
						<p class="paragraph text-align-justify">
                            {{-- To meet our mission, we determined to provide --}}
                            Your Priority is Our Intention.
                        </p>
						<img src="/assets/custom/images/aboutus/desktop/our-mission-5.webp" width="634" height="947" class="img-fluid" alt="Our Mission thaipolyester" loading="lazy">
						<div class="box-circle-two">
							<table>
								<tbody>
									<tr>
										<td><div></div></td>
										<td><div></div></td>
									</tr>
									<tr>
										<td><div></div></td>
										<td><div></div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 p-0">
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-3.webp" width="116" height="116" class="img-fluid circle" alt="Give Quick Response to Customer Requirement thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">
                                    {{-- Give Quick Response to Customer Requirement --}}
                                    Quick Response
                                </p>
							</li>
							<li>
								<p class="paragraph text-align-justify custom-heigth">
                                    {{-- The most important thing in providing excellent customer service is to respond promptly and understanding to the customer’s requirement. --}}
                                    The most important thing in providing excellent customer service is responding promptly
                                    and understanding the customer’s requirements.
                                </p>
							</li>
						</ul>
					</div>
					<div class="card">
						<img src="/assets/custom/images/aboutus/desktop/our-mission-4.webp" width="116" height="116" class="img-fluid circle" alt="Provide Yarns with Competitive Price thaipolyester" loading="lazy">
						<ul>
							<li>
								<p class="paragraph">
                                    {{-- Provide Yarns with Competitive Price --}}
                                    Competitive Price
                                </p>
							</li>
							<li>
								<p class="paragraph text-align-justify">
                                    {{-- Due to the high competition in global market, we offer high quality yarns with reasonable prices. This is because we are one of the biggest vertical polyester yarn and fiber suppliers in Thailand. --}}
                                    Due to the high competition in the global market, we offer high-quality yarns at a
                                    reasonable price because we are one of the biggest vertical polyester yarn and fiber
                                    suppliers in Thailand.
                                </p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-eight">
		<div class="box-circle-two">
			<table>
				<tbody>
					<tr>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
						<td><div></div></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="section-nine">
		<picture>
			<source srcset="/assets/custom/images/aboutus/mobile/what-we-do.webp" alt="" loading="lazy" media="(max-width: 767px)">
			<img src="/assets/custom/images/aboutus/desktop/what-we-do-1920.webp" width="1920" height="399" class="img-fluid circle" alt="what we do banner thaipolyester" loading="lazy">
        </picture>
	</div>
	<div class="section-ten">
		<div class="container-fluid">
			<div class="row row-custom">
				<div class="col-md-6 p-0 bg-white">
					<div class="box-content">
						<div class="box-left">
							<ul class="round">
								<li>
									<p class="paragraph text-align-justify">
                                        <b>Polyester Staple Fiber (PSF)</b> is made directly from PTA & MEG through the spinning and
                                        fiber line process. PSF is used for the spinning process of Spun Yarns, such as Ring Spun and
                                        Open End. There are two main specs of PSF; 1.2 Denier for general requirements and 1.0
                                        Denier for a special product that requires a high softener and durability.
                                    </p>
								</li>
							</ul>
						</div>
						<div class="box-left bg-black">
							<ul class="round">
								<li>
									<p class="paragraph text-align-justify">
                                        <b>Fully Drawn Yarn (FDY)</b> is produced by a process similar to POY. However, the yarn is
                                        produced at higher spinning speeds coupled with intermediate drawing integrated into the
                                        process. FDY can be knitted or woven with other filament yarn to get various fabrics. For
                                        industrial applications requiring uniformity, consistent tenacity, elongation, and shrinkage.
                                    </p>
								</li>
							</ul>
						</div>
						<div class="box-bg-p box-bg-p-cus">
							<div class="row row-custom">
								<div class="col-md-1 p-0 bg-black d-mobile-none"></div>
								<div class="col-md-12 p-0">
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Monofilament</b> is also known as single polyester yarns, mother yarn for splitting. This
                                                    product is made from FDY. Due to TPC being vertical polyester yarn manufacture, the quality
                                                    of Monofilament has been controlled since FDY process. There are only 2 Deniers; 20/1 and
                                                    30/1. Monofilament yarns provide a soft touch and good physical properties.
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Ring-spun</b> is made by twisting and thinning the polyester strands to make a fine, strong, soft
                                                    rope of polyester fibers.
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-left">
										<img src="/assets/custom/images/aboutus/desktop/recycled-products.webp" width="721" height="322" class="img-fluid circle" alt="Recycled products with GRS certificate thaipolyester" loading="lazy">
									</div>
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Recycled products with GRS certificate</b> - our Recycled products come from 2 sources: PET
                                                    post-consumer bottle and fabrics waste & yarn. It depends on customer requirements. Our
                                                    products are guaranteed by the Global Recycle Standard (GRS) was originally developed by
                                                    Control Union Certifications.
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-left">
										<img src="/assets/custom/images/aboutus/desktop/dope-dyed-black-yarn.webp" width="892" height="266" class="img-fluid circle" alt="Dope Dyed Black yarn thaipolyester" loading="lazy">
									</div>
									<div class="box-left">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    {{-- <b>Dope Dyed Black yarn</b> are created by adding a black masterbatch colorant to the polymer melt in spinning or extrusion This results in fibers and filaments that are fully impregnated with pigment coming out of the spinnerets in a one step process. The strong point of dope dyed black yarn is wet  fastness property and the competitive of price. --}}
                                                    <b>Dope-Dyed Black yarn</b> is created by adding a black masterbatch colorant to the polymer
                                                    melt in spinning or extrusion. This results in fibers and filaments being fully impregnated
                                                    with pigment coming out of the spinnerets in a one-step process. The strength of the dope-dyed
                                                    black yarn is wet fastness property and competitive price.
                                                </p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 bg-white">
					<div class="box-content box-content-right">
						<div class="box-bg-p">
							<div class="row row-custom">
								<div class="col-md-12 p-0">
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Partially Oriented Yarn (POY)</b> is the first yarn made directly from PTA and MEG using the
                                                    spinning and take-up process and mainly used in texturizing to make textured yarn (DTY).
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-1.webp" width="892" height="266" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Drawn Textured Yarn (DTY)</b> is a textured yarn product. It is made from POY by the
                                                    texturizing process by spindle machine. It is the most used texturing process in the textile
                                                    industry owing and can be manufactured in various colors, texture creating a natural feel,
                                                    high durability, and retention properties.
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Twisted Yarn</b> is the spiral arrangement of the fibers around the axis of the yarn. The twist
                                                    binds the fibers together and contributes to the yarn's strength. The firm produces two
                                                    types of Twist yarn; S Twist or Left –twist and Z Twist or Right-twist.
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-2.webp" width="887" height="472" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Open-end</b> - the fiber sliver is separated into single fibers. An air stream brings the separated
                                                    fiber material to a collecting surface from which it is drawn off while being twisted.
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-3.webp" width="926" height="599" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Yarn-Dyed</b> is made by dyeing process at the dyeing machine which is made a small order as
                                                    to the size of the machine.
                                                </p>
											</li>
										</ul>
									</div>
									<div class="box-right">
										<img src="/assets/custom/images/aboutus/desktop/what-we-do-4.webp" width="721" height="823" class="img-fluid circle" alt="what we do thaipolyester" loading="lazy">
									</div>
									<div class="box-right">
										<ul class="round">
											<li>
												<p class="paragraph text-align-justify">
                                                    <b>Semi-dull</b> is a white and slightly opaque polyester type.
                                                </p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-eleven">
		<div class="container-fluid">
			<div class="row row-custom">
				<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
					<div class="box-card-left">
						<h2>Leading-</h2>
						<h2>Edge</h2>
						<h2>Process</h2>
						<h2>Technology</h2>
						<p class="paragraph text-align-justify">
                            An engineering plant of TPC’s production phases has successive through Zimmer AG
                            Germany to enhance the premium quality. The filament and textured yarn are developed
                            with the latest application on German operation, Barmag, take-up. The company always
                            selects modern and innovative technology equipment from Germany.
                        </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="box-card-center">
						<img src="/assets/custom/images/aboutus/desktop/leading-edge-process-technology-1.webp" width="695" height="1345" class="img-fluid circle" alt="leading edge process technology thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="box-card-right-area">
						<div class="box-card-right">
							<div class="box-circle-two">
								<table>
									<tbody>
										<tr>
											<td><div></div></td>
											<td><div></div></td>
											<td><div></div></td>
											<td><div></div></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="box-card-right-content">
							<p class="paragraph">
                                The state-of-art technology remarks us a reliable supplier and we serve the customers with TOP QUALITY.
                            </p>
							<img src="/assets/custom/images/aboutus/desktop/leading-edge-process-technology-2.webp" width="382" height="382" class="img-fluid circle" alt="leading edge process technology thaipolyester" loading="lazy">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-twelve">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 p-0">
					<div class="box-content-aria">
						<img src="/assets/custom/images/aboutus/desktop/our-history.webp" width="726" height="797" class="img-fluid circle" alt="Our history thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6">
					<div class="box-right-aria">
						<div class="box-right-content">
							<h2>2001</h2>
							<p class="paragraph text-align-justify">Signed contract with Zimmer AG, Germany and began construction.</p>
							<hr>
							<h2>2003</h2>
							<p class="paragraph text-align-justify">Start production on 16 June with raw white polyester fiber.</p>
							<hr>
							<h2>2005</h2>
							<p class="paragraph text-align-justify">Start fiber line-II , Mono filament, investment on Honest Logistic Co., Ltd.</p>
							<hr>

							<h2>2006</h2>
							<p class="paragraph text-align-justify">Certified the quality system as a requirement of ISO9001:2000</p>
							<hr>
							<h2>2007</h2>
							<p class="paragraph text-align-justify">Start new POY Line K, Mono textured Modified Line H = 8 end to 16 end.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 p-0 d-mobile-show">
					<img src="/assets/custom/images/aboutus/desktop/recycled polyester.webp" width="726" height="832" class="img-fluid circle" alt="recycled polyester thaipolyester" loading="lazy">
				</div>
				<div class="col-md-6">
					<div class="box-right-aria">
						<div class="box-right-content">
							<h2>2008</h2>
							<p class="paragraph text-align-justify">Established a Modern PET Co., Ltd. to recycle PET bottles to recycled polyester.</p>
							<hr>
							<h2>2009</h2>
							<p class="paragraph text-align-justify">Modified Line G,C,D 8 end to 16 end 2 winder in 1 position, Modified Line K to test produced dope-dyed.</p>
							<hr>
							<h2>2010</h2>
							<p class="paragraph text-align-justify">Production of R-POY , R-PSF from PET bottle flakes.</p>
							<hr>

							<h2>2011</h2>
							<p class="paragraph text-align-justify">Production of Dope dyed Line G , Investment on Masterbatch compound for launched Dope dyed polyester yarn.</p>
							<hr>
							<h2>2012</h2>
							<p class="paragraph text-align-justify">Started producing recycled polyester Popcorn from in-house polyester waste for recycled made, Production of Doped dyed PSF.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 p-0 d-mobile-none">
					<img src="/assets/custom/images/aboutus/desktop/recycled polyester.webp" width="726" height="832" class="img-fluid circle" alt="recycled polyester thaipolyester" loading="lazy">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box-right-img-center">
						<img src="/assets/custom/images/aboutus/desktop/icon-recycle.webp" width="254" height="243" class="img-fluid circle" alt="icon recycle thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6">
					<div class="box-content-aria box-content-aria-custom">
						<img src="/assets/custom/images/aboutus/desktop/ecotpc.webp" width="516" height="565" class="img-fluid circle" alt="eco thaipolyester" loading="lazy">
					</div>
				</div>
				<div class="col-md-6">
					<div class="box-right-aria">
						<div class="box-right-content">
							<div class="box-circle-two">
								<table>
										<tbody>
											<tr>
												<td><div></div></td>
												<td><div></div></td>
											</tr>
										</tbody>
								</table>
							</div>
							<h2>2013</h2>
							<p class="paragraph text-align-justify">Investment in a Biomass steam boiler for saving energy. Expansion production of dope dyed filament.</p>
							<hr>
							<h2>2014</h2>
							<p class="paragraph text-align-justify">Recycled from "internal yarn waste."</p>
							<hr>
							<h2>2015</h2>
							<p class="paragraph text-align-justify">Recycled from "internal fabric waste" with the GREEN project.</p>
							<hr>

							<h2>2019</h2>
							<p class="paragraph text-align-justify">Launched a new brand, “ ECOTPC ”</p>
							<hr>
							<h2>2021</h2>
							<p class="paragraph text-align-justify">Start new fiber line produce polyester staple fiber 1.0 Denier.</p>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('custom-script')
	<script src="/js/about.js?v={{ time() }}"></script>
@endsection
