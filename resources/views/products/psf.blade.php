@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/psf.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
	<h1 style="display: none;">Polyester Staple Fiber</h1>
	<div id="psf">
		<div id="psf_bg">
			<div class="section-one">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 640px)">
								<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester">
					        </picture>
					    </div>
					</div>
				</div>
			</div>
			<div class="section-two">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-8 p-0 bg-black col1">
						<div class="video_1">
							<video muted loop id="video1" poster="{{ $chkmobile ? "/assets/images/psf-new/desktop/ring-spinning-machine-process-video-Thaipolyester.jpg" : "/assets/images/psf-new/mobile/ring-spinning-machine-process-video-Thaipolyester.jpg" }}">
								<source src="/assets/images/psf-new/video/C0258.MP4" type="video/mp4">
							</video>
							<figure>
								<button class="button" id="btn-video1" name="play">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Play-video.webp" alt="Play video" loading="lazy" media="(max-width: 640px)">
										<img src="/assets/images/psf-new/desktop/Play-video.webp" width="900" height="350" class="img-fluid ab-img" alt="Play video" loading="lazy">
									</picture>
								</button>
							</figure>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 bg-black col2">
						<div class="content_1">
							<p class="p1">
                                Thai Polyester Co., Ltd. is a leader of <span class="highlight">Polyester Staple Fiber (PSF), Spun yarn, Filament Yarn (FDY),</span>
                                and <span class="highlight">Draw Textured Yarn (DTY)</span> suppliers in Thailand since 2003. According to the
                                350,000 tons of the firm’s capacity annually, the company has produced and supplied our
                                products to numerous <span class="highlight">knitting, weaving, and garment manufacturers</span> worldwide.
							</p>
							<p class="p2">
								Author : Kanokluck Permpreedanun<br>
								Textile specialist
							</p>
						</div>
						<ul class="box-five-dot-bottom">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="section-three">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1">
						<div class="frame">
							<div class="content_1">
								<p class="p1">
                                    Since TPC was established until the present, the company has developed and won the
                                    enormous trust of our consumers nationally and internationally. Moreover, providing the
                                    customer’s satisfaction in our product quality is the company’s primary standard. Now and
                                    then, our company is still striving to offer and serve the exact customers’ requirements. For
                                    instance, best services, innovations, quick responses, and reasonable prices according to the
                                    company’s missions. However, we are still welcome to hear and adjust if there are any
                                    comments or advice from customers to keep enhancing our products.
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 p-0 col2">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/psf-new/mobile/ring-spinning-machine-process-Thaipolyester.webp" alt="ring spinning machine process Thaipolyester" media="(max-width: 640px)" loading="lazy">
								<img src="/assets/images/psf-new/desktop/ring-spinning-machine-process-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="ring spinning machine process Thaipolyester" loading="lazy">
					        </picture>
					    </div>
					</div>
				</div>
			</div>
			<div class="section-four">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-1.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 640px)" loading="lazy">
								<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-1.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
					        </picture>
					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 bg-black col2">
						<div class="content_1">
								<p class="p1 m-0">
                                    Polyester Staple Fiber (PSF) is a material produced from synthetic chemical compounds with
                                    various uses in the textile, automotive and furniture industries. The phrase "staple fiber"
                                    often refers to natural fiber such as cotton or wool.
								</p>
								<p class="p2 m-0">
                                    Due to the high demand for Polyester Staple Fiber (PSF) in the world's market, PSF is one of
                                    the company's top products. TPC is the recognized Polyester Staple Fiber and Spun yarn
                                    manufacturer with approximately 233,600 tons annually.
								</p>
							</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3">
						<div class="content_1">
							<div class="col-xs-4 col-sm-4 col-md-12 p-0 col3-1">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-2.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-2.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
							        </picture>
							    </div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-12 p-0 col3-2">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-3.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-3.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
							        </picture>
							    </div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-12 p-0 col3-3">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-4.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-4.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
							        </picture>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-five">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-process-Thaipolyester.webp" alt="Polyester Staple Fiber (PSF) process Thaipolyester" media="(max-width: 640px)" loading="lazy">
								<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-process-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) process Thaipolyester" loading="lazy">
					        </picture>
					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2">
						<div class="content_1">
							<p class="p1">
                                Polyester Staple Fiber (PSF) is made from the polymerization process of polyester material
                                such as PTA (Purified Terephthalic Acid) and MEG (Mono Ethylene Glycol) under a high
                                temperature and pressure. Polymer becomes staple fibers after the spinning and drawing
                                process when cut short according to specific cut length.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3">
						<div class="content_1">
							<p class="p1">
                                Deniers and cut length are the significant factors for Polyester Staple Fiber (PSF). The size
                                and length are related to the end product. Denier could be created in numerous sizes up to
                                POY, such as 1.0/1.2/1.4 D, etc. The cut length can be various. Furthermore, most using cut
                                lengths are 31/38/44/51 mm.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col4">
						<div class="content_1">
							<p class="p1">
                                The differences in denier and cut length also affect the difference in-hand feel and product
                                size. The smaller denier and shorter cut length bring a softer and smoother feeling.
							</p>
						</div>
						<ul class="box-ten-dot-bottom">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<br>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="section-six">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1">
						<div class="content_block bg-black">
							<div class="content_1">
								<h2>
                                    There are two types of Polyester Staple Fiber (PSF).
								</h2>
							</div>
						</div>
						<div class="content_block">
							<div class="content_1">
								<h3>
									1.Virgin Polyester Staple Fiber (PSF)
								</h3>
								<ul class="box-ten-dot-bottom">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<br>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2">
						<div class="contents">
							<div class="content_block">
								<div class="content_1">
									<p class="p1">
                                        Virgin Polyester Staple Fiber (PSF) is made from non-renewable polyester and uses an
                                        energy-intensive process. The colors that we provide are:
									</p>
								</div>
							</div>
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-6.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 768px)" loading="lazy">
									<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-6.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
						        </picture>
						    </div>
							<div class="content_block">
								<div class="content_1">
									<h4>1.1 Raw White (RW)</h4>
									<p class="p1">
                                        RW is a natural color for the polyester did not pass any dyed process.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 bg-green col3">
						<div class="contents">
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-5.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 768px)" loading="lazy">
									<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-5.png" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
						        </picture>
						    </div>
						    <div class="content_block">
								<div class="content_1">
									<h4>1.2 Dope Dyed Black (DDB)</h4>
									<p class="p1">
                                        DDB is the black color polyester staple fiber. The black master-batch creates the black color
                                        since the beginning of the POY process with high-temperature. Therefore, DDB PSF will have
                                        non-staining function quality and pale color.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-seven">
				<div class="row m-0 bg-black r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1-1">
							<div class="content_1">
								<h3 class="desktop">
                                    2. Recycled<br>
                                    Polyester<br>
                                    Staple<br>
                                    Fiber<br>
                                    (GPSF)
								</h3>
								<h3 class="mobile">
                                    2. Recycled
                                    Polyester
                                    Staple
                                    Fiber
                                    (GPSF)
								</h3>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1-2">
							<div class="content_1">
								<p class="p1">
                                    The colors of recycled polyester staple fiber which TPC provides are:
								</p>
								<h4>2.1 Raw White (RW)</h4>
								<p class="p2">
                                    RW is slightly different from virgin PSF; its color looks pretty yellow, which is natural from
                                    the process.
								</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1-3">
							<div class="content_1">
								<h4>2.2 Dope Dyed Black (DDB)</h4>
								<p class="p1">
                                    DDB for recycled polyester looks similar to virgin PSF. It contains a black master-batch since
                                    the process of melting before injecting. For this reason, there is no difference between
                                    Dope-Dyed Black virgin PSF and Dope Dyed Black Recycled PSF by vision.
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2-1">
							<div class="content_1">
								<p class="p1 m-0">
                                    Recycled Polyester Staple Fiber is made from PET/Polyester waste and post-consumer PET
                                    bottles.
								</p>
								<p class="p2 m-0">
                                    Recycled polyester, also known as R-PET, is obtained by melting down existing plastic and
                                    re-spinning it into new polyester fiber. It is a great way to divert plastic from our landfills
                                    and the production of recycled polyester requires far fewer resources than new fibers and
                                    generates fewer Co2 emissions.
								</p>
							</div>
							<ul class="box-five-dot-bottom">
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-8 p-0 col2-2">
							<div class="img_block1 imbcol-2-2">
								<picture>
									<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-7.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 768px)" loading="lazy">
									<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-7.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
						        </picture>
						    </div>
							<div class="content_1 ctcol-2-2">
								<p class="p1">
                                    But there is a mechanical test to detect which one is made from recycled and made from a
                                    virgin. It has standardized testing. Typically, the recycled fibers and yarns will be tested by a
                                    third party qualified by Global Recycled Standard (GRS), the standard certificate of recycling
                                    material, and the tracking process.
								</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2-3">
						</div>
					</div>
				</div>
			</div>
			<div class="section-eight">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<h2>PSF luster</h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2-1">
							<div class="content_1">
								<p class="p1">
                                    Refers to the degree of light reflected from surfaces of fibers or the degree of gloss or sheen that the fiber possesses.
								</p>
								<h3>1.Full dull</h3>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2-2">
							<div class="img_block1">
								<picture>
									<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-8.webp" alt="Polyester Staple Fiber (PSF) Thaipolyester" media="(max-width: 768px)" loading="lazy">
									<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Thaipolyester-8.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Thaipolyester" loading="lazy">
						        </picture>
						        <ul class="box-five-dot-bottom">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
						    </div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2-3">
							<div class="content_1">
								<h3>2.Semi-dull</h3>
								<p class="p1">
                                    Semi-dull yarn is manufactured from raw materials with low luster compared to partially
                                    oriented bright yarns used to manufacture semi-dull polyester textured yarn.
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3-1">
							<div class="content_1">
								<p class="p1">
                                    Full dull yarns are manufactured from raw materials modified chemically and physically to
                                    reduce their normal luster. A few of the qualities of full dull yarns are that they have high
                                    tenacity and strength and look like cotton fiber. In addition, these yarns are of good
                                    pendent, soft visual appeal and a strong covering. Full dull yarns have various applications in
                                    manufacturing apparel, home textiles, etc.
								</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3-2">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3-3">
							<div class="content_1">
								<p class="p1">
                                    Semi dull, partially oriented yarns have more strength and durability. The end-user
                                    applications of semi-dull partially oriented yarns are in the garment and apparel industries
                                    for weaving and embroidery works. These semi-dull yarns are available in various deniers and filaments.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-nine">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1">
						<div class="content_1">
							<h2>What kind of product is made from Polyester Staple Fiber (PSF)?</h2>
							<h3>1. Soften product</h3>
							<p class="p1">
                                PSF Yarn is used in Non-Woven carpets, wadding,
                                and filtration industries as a poly-fill for stuffing
                                cushions, pillows, soft toys, quilts, etc.
							</p>
							<ul class="box-ten-dot-bottom">
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<br>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 p-0 col2">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/psf-new/mobile/Product-Polyester-jongstit-Thaipolyester.webp" alt="Product Polyester jongstit Thaipolyester" media="(max-width: 768px)" loading="lazy">
								<img src="/assets/images/psf-new/desktop/Product-Polyester-jongstit-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Product Polyester jongstit Thaipolyester" loading="lazy">
					        </picture>
					    </div>
					</div>
				</div>
			</div>
			<div class="section-ten">
				<div class="row m-0 bg-black r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="content_1">
							<h3>2. Produce spun yarn</h3>
							<p class="p1">
                                PSF is also used for spinning yarns or spun yarn and making geo-textiles.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="content_1">
							<div class="col-xs-6 col-sm-6 col-md-3 p-0 col2-1">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Produce-spun-yarn-Thaipolyester-1.webp" alt="Produce spun yarn Thaipolyester" media="(max-width: 768px)" loading="lazy">
										<img src="/assets/images/psf-new/desktop/Produce-spun-yarn-Thaipolyester-1.webp" width="900" height="350" class="img-fluid ab-img" alt="Produce spun yarn Thaipolyester" loading="lazy">
							        </picture>
							    </div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 p-0 col2-2">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Produce-spun-yarn-Thaipolyester-2.webp" alt="Produce spun yarn Thaipolyester" media="(max-width: 768px)" loading="lazy">
										<img src="/assets/images/psf-new/desktop/Produce-spun-yarn-Thaipolyester-2.webp" width="900" height="350" class="img-fluid ab-img" alt="Produce spun yarn Thaipolyester" loading="lazy">
							        </picture>
							    </div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 p-0 col2-3">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Produce-spun-yarn-Thaipolyester-3.webp" alt="Produce spun yarn Thaipolyester" media="(max-width: 768px)" loading="lazy">
										<img src="/assets/images/psf-new/desktop/Produce-spun-yarn-Thaipolyester-3.webp" width="900" height="350" class="img-fluid ab-img" alt="Produce spun yarn Thaipolyester" loading="lazy">
							        </picture>
							    </div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 p-0 col2-4">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/psf-new/mobile/Produce-spun-yarn-Thaipolyester-4.webp" alt="Produce spun yarn Thaipolyester" media="(max-width: 768px)" loading="lazy">
										<img src="/assets/images/psf-new/desktop/Produce-spun-yarn-Thaipolyester-4.webp" width="900" height="350" class="img-fluid ab-img" alt="Produce spun yarn Thaipolyester" loading="lazy">
							        </picture>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-eleven">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<h2>Polyester Staple Fiber (PSF) product we provide:</h2>
					</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                        <table>
                            <thead>
                                <tr>
                                    <th width="21.5%">YARN TYPE</td>
                                    <th width="21.5%">DENIER</td>
                                    <th width="22%">CUT<br> LENGTH<br> (MM)</td>
                                    <th width="17.5%">TYPE</td>
                                    <th width="17.5%">COLOR</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2" class="fw-600">PSF<br>Virgin</td>
                                    <td class="td-back fw-600 psf-font-1">*1.0,1.2*</td>
                                    <td rowspan="2">32,38,44,51</td>
                                    <td rowspan="2">Virgin</td>
                                    <td>RW</td>
                                </tr>
                                <tr>
                                    <td class="psf-font-2">1.4</td>
                                    <td>DDB</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="fw-600">PSF<br>Recycled</td>
                                    <td class="td-back fw-600 psf-font-1">*1.2*</td>
                                    <td rowspan="2">32,38,44,51</td>
                                    <td rowspan="2">Recycled</td>
                                    <td>RW</td>
                                </tr>
                                <tr>
                                    <td class="psf-font-2">1.4</td>
                                    <td>DDB</td>
                                </tr>
                            </tbody>
                        </table>
					</div>
				</div>
			</div>
            <div class="section-twelve bg-black">
                <div class="row m-0 r1">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <h3 class="text_green text-center">
                            We can help your business grow!
                        </h3>
                        <h2 class="text_green text-center">
                            <span class="text_light">Be Our Success</span><br>
                            Partner
                        </h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <div class="content-block">
                            <div class="content-group">
                                <h1 class="text_green text-center">CONTACT US</h1>
                                <form id="contact-form" data-request="contact" autocomplete="off">
									<div class="form-group col-xs-12 col-sm-12 col-md-12">
							            <input type="text" class="form-control" name="name" id="name" placeholder="NAME*">
							            <span class="text-danger name mb-font12"></span>
									</div>
									{{-- <div class="form-group col-xs-6 col-sm-6 col-md-6">
							            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="LAST NAME">
							            <span class="text-danger lastname mb-font12"></span>
									</div> --}}
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
            </div>
		</div>
	</div>
@endsection
@section('custom-script')
	<script src="/js/psf.js?v={{ time() }}"></script>
@endsection
