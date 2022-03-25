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
				        <div class="pic_caption">
                            <div class="row">
                                <div class="col-xs-6 col-sm-12 col-md-12">
                                    100% Polyester Spun Yarn
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md-12">
                                    2 types of yarn spinning techniques
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md-12">
                                    Polyester spun yarn divided to
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md-12">
                                    Spun yarn luster
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md-12">
                                    Polyester Spun uses for…?
                                </div>
                                <div class="col-xs-6 col-sm-12 col-md-12">
                                    Polyester Spun Yarn Product
                                </div>
                            </div>
					    </div>
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
													<span class="bigtext">In the past</span>, cotton is the fiber that
													common used in multiple industry applications.
													Cotton fibers are composed of pure cellulose
													which gives the feeling of soft, fluffy, comfortable
													and breathable. On the other hand, the cotton
													product’s life is not long. Cotton is a commodity
													and can fluctuate in price. This is
													because it is nature fiber.
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
														<span class="para1">Polyester spun yarn has been created in order
														to imitate cotton. Polyester spun yarn has been
														appeared for more than half a century.</span>
													@endif
												</p>
											</div>
										</div>
										<div class="row m-0 r3">
											<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
												<p style="text-indent: 30px;">
													@if($chkmobile)
														<span class="para2">The advantage of Polyester Spun Yarn is more wrinkle
														resistant than cotton, fades less, and is long lasting and durable.</span>
													@else
														<span class="para1">Polyester spun yarn has been created in order
														to imitate cotton. Polyester spun yarn has been
														appeared for more than half a century.</span> <span class="para2">The
														advantage of Polyester Spun Yarn is more wrinkle
														resistant than cotton, fades less, and is long lasting and durable.</span>
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
													polyester staple fiber (PSF) and pass through
													spinning process. Polyester spun yarn is obtained
													from both <span class="highlight">virgin polyester staple fiber</span> and
													recycled polyester staple fiber. Polyester spun
													yarn is mostly used for knitting and weaving
													fabrics, and also used for manufacturing of sewing
													thread and embroidery yarn.
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
							Thai Polyester Co., Ltd. is the professional <span class="highlight">100% polyester fibers and yarns manufacturer</span> in Thailand, we are also recognize as the biggest 100% polyester spun yarn manufacturer
							in Thailand. Thai Polyester provides numerous quantities of <span class="highlight">polyester ring spun yarn</span> and <span class="highlight">polyester OE spun yarn</span> to the local customers and export to thread
							suppliers, knitting and weaving manufacturers around the world every year.
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
									According to, the sustainable
									concept of our company, TPC
									has started producing recycled
									polyester fiber and yarn,which
									made from PET bottles, and
									reduced using virgin polyester.
									The company has certified the
									standard of recycled standard
									names Global Recycled
									Standard (GRS) to warrantee
									our product quality. This
									indicates that our company
									also provides both <span class="highlight">recycled
									polyester spun yarn</span> and <span class="highlight">virgin
									polyester spun yarn</span> which
									made more choices for our
									various customers.
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
										A. 2 types
										of yarn
										spinning
										techniques
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
										A. 2 types
										of yarn
										spinning
										techniques
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
								Ring spinning is the oldest spinning system. It was
								based on the first spinning method used and remains
								popular to this day. The production capacities of ring
								spinning are low, comparing to rotor, or open-end.
								However, the quality of final product is the better than
								the other. The ring spinning system continues to use
								the widest range of yarn counts as much as possible
								and can produce very fine yarns.
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
								Ring spinning is the oldest spinning system. It was
								based on the first spinning method used and remains
								popular to this day. The production capacities of ring
								spinning are low, comparing to rotor, or open-end.
								However, the quality of final product is the better than
								the other. The ring spinning system continues to use
								the widest range of yarn counts as much as possible
								and can produce very fine yarns.
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
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The ring spinning process is simple. The roving is the
								input for the process and passes through a basic,
								usually 3 roll, drafting system. After drafting, the fiber
								is twisted into a yarn structure by a whirling spindle,
								which has a removable bobbin on it. The winding of
								the yarn onto the bobbin takes place due to the
								traveler and ring combination.
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
									Ring spinning requires a subsequent winding step.
									That is the full bobbins must be wound onto a cone to
									create a much larger package that is then usable for
									weaving or knitting. These additional steps of roving
									and winding, combined with the slow production rate
									(when compared to rotor), are the primary reasons for
									the higher cost differences for ring-spun yarn.
								</p>
							@endif
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 p-0">
						<div class="block1 divm">
							@if($chkmobile)
								<p class="p2m m-0">
									Ring spinning requires a subsequent winding step.
									That is the full bobbins must be wound onto a cone to
									create a much larger package that is then usable for
									weaving or knitting. These additional steps of roving
									and winding, combined with the slow production rate
									(when compared to rotor), are the primary reasons for
									the higher cost differences for ring-spun yarn.
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
							<h2><span class="highlight">2. Rotor or Open End(OE) Spinning</span></h2>
							<p>
								Rotor or open-end spinning is a faster process
								than ring spinning, up to 10 times per spindle.
								From a cost standpoint, it does not require the
								roving process step and it does not require an
								extra winding step. Yarn is ready for use directly
								from the machine. The process today is highly
								automated and includes automatic piecing
								(restarting of broken ends) and doffing (removal
								of full packages).
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
							The rotor spinning process is difficult to conceptualize. A sliver is used as the input and is fed into a small carding device called a combing roll (or opening roll).
							This individualizes the fibers and performs the drafting. The loose fibers are sucked into a rotating rotor cup where they are attached to the rolling, open-end of yarn found there,
							thus the name, open-end spinning. The yarn is withdrawn and the process becomes continuous.
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
										B. Polyester spun yarn divided to…
									</span>
								</h2>
							</div>
							<p>
								<span class="highlight">1. Virgin polyester spun yarn</span><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Virgin polyester is made from a non-renewable
								resource using an energy intensive process. So,
								virgin polyester spun yarn is produced from PSF
								which is non-renewable polyester. The colors that
								we provide are:
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
									B. Polyester spun yarn divided to…
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
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RW is the color of the nature polyester color
							itself, not pass any color process.
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
							<span class="highlight">1.2 Dope Dye Black (DDB)</span><br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DDB is the black color that we put black
							master-batch since the beginning of POY process
							with high temperature. DDB spun yarn will have
							non-staining function quality and pale color.
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
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recycled polyester is made from 100% of
								PET/Polyester waste and post consumed PET
								bottles (Flakes). Recycled polyester, also known as
								r-PET, is obtained by melting down existing
								plastic and re-spinning it into new polyester fiber.
								It is a great way to divert plastic from our
								landfills and the production of recycled polyester
								requires far fewer resources than new fibers and
								generates fewer Co2 emissions. The colors of our
								recycled polyester staple fiber that we provide
								are:
								E. Polyester Spun Yarn Product
								Polyester spun yarns are long continuous length
								of fibers, suitable for use in the production of
								textiles, sewing, crocheting, knitting, weaving,
								embroidery, and rope making etc.
								D. Polyester
								Spun Yarn
								uses for…?
								28/1 30/1 32/1
								18/1 20/1
								10/2
								20/2
								18/1 20/1
								10/2
								20/2
								30/2
								10/1 12/1 14/1
								10/1 12/1 14/1
								Count
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 row2">
						<div class="content-block2">
							<p>
								<span class="highlight">2.1 Raw White (RW)</span><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RW for recycled polyester is a bit difference
								from virgin polyester. Its color looks a bit yellow
								which is natural from the process.
							</p>
							<p>
								<span class="highlight">2.2 Dope Dye Black (DDB)</span><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DDB for recycled polyester looks alike virgin
								polyester. It also contains black master-batch
								since the process of melting before injecting. So,
								we cannot separate between DDB virgin and DDB
								recycle by vision. But there is a mechanical test
								to detect that which one is made from recycle
								and which one is made from virgin. It has a
								standard to test as well. Normally, we will give
								third party which qualified by GRS to test and
								give us certification to prove that fibers or yarns.
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
								C. Spun yarn luster
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
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Luster refers to the degree of light that is
										reflected from the surface of a fiber or the degree
										of gloss or sheen that the fiber possesses.
									</p>
								</div>
							</div>
						</div>
						<div class="content-block2">
							<p>
								<span class="highlight">1. Full dull</span><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full dull yarns are manufactured from the raw
								materials which are modified chemically and/or
								physically to reduce their normal luster. Few of
								the qualities of full dull yarns are, they have high
								tenacity, strength and look like cotton fiber.
								These yarns are of good pendent, soft visual
								appeal and a strong covering. Full dull type of
								yarns have various applications in manufacturing
								apparels, home textiles etc.
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0 bg-black row2">
						<div class="content-block3">
							<p>
								<span class="highlight">2. Semi-dull</span><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semi-dull yarn are manufactured from the
								raw materials which have low luster as
								compared to partially oriented bright yarns
								are used to manufacture semi dull polyester
								textured yarns. Semi dull partially oriented
								yarns have more strength and durability. The
								end user applications of semi dull partially
								oriented yarns are in the garment and
								apparel industries for weaving and for doing
								embroidery works. These semi dull yarns are
								available in various deniers and filaments.
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
									D. Polyester Spun Yarn uses for…?
								</span>
							</h2>
							<div class="content-block">
								<p>
									Polyester spun yarns are long continuous length
									of fibers, suitable for use in the production of
									textiles, sewing, crocheting, knitting, weaving,
									embroidery, and rope making etc.
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
								E. Polyester Spun Yarn Product
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
