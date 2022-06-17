@extends('layouts.template')
@section('style')
	<link rel="preload stylesheet" href="/css/product-polyester-old.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('content')
	<div id="prod_poly">
		<div id="prod_poly_bg">
			<div class="section-one">
				<div class="row m-0 r1">
					<div class="col-xs-12 col-sm-12 col-md-12 p-0 col1">
						<div class="img_block1">
							<picture>
								<source srcset="/assets/images/product-old/mobile/Head-Polyester-Product-Thaipolyester.webp?v={{ time() }}" alt="Head Polyester Product Thaipolyester" media="(max-width: 640px)">
								<img src="/assets/images/product-old/desktop/Head-Polyester-Product-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="Head Polyester Product Thaipolyester">
					        </picture>
				    	</div>
					</div>
				</div>
			</div>
			<div class="section-two">
				<div class="container-fluid">
					<div class="row m-0 r1 bg-gray">
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col1">
							<a href="{{ route('product.psf') }}" title="Polyester Staple Fiber">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/PSF-Polyester-Staple-Fiber-Thaipolyester.webp?v={{ time() }}" alt="PSF Polyester Staple Fiber Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/PSF-Polyester-Staple-Fiber-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="PSF Polyester Staple Fiber Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col2">
							<a href="{{ route('product.filament') }}" title="Filament Yarn">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/Filament-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" alt="Filament Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/Filament-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="Filament Yarn Polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col3">
							<a href="{{ route('product.poy') }}" title="Partially Oriented Yarn">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/POY-Partially-Oriented-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" alt="Filament Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/POY-Partially-Oriented-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="POY Partially Oriented Yarn Polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col4">
							<a href="{{ route('product.fdy') }}" title="Fully Drawn Yarn">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" alt="FDY Fully Drawn Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/FDY-Fully-Drawn-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="FDY Fully Drawn Yarn Polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col5">
							<a href="{{ route('product.dty') }}" title="Draw Textured Yarn">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" alt="DTY Draw Textured Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/DTY-Draw-Textured-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="DTY Draw Textured Yarn Polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col6">
							<a href="{{ route('product.twisted-yarn') }}" title="Twist Yarn">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/Twist-Yarn-polyester-Thaipolyester.webp?v={{ time() }}" alt="Twist Yarn polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/Twist-Yarn-polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="Twist Yarn polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col7">
							<a href="{{ route('product.monofilament') }}" title="Monofilament">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/Monofilament-Polyester-Thaipolyester.webp?v={{ time() }}" alt="Monofilament Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/Monofilament-Polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="Monofilament Polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col8">
							<a href="{!!url('/dope-dyed')!!}" title="Dope Dyed">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/Dope-dyed-polyester-Thaipolyester.webp?v={{ time() }}" alt="Dope dyed polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/Dope-dyed-polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="Dope dyed polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col9 mr-0">
							<a href="{{ route('product.spun-yarn') }}" title="Spun Yarn">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/Spun-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" alt="Spun Yarn Polyester Thaipolyester" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/Spun-Yarn-Polyester-Thaipolyester.webp?v={{ time() }}" width="900" height="350" class="img-fluid ab-img" alt="Spun Yarn Polyester Thaipolyester" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
                        <div class="col-xs-6 col-sm-6 col-md-3 p-0 col10 m-0">
							<a href="{{ route('product.ring-spun') }}" title="Ring Spun">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/Ring-Spun-Yarn-Polyester-Thaipolyester.webp" alt="Ring Spun" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/Ring-Spun-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Ring Spun" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 p-0 col11 ml-0">
							<a href="{{ route('product.open-end') }}" title="Open End">
								<div class="img_block1">
									<picture>
										<source srcset="/assets/images/product-old/mobile/OE-Open-End-Spun-Yarn-Polyester-Thaipolyester.webp" alt="Open End" media="(max-width: 640px)" loading="lazy">
										<img src="/assets/images/product-old/desktop/OE-Open-End-Spun-Yarn-Polyester-Thaipolyester.webp" width="900" height="350" class="img-fluid ab-img" alt="Open End" loading="lazy">
							        </picture>
						    	</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	{{-- <script src="/js/product-polyester.js?v={{ time() }}"></script> --}}
@endsection
