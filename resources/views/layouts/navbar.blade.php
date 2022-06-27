<header id="header" class="">
	<div class="header-top">
		<div class="container">
			<div class="row ht1">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
					<ul class="contact">
						<li class="phone"><a title="Telephone Number thai polyester" href="tel:+6634852371">+66 34 852371 to 2 </a></li>
						<li class="email"><a title="Email thai polyester" href="mailto: support@thaipolyester.com"> support@thaipolyester.com</a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
					<ul class="social">
						<li class="google-plus">
							<a title="video thai polyester" href="https://www.youtube.com/channel/UC1XsjddKcjF7sOcQIsXHnSQ?view_as=subscriber" target=&quot;_blank&quot;>
								<i class="fa fa-youtube-play"></i>
							</a>
						</li>
						<li class="facebook">
							<a title="fanpage thai polyester" href="https://www.facebook.com/EcoTPC-101465111232392" target=&quot;_blank&quot;>
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li class="twitter">
							<a title="linkedin thai polyester" href="https://www.linkedin.com/company/thai-polyester-co-ltd-thailand" target=&quot;_blank&quot;>
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header-body">
		<div class="container">
			<div class="header_main">
				<div class="logo">
					<a title="logo thai polyester" href="{!!url('/')!!}" >
                        <picture>
                            <source srcset="/assets/images/header/desktop/LOGO-Head-TPC.webp" media="(max-width: 640px)">
                            <img alt="logo thai polyester" src="/assets/images/header/desktop/LOGO-Head-TPC.webp" class="mb-logo" width="303" height="60">
                        </picture>
					</a>
					<div class="m-menu-block">
						<div class="m-menu">
							<div class="burger-menu">
								<div class="bar1"></div>
								<div class="bar2"></div>
								<div class="bar3"></div>
							</div>
						</div>
					</div>
				</div>
				<nav class="header-nav-menu text-right">
					<ul class="header-menu">
						<li class="@if(isset($active_home)){{$active_home}}@endif">
							<a title="Home" href="{!!url('/')!!}">
								Home
							</a>
						</li>
						<li class="@if(isset($active_about)){{$active_about}}@endif">
							<a title="About us" href="{!!url('/about')!!}">
								About us
							</a>
						</li>
						<li class="@if(isset($active_product)){{$active_product}}@endif">
							<a title="Products" class="a_menu" href="{!!url('/polyester-products')!!}">
								Products
							</a>
							<ul class="a_sub_menu">
								<li class="has-children">
									<a class="a_menu" title="polyester products" href="{!!url('/polyester-products')!!}">
										Polyester Products
									</a>
									<ul class="a_sub_menu">
										<li>
											<a title="PSF(Polyester Staple Fiber)" href="{{ route('product.psf') }}">
												PSF(Polyester Staple Fiber)
											</a>
										</li>
										<li>
											<a title="Filament" href="{{ route('product.filament') }}">
												Filament
											</a>
										</li>
										<li>
											<a title="POY" href="{{ route('product.poy') }}">
												POY (Partially Oriented Yarn)
											</a>
										</li>
										<li>
											<a title="FDY" href="{{ route('product.fdy') }}">
												FDY(Fully Drawn Yarn)
											</a>
										</li>
										<li>
											<a title="DTY" href="{{ route('product.dty') }}">
												DTY (Draw Textured Yarn)
											</a>
										</li>
										<li>
											<a title="Twist Yarn" href="{{ route('product.twisted-yarn') }}">
												Twisted Yarn
											</a>
										</li>
										<li>
											<a title="Monofilament" href="{{ route('product.monofilament') }}">
												Monofilament
											</a>
										</li>
										<li>
											<a title="Dope dyed" href="{{ route('product.dope-dyed') }}">
												Dope dyed
											</a>
										</li>
										<li>
											<a title="Spun yarn" href="{{ route('product.spun-yarn') }}">
												Spun yarn
											</a>
										</li>
                                        <li>
											<a title="Ring spun" href="{{ route('product.ring-spun') }}">
												Ring spun
											</a>
										</li>
                                        <li>
											<a title="Open end" href="{{ route('product.open-end') }}">
												Open end
											</a>
										</li>
									</ul>
								</li>
								<li class="navrecycled">
									<a title="recycle products" href="{!!url('/recycled-products')!!}">
										<i class="fa fa-recycle"></i>
										100% Recycled Polyester
									</a>
								</li>
							</ul>
						</li>
						<li class="@if(isset($active_news)){{$active_news}}@endif">
							<a class="a_menu" href="/blog">
								Columns & News
							</a>
							<ul class="a_sub_menu">
								<li>
									<a title="Columns" href="{{ route('blog.columns') }}">
										Columns
									</a>
								</li>
								<li>
									<a title="News" href="{{ route('blog.news') }}">
										News
									</a>
								</li>
							</ul>
						</li>
						<li class="@if(isset($active_contact)){{$active_contact}}@endif">
							<a title="Contact us" href="{!!url('/contact')!!}">
								Contact
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
