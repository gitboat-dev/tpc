@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/spun-yarn.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
	<h1 style="display: none;">Polyester Spun Yarn</h1>
	<div id="span_yarn">
		<div id="span_yarn_bg">
			<div class="section-one">
				<div class="row m-0">
					<div class="col-md-12 p-0">
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Head-Mobile.webp" alt="Polyester Spun Yarn" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Head-Desktop.webp" width="900" height="350" class="img-fluid ab-img" alt="Polyester Spun Yarn">
				        </picture>
					</div>
				</div>
			</div>
			<div class="section-two bg-black">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-6 p-0">
						<div class="box-content-left bg-black">
							<picture>
								<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-1.webp" alt="virgin polyester staple fiber" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-1.webp" width="900" height="350" class="img-fluid ab-img" alt="virgin polyester staple fiber" loading="lazy">
					        </picture>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0">
						<div class="box-content-right bg-black">
							<div class="pads bg-img-sectwo">
								<div class="row m-0">
									<div class="col-xs-12 col-sm-12 col-md-6 p-0 pads1">
										<div class="row m-0 r1">
											<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
												<p style="text-indent: 30px;">
                                                    <span class="bigtext">COTTON</span> was the most common fiber used in multiple industry applications in the past.
                                                    Cotton fibers are composed of pure cellulose, which gives the soft feeling, fluffy,
                                                    comfortable and breathable. On the other hand, the cotton product’s life is not long-lasting
                                                    also a commodity product and can fluctuate in price because it is a natural fiber.
												</p>
											</div>
										</div>
										<div class="row m-0 r2">
											<div class="col-xs-6 col-sm-6 col-md-12 p-0 col1">
												@if($chkmobile)
													<div class="img-block1">
														<picture>
															<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-2.webp" alt="" loading="lazy" media="(max-width: 640px)">
															<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-2.webp" width="900" height="350" class="img-fluid ab-img" alt="" loading="lazy">
														</picture>
													</div>
												@endif
											</div>
											<div class="col-xs-6 col-sm-6 col-md-12 col2">
												<p>
													@if($chkmobile)
                                                        <span class="para1">Polyester Spun Yarn was created to imitate cotton fiber. However, Polyester Spun Yarn has
                                                        appeared for more than half a century. </span>
													@endif
												</p>
											</div>
										</div>
										<div class="row m-0 r3">
											<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
												<p style="text-indent: 30px;">
													@if($chkmobile)
                                                        <span class="para2">The advantages of Polyester Spun Yarn is better
                                                        wrinkle-resistant, fades less, long-lasting and durable.</span>
													@else
                                                        Polyester Spun Yarn was created to imitate cotton fiber. However, Polyester Spun Yarn has
                                                        appeared for more than half a century. The advantages of Polyester Spun Yarn is better
                                                        wrinkle-resistant, fades less, long-lasting and durable.
													@endif
												</p>
											</div>
										</div>
										<div class="row m-0 r4">
											<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
												@if(!$chkmobile)
													<div class="img-block1">
														<picture>
															<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-2.webp" alt="" loading="lazy" media="(max-width: 640px)">
															<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-2.webp" width="900" height="350" class="img-fluid ab-img" alt="" loading="lazy">
														</picture>
													</div>
												@endif
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 p-0 pads2">
										<div class="row m-0 r1">
											<div class="col-xs-12 col-sm-12 col-md-12 col1">
												<div class="img-block2">
													<picture>
														<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-4.webp" alt="" loading="lazy" media="(max-width: 640px)">
														<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-3.webp" width="900" height="350" class="img-fluid ab-img" alt="" loading="lazy">
													</picture>
												</div>
											</div>
										</div>
										<div class="row m-0 r2">
											<div class="col-xs-12 col-sm-12 col-md-12 col2">
												<p>
                                                    <span class="highlight">Polyester spun yarn</span> is made from
                                                    polyester staple fiber (PSF) and
                                                    passes through the spinning process.
                                                    Polyester spun yarn is obtained from
                                                    both <span class="highlight">virgin polyester staple fiber</span> and
                                                    recycled polyester staple fiber.
                                                    Polyester spun yarn is mostly used
                                                    for knitting, weaving fabrics,
                                                    manufacturing sewing thread, and
                                                    embroidery.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-three">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0">
						<div class="img-block">
							<picture>
								<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-5.webp" alt="polyester ring spun yarn, polyester OE spun yarn" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-4.webp" width="900" height="350" class="img-fluid ab-img" alt="polyester ring spun yarn, polyester OE spun yarn" loading="lazy">
					        </picture>
					    </div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 bg-black">
						<p>
                            Thai Polyester Company is a professional <span class="highlight">manufacturer of 100% polyester fiber and yarn,
                            the biggest Polyester Spun Yarn supplier</span> in Thailand. Plus, Thai Polyester Company provides
                            considerable quantities of <span class="highlight">Polyester Ring-Spun Yarn</span> and <span class="highlight">Polyester OE Spun Yarn</span>. National
                            and international thread suppliers knitting and weaving manufacturers rely on us.
						</p>
					</div>
				</div>
			</div>
			<div class="section-four">
				<div class="row m-0 r1">
					<div class="col-xs-6 col-sm-6 col-md-4 p-0 col1">
						<ul class="box-five-dot-top">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
						<div class="content_group">
							<div class="content_1">
								<p class="p1 m-0">
                                    According to our company's sustainable concept, TPC has started producing recycled
                                    polyester fiber and yarn made from PET bottles and reduced using virgin polyester. The
                                    company has also certified the recycled international standard by Global Recycled Standard
                                    (GRS) to guarantee that our product has high-quality and genuinely recycled. The company
                                    provides recycled and <span class="highlight">virgin Polyester Spun Yarn</span> to suit all customers’ usages.
								</p>
								<p class="p2 m-0">
									Author : Kanokluck Permpreedanun<br>
									Textile specialist
								</p>
							</div>
						</div>
						<ul class="box-five-dot-bottom">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 p-0 col2">
						<div class="img-block1">
							<picture>
								<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-6.webp" alt="recycledpolyester spun yarn" loading="lazy" media="(max-width: 991px)">
								<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-5.webp" width="900" height="350" class="img-fluid ab-img" alt="recycledpolyester spun yarn" loading="lazy">
					        </picture>
					        <small>https://www.thaipolyester.com/recycling</small>
				    	</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col3">
						<div class="content_1"></div>
					</div>
				</div>
			</div>
			<div class="section-five">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 divm">
						@if($chkmobile)
							<div class="sec_title">
								<ul class="box-five-dot-top">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
								<h2>
									<span class="highlight">
                                        2 types of yarn spinning techniques
									</span>
								</h2>
								<ul class="box-five-dot-bottom">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
							</div>
						@endif
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 p-0">
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-7.webp" alt="A. 2 types of yarn spinning techniques" loading="lazy" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-6.webp" width="900" height="350" class="img-fluid ab-img" alt="A. 2 types of yarn spinning techniques" loading="lazy">
				        </picture>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 p-0">
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-8.webp" alt="A. 2 types of yarn spinning techniques" loading="lazy" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-7.webp" width="900" height="350" class="img-fluid ab-img" alt="A. 2 types of yarn spinning techniques" loading="lazy">
				        </picture>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0 divd">
						@if(!$chkmobile)
							<div class="sec_title">
								<ul class="box-five-dot-top">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
								<h2>
									<span class="highlight">
                                        2 types of yarn spinning techniques
									</span>
								</h2>
								<ul class="box-five-dot-bottom">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
							</div>
						@endif
					</div>
				</div>
			</div>
			<div class="section-six">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0">
						<h2>
							<span class="highlight" style="font-weight: 400;">
								1. Ring Spinning
							</span>
						</h2>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 bg-black divd">
						@if(!$chkmobile)
							<p>
                                Ring spinning is the oldest spinning system. It was based on the first spinning method that
                                remains popular nowadays. Ring Spun production capacity is low compared to the rotor or
                                open-end. However, the quality of the finished product is better than the others because
                                the ring-spinning system continues using the widest range of yarn count as much as possible
                                and produces the finest yarns.
							</p>
						@endif
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 bg-black">
						<video muted loop id="video1" poster="{{ $chkmobile ? "/assets/images/spun-yarn/mobile/Picture-Mobile-9.webp" : "/assets/images/spun-yarn/desktop/Picture-Desktop-8%20VDO.webp" }}">
							<source src="/assets/images/spun-yarn/video/C0268-01.mp4" type="video/mp4">
						</video>
						<figure>
							<button class="button" id="btn-video1" name="play">
								<picture>
									<source srcset="/assets/images/spun-yarn/mobile/Play.webp" alt="Ring Spinning" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/spun-yarn/desktop/Play.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spinning" loading="lazy">
								</picture>
							</button>
						</figure>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 bg-black divm">
						@if($chkmobile)
							<p>
                                Ring spinning is the oldest spinning system. It was based on the first spinning method that
                                remains popular nowadays. Ring Spun production capacity is low compared to the rotor or
                                open-end. However, the quality of the finished product is better than the others because
                                the ring-spinning system continues using the widest range of yarn count as much as possible
                                and produces the finest yarns.
							</p>
						@endif
					</div>
				</div>
			</div>
			<div class="section-seven">
				<div class="row m-0">
					<div class="col-xs-4 col-sm-4 col-md-4 p-0">
						<div class="img_block">
							<picture>
								<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-101112.webp" alt="Ring Spinning" loading="lazy" media="(max-width: 768px)">
								<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-91011.webp" class="img-fluid" loading="lazy" alt="Ring Spinning">
							</picture>
						</div>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-4 p-0 bg-black">
						<div class="block1">
							<p class="p1">
								<ul class="box-five-dot-top">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The ring spinning process is simple. The roving is the input for the operation and passes
                                through a primary, usually 3 rolls in the drafting system. After drafting, the fiber is twisted
                                into a yarn structure by a whirling spindle with a removable bobbin on it. The winding of the
                                yarn onto the bobbin takes place due to the traveler and ring combination.
								<ul class="box-five-dot-bottom">
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
									<li><div></div></li>
								</ul>
							</p>
						</div>
						<div class="block2 divd">
							@if(!$chkmobile)
								<p class="p2">
                                    Ring spinning requires a subsequent winding step. Full bobbin must be wound onto a cone
                                    to create a much larger package usable for weaving or knitting. These additional steps of
                                    roving and winding, combined with the slow production rate (compared to rotor), are the
                                    primary reasons for the higher cost differences for ring-spun yarn.
								</p>
							@endif
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0">
						<div class="block1 divm">
							@if($chkmobile)
								<p class="p2m m-0">
                                    Ring spinning requires a subsequent winding step. Full bobbin must be wound onto a cone
                                    to create a much larger package usable for weaving or knitting. These additional steps of
                                    roving and winding, combined with the slow production rate (compared to rotor), are the
                                    primary reasons for the higher cost differences for ring-spun yarn.
								</p>
							@endif
						</div>
						<div class="img_block">
							<ul class="box-five-dot-top">
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
							</ul>
							<picture>
								<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-13.webp" alt="Ring Spinning" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-12.webp" class="img-fluid" loading="lazy" style="width: 100%; border:5px solid #fff;" alt="Ring Spinning">
							</picture>
							<figure>
								<span class="highlight">
									https://www.textileschool.com/349/ring-spinning-process/
								</span>
							</figure>
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
			</div>
			<div class="section-eight">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-7 p-0">
						<ul class="box-five-dot-top">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
						<video muted loop id="video2" poster="{{ $chkmobile ? "/assets/images/spun-yarn/mobile/Picture-Mobile-14.webp" : "/assets/images/spun-yarn/desktop/Picture-Desktop-13.webp" }}">
							<source src="/assets/images/spun-yarn/video/C0334-01.mp4" type="video/mp4">
						</video>
						<figure>
							<button class="button" id="btn-video2" name="play">
								<picture>
									<source srcset="/assets/images/spun-yarn/mobile/Play.webp" alt="Rotor or Open End(OE) Spinning" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/spun-yarn/desktop/Play.webp" width="900" height="350" class="img-fluid ab-img" alt="Rotor or Open End(OE) Spinning" loading="lazy">
								</picture>
							</button>
						</figure>
						<ul class="box-five-dot-bottom">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 p-0">
						<div class="content-block">
							<h2><span class="highlight">2. Rotor or Open-End(OE) Spinning</span></h2>
							<p>
                                Rotor or open-end spinning is faster than ring spinning, up to 10 times per spindle. From a
                                cost standpoint, it does not require the roving process and it does not require an extra
                                winding step. Yarn is ready to use directly from the machine. Currently, the process is highly
                                automated and includes automatic piecing (restarting of broken ends) and doffing (removal
                                of complete packages).
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section-nine">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0">
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-161718.webp" alt="Rotor or Open End(OE)" loading="lazy" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-151617.webp" width="900" height="350" class="img-fluid ab-img" alt="Rotor or Open End(OE)" loading="lazy">
				        </picture>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 p-0">
						<p>
                            The rotor spinning process is difficult to conceptualize. The sliver is the input fed into a small
                            carding device called a combing roll (or opening roll). This process individualizes the fiber
                            and performs the drafting. Next, the loose fibers are sucked into a rotating rotor cup where
                            they are attached to the rolling, open-end of yarn found there, thus the name, open-end
                            spinning. Finally, the yarn is withdrawn and the process becomes continuous.
						</p>
						<span class="highlight">https://www.sciencedirect.com/topics/engineering/open-end-rotor-spinning</span>
					</div>
				</div>
			</div>
			<div class="section-ten">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 block1">
						<div class="content-block">
							<ul class="box-five-dot-top">
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
							</ul>
							<div class="content-title">
								<h2>
									<span class="highlight">
										Polyester spun yarn divided to…
									</span>
								</h2>
							</div>
							<p>
								<span class="highlight">1. Virgin Polyester Spun Yarn</span><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Virgin polyester is made from a non-renewable resource using an energy-intensive
                                process. So, virgin polyester spun yarn is produced from PSF non-renewable polyester. The
                                colors we provide are:
							</p>
							<ul class="box-five-dot-bottom">
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
								<li><div></div></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 block2">
						<div class="content-title-m">
							<h2>
								<span class="highlight">
									Polyester spun yarn divided to…
								</span>
							</h2>
						</div>
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-20.webp" alt="Virgin polyester spun yarn" loading="lazy" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-19.webp" width="900" height="350" class="img-fluid ab-img" alt="Virgin polyester spun yarn" loading="lazy" style="width:100%;">
						</picture>
					</div>
				</div>
			</div>
			<div class="section-eleven">
				<div class="row r1 m-0">
					<div class="col-xs-12 col-sm-12 col-md-7 p-0 row1">
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-21.webp" alt="Raw White (RW)" loading="lazy" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-20.webp" class="img-fluid" loading="lazy" alt="Raw White (RW)">
						</picture>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 p-0 row2">
						<ul class="box-five-dot-top">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
						<p>
							<span class="highlight">1.1 Raw White (RW)</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RW is the color of the nature polyester color
                            itself, not passing any color processes.
						</p>
						<ul class="box-five-dot-bottom bottom-5p">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
					</div>
				</div>
				<div class="row r2 m-0">
					<div class="col-xs-12 col-sm-12 col-md-5 p-0 row1">
						<ul class="box-five-dot-top">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
						<p>
							<span class="highlight">1.2 Dope-Dyed Black (DDB)</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DDB is the black color that the masterbatch has been put since at the beginning of the
                            POY process with high temperature. Consequently, DDB spun yarn will have non-staining
                            function quality and pale color.
						</p>
						<ul class="box-five-dot-bottom">
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
							<li><div></div></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 p-0 row2">
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-22.webp" alt="Dope Dye Black (DDB)" loading="lazy" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-21.webp" class="img-fluid" loading="lazy" alt="Dope Dye Black (DDB)">
						</picture>
					</div>
				</div>
			</div>
			<div class="section-twelve">
				<ul class="box-five-dot-top">
					<li><div></div></li>
					<li><div></div></li>
					<li><div></div></li>
					<li><div></div></li>
					<li><div></div></li>
				</ul>
				<div class="img-block">
					<picture>
						<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-23.webp" alt="Recycled polyester spun yarn" loading="lazy" media="(max-width: 640px)">
						<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-22.webp" class="img-fluid" loading="lazy" alt="Recycled polyester spun yarn">
					</picture>
				</div>
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 bg-green row1">
						<div class="content-block1">
							<p>
								<span class="highlight-black">2. Recycled polyester spun yarn</span><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Recycled polyester is made from 100% waste PET and post-consumer PET bottles
                                (flakes). Recycled polyester, also known as r-PET, is obtained by melting down existing
                                plastic and re-spinning it into new polyester fiber. Another good choice for diverting plastics
                                from the landfill and producing recycled polyester requires far fewer resources than new
                                fibers and generates fewer Co2 emissions.<br><br>
                                Polyester Spun Yarn Product Polyester spun yarn has a long continuous length of fibers,
                                suitable for the textile industry such as sewing, crocheting, knitting, weaving, embroidery,
                                rope making, etc.<br><br>
                                We provide:<br>
                                28/1 30/1 32/1 18/1 20/1 10/2 20/2 18/1 20/1 10/2 20/2 30/2 10/1 12/1 14/1 10/1 12/1 14/1 Count
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 row2">
						<div class="content-block2">
							<p>
								<span class="highlight">2.1 Raw White (RW)</span><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RW recycled polyester is slightly different from virgin polyester; its color is yellowish
                                naturally.
							</p>
							<p>
								<span class="highlight">2.2 Dope-Dyed Black (DDB)</span><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DDB recycled polyester looks exactly like virgin polyester because the black masterbatch
                                is mixed in the melting process before injecting. We cannot separate between DDB virgin
                                and DDB recycle by vision. But there is a mechanical test to detect which is recycled or
                                virgin. Our recycled product is certified by GRS, <b>a voluntary product standard for tracking
                                and verifying recycled materials' content in a final product.</b>
							</p>
						</div>
					</div>
				</div>
				<ul class="box-five-dot-bottom bottom-5p">
					<li><div></div></li>
					<li><div></div></li>
					<li><div></div></li>
					<li><div></div></li>
					<li><div></div></li>
				</ul>
			</div>
			<div class="section-thirteen">
				@if(!$chkmobile)
					<div class="img-block">
						<picture>
							<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-25.webp" alt="C. Spun yarn luster" loading="lazy" media="(max-width: 640px)">
							<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-24.webp" class="img-fluid" loading="lazy" alt="C. Spun yarn luster">
						</picture>
					</div>
				@endif
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 row1">
						<h2>
							<span class="highlight">
								Spun yarn luster
							</span>
						</h2>
						<div class="content-block1">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 p-0 subrow1">
									@if($chkmobile)
										<div class="img-block">
											<picture>
												<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-25.webp" alt="C. Spun yarn luster" loading="lazy" media="(max-width: 640px)">
												<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-24.webp" class="img-fluid" loading="lazy" alt="C. Spun yarn luster">
											</picture>
										</div>
									@endif
								</div>
								<div class="col-xs-8 col-sm-8 col-md-12 p-0 subrow2">
									<p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Luster refers to the degree of light reflected from fiber surfaces or the degree of gloss or
                                        sheen that the fiber possesses.
									</p>
								</div>
							</div>
						</div>
						<div class="content-block2">
							<p>
								<span class="highlight">1. Full dull</span><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Full dull yarns are manufactured from raw materials modified chemically and physically
                                to reduce their normal luster. A few of the qualities of full dull yarns have high tenacity and
                                strength and look like cotton fiber. In addition, these yarns are of good pendent, soft visual
                                appeal and a strong covering. Full dull yarns have various applications in manufacturing
                                apparel, home textiles, etc.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 bg-black row2">
						<div class="content-block3">
							<p>
								<span class="highlight">2. Semi-dull</span><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semi-dull yarn is manufactured from raw materials with low luster compared to partially
                                oriented bright yarns used to manufacture semi-dull polyester textured yarn. Semi-dull
                                partially oriented yarn has more durability properties. The end-user applications of semi-dull
                                partially oriented yarn are in the garment and apparel industries for weaving and
                                embroidery works. These semi-dull yarns are available in various deniers and filaments.
							</p>
							<div class="img-block2">
								<img src="/assets/images/spun-yarn/mobile/Picture-Mobile-26.webp" class="img-fluid" loading="lazy" alt="Semi-dull">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-fourteen">
				<div class="frame-1">
					<div class="row m-0 r1">
						<div class="col-xs-12 col-sm-12 col-md-5 p-0 row1">
							<h2>
								<span class="highlight">
									Polyester Spun Yarn uses for…?
								</span>
							</h2>
							<div class="content-block">
								<p>
                                    Polyester spun yarns are the long and
                                    continuous length of fibers, suitable
                                    for the production of textiles, sewing,
                                    crocheting, knitting, weaving,
                                    embroidery, rope making, etc.
								</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7 p-0 row2">
							<div class="img-block">
								<picture>
									<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-27.webp" alt="D. Polyester Spun Yarn uses for…?" loading="lazy" media="(max-width: 640px)">
									<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-25.webp" width="900" height="350" class="img-fluid ab-img" alt="D. Polyester Spun Yarn uses for…?" loading="lazy">
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-fifteen">
				<div class="row m-0">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0">
						<h2>
							<span class="highlight">
								Polyester Spun Yarn Product
							</span>
						</h2>
						<div class="img_block">
							<picture>
								<source srcset="/assets/images/spun-yarn/mobile/Picture-Mobile-28.webp" alt="E. Polyester Spun Yarn Product" loading="lazy" media="(max-width: 640px)">
								<img src="/assets/images/spun-yarn/desktop/Picture-Desktop-26.webp" width="900" height="350" class="img-fluid ab-img" alt="E. Polyester Spun Yarn Product" loading="lazy">
							</picture>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	<script src="/js/spun-yarn.js?v={{ time() }}"></script>
@endsection
