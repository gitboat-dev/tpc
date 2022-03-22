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
								Thai Polyester Co., Ltd. is a leader of
								<span class="highlight">Polyester Staple Fiber (PSF), Spun yarn,
								Filament Yarn (FDY),</span> and <span class="highlight">Draw Textured
								Yarn (DTY)</span> supplier in Thailand since
								2003. According to more than 300,000
								tons of the firm’s capacity annually, the
								company has produced and supplied our
								products to
								numerous <span class="highlight">knitting, weaving, and garment
								manufacturers</span> around the world.
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
									Since TPC has been established until
									present, the company has developed and
									won the huge trusts of our consumers
									internationally. Moreover, providing the
									customer’s satisfied in our product quality
									is the company’s main standard. Now and
									then, our company is still striving in
									offering and serving customers’
									requirements. For example, best services,
									new innovation, quick responds and
									reasonable prices as per company’s
									missions. However, we are still welcomed
									to hear and adjust if there are any
									comments or advise from customers in
									order to keep enhancing our products.
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
									Polyester Staple Fiber (PSF) is a
									material produced from synthetic
									chemical compounds with a variety of
									uses in the textile, automotive and
									furniture industries. The phrase "staple
									fiber" often refers to a kind of natural
									fiber such as cotton or wool.
								</p>
								<p class="p2 m-0">
									Due to the high demanding of
									polyester staple fiber (PSF) in the world’s
									market, PSF is one of the company’s top
									products TPC, as TPC is the recognized
									Polyester Staple Fiber and Spun yarn
									manufacturer with the approximate
									233,600 ton annually capacity.
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
								Polyester Staple Fiber (PSF) is made
								from polymerization process of polyester
								material such as PTA (Purified
								Terephthalic Acid) and MEG (Mono
								Ethylene Glycol) under a high
								temperature and pressure. After the
								spinning and drawing process, polymer
								becomes staple fibers when cut short
								according to specific cut length.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3">
						<div class="content_1">
							<p class="p1">
								Deniers and cut length are the major
								factors which are very important for PSF,
								size and length will be related with the
								end product. Denier could be created in
								numerous sizes up to POY such as
								1.0/1.2/1.4 D etc. The cut length can be
								various. Furthermore, mostusing cut
								lengths are 31/38/44/51 mm.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 col4">
						<div class="content_1">
							<p class="p1">
								The differences of denier and cut length
								also effects on the difference of hand feel
								and size of products. The smaller denier
								and shorter cut length bring about softer
								and smoother feeling.
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
									A.There are two types of Polyester Staple Fiber.
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
										Virgin polyester staple fiber (PSF) is
										made from a non-renewable polyester
										and using an energy intensive process.
										Therefore, virgin PSF is produced from
										PFY which is non-renewable polyester.
										The colors that we provide are:
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
										RW is the nature color of the polyester,
										not pass any dyed process.
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
									<h4>1.2 Dope Dye Black (DDB)</h4>
									<p class="p1">
										DDB is the black color polyester staple
										fiber. The black color is created by the
										black master-batch since the beginning of
										POY process with high temperature.
										Therefore, DDB PSF will have non-staining
										function quality and pale color.
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
									The colors of recycled polyester staple
									fiber which TPC provides are:
								</p>
								<h4>2.1 Raw White (RW)</h4>
								<p class="p2">
									RW for recycled polyester staple fiber is
									slightly difference from any virgin
									polyester PSF. Its color looks fairly yellow
									which is natural from the process.
								</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col1-3">
							<div class="content_1">
								<h4>2.2 Dope Dye Black (DDB)</h4>
								<p class="p1">
									DDB for recycled polyester looks similar
									to virgin PSF. It also contains black
									master-batch since the process of melting
									before injecting. For this reason, there is
									no difference between Dope Dye Black
									virgin PSF and Dope Dyed Black Recycled
									staple fiber by vision.
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2-1">
							<div class="content_1">
								<p class="p1 m-0">
									Recycled polyester staple fiber is made
									from PET/Polyester waste and post
									consumer PET bottles.
								</p>
								<p class="p2 m-0">
									Recycled polyester, also known as
									R-PET, is obtained by melting down
									existing plastic and re-spinning it into
									new polyester fiber. It is a great way to
									divert plastic from our landfills and the
									production of recycled polyester requires
									far fewer resources than new fibers and
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
									But there is a mechanical test to detect
									which one is made from recycle and which
									one is made from virgin. It also has a
									standard testing. Normally, the
									recycled fibers and recycled yarns will be
									tested by third party which qualified by
									Global Recycled Standard (GRS), the standard
									certificate of recycling material and
									tracking process.
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
						<h2>B. PSF luster</h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col2-1">
							<div class="content_1">
								<p class="p1">
									Luster refers to the degree of light that
									is reflected from the surface of a fiber or
									the degree of gloss or sheen that the fiber
									possesses.
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
								<h3>2. Semi-dull</h3>
								<p class="p1">
									Semi-dull yarn are manufactured from
									the raw materials which have low luster as
									compared to partially oriented bright
									yarns are used to manufacture semi dull
									polyester textured yarns.
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3-1">
							<div class="content_1">
								<p class="p1">
									Full dull yarns are manufactured from
									the raw materials which are modified
									chemically and/or physically to reduce
									their normal luster. Few of the qualities of
									full dull yarns are, they have high
									tenacity, strength and look like cotton
									fiber. These yarns are of good pendent,
									soft visual appeal and a strong covering.
									Full dull type of yarns have various
									applications in manufacturing apparels,
									home textiles etc.
								</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3-2">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 p-0 col3-3">
							<div class="content_1">
								<p class="p1">
									Semi dull partially oriented yarns have
									more strength and durability.
									The end user applications of semi dull
									partially oriented yarns are in the
									garment and apparel industries for
									weaving and for doing embroidery works.
									These semi dull yarns are available in
									various deniers and filaments.
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
							<h2>C. What kind of product is from PSF?</h2>
							<h3>1. Soften product</h3>
							<p class="p1">
								PSF Yarn is used in Non-Woven carpets,
								wadding, filtration industries, as a
								poly-fill for stuffing cushions, pillows, soft
								toys, quilts etc.
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
						<h2>E. Polyester Staple Fiber (PSF) Product which TPC provide</h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/psf-new/mobile/Polyester-Staple-Fiber-%28PSF%29-Product-which-Thaipolyester-provide.webp" alt="Polyester Staple Fiber (PSF) Product which Thaipolyester provide" media="(max-width: 640px)" loading="lazy">
								<img src="/assets/images/psf-new/desktop/Polyester-Staple-Fiber-%28PSF%29-Product-which-Thaipolyester-provide.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Staple Fiber (PSF) Product which Thaipolyester provide" loading="lazy">
					        </picture>
					    </div>
					</div>
				</div>
			</div>
            <div class="section-twelve bg-black">
                <div class="row m-0 r1">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                        <h3 class="text_green text-center">
                            how we can help your business grow!
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
