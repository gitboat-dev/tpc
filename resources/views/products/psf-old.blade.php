@extends('layouts.template')
@section('style')
<link rel="stylesheet" href="/assets/custom/css/psf.css" type="text/css">
@endsection

@section('content')
<div class="psf">
	<div class="container">
		<div class="banner">
			<picture>
				<source srcset="/assets/images/psf/psf-banner-768.webp" media="(max-width: 768px)">
				<source srcset="/assets/images/psf/psf-banner-1024.webp" media="(max-width: 1024px)">
				<img src="/assets/images/psf/psf-banner-1920.webp" alt="PSF (Polyester Staple Fiber)" width="1920" height="962">
			</picture>
		</div>
		<div class="row video">

			<div class="col-lg-7 col-md-7 source">

				<div class="col-lg-10 col-lg-offset-1 video-wrapper">
					<video id="video" controls poster="/assets/images/psf/cover.webp">
					  <source src="/assets/video/psf.mp4" type="video/mp4">
					  Your browser does not support the video tag.
					</video>
					<div class="playpause active" id="playbtn"></div>
				</div>

			</div>
			<div class="col-lg-5 col-md-5">
				<div class="caption">
					Thai Polyester Co., Ltd. is a leader of<br><u>Polyester Staple Fiber (PSF), Spun yarn, Filament Yarn (FDY), and Draw Textured Yarn (DTY)</u> supplier in Thailand since 2003. According to more than 300,000 tons of the firm’s capacity annually, the company has produced and supplied our products to numerous <u>knitting, weaving, and garment manufacturers</u> around the world.
				</div>
				<div class="author">Author : Kanokluck Permpreedanun<br>Textile specialist</div>
				<span class="dot">
					<i></i>
					<i></i>
					<i></i>
					<i></i>
					<i></i>
				</span>
			</div>
			<i class="empty-left"></i>
			<i class="empty-right"></i>
		</div>
		<div class="row trim has-been">

			<div class="col-lg-4 col-md-4 caption">
				<div class="col-lg-10 pull-right txt" id="has-been-txt">
						Since TPC has been established until present, the company has developed and won the huge trusts of our consumers internationally. Moreover, providing the customer’s satisfied in our product quality is the company’s main standard. Now and then, our company is still striving in offering and serving customers’ requirements. For example, best services, new innovation, quick responds and reasonable prices as per company’s missions. However, we are still welcomed to hear and adjust if there are any comments or advise from customers in order to keep enhancing our products.
				</div>
			</div>
			<div class="col-lg-8 col-md-8 img" id="has-been-img">
				<picture>
					<source srcset="/assets/images/psf/polyester-manufacturers-768.webp" media="(max-width: 768px)">
					<source srcset="/assets/images/psf/polyester-manufacturers-1024.webp" media="(max-width: 1024px)">
					<img src="/assets/images/psf/polyester-manufacturers-1620.webp" alt="Polyester Manufacturers" width="1620" height="1426">
				</picture>
		    </div>

		</div>
		<div class="row trim column-3">
			<div class="col-lg-4 col-md-4 trim" id="column-3-psf-img">
				<img src="/assets/images/psf/psf-colorful.webp" alt="PSF">
			</div>
			<div class="col-lg-4 col-md-4 caption">
				<div class="txt" id="column-3-psf-txt">
					<p>Polyester Staple Fiber (PSF) is a material produced from synthetic chemical compounds with a variety of uses in the textile, automotive and furniture industries. The phrase "staple fiber" often refers to a kind of natural fiber such as cotton or wool.</p>
					<p>Due to the high demanding of polyester staple fiber (PSF) in the world’s market, PSF is one of the company’s top products TPC, as TPC is the recognized Polyester Staple Fiber and Spun yarn manufacturer with the approximate 233,600 ton annually capacity.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 trim">
				<ul class="img" id="column-3-psf-ul">
					<li><img src="/assets/images/psf/psf-sky-640.webp"></li>
					<li><img src="/assets/images/psf/psf-blue-640.webp"></li>
					<li><img src="/assets/images/psf/psf-blue-2-640.webp"></li>
				</ul>
			</div>
		</div>
		<div class="row trim">
			<picture>
				<source srcset="/assets/images/psf/psf-machine-768.webp" media="(max-width: 768px)">
				<source srcset="/assets/images/psf/psf-machine-1024.webp" media="(max-width: 1024px)">
				<img src="/assets/images/psf/psf-machine-1920.webp" alt="PSF Machine" width="1920" height="561">
			</picture>
		</div>
		<div class="row trim colmd bg-white">
			<div class="col-lg-4 col-md-4">
				<p class="indent">Polyester Staple Fiber (PSF) is made from polymerization process of polyester material such as PTA (Purified Terephthalic Acid) and MEG (Mono Ethylene Glycol) under a high temperature and pressure. After the spinning and drawing process, polymer becomes staple fibers when cut short according to specific cut length.</p>
			</div>
			<div class="col-lg-4 col-md-4">
				<p>Deniers and cut length are the major factors which are very important for PSF, size and length will be related with the end product. Denier could be created in numerous sizes up to POY such as 1.0/1.2/1.4 D etc. The cut length can be various. Furthermore, most using cut lengths are 31/38/44/51 mm.</p>
			</div>
			<div class="col-lg-4 col-md-4">
				<p>The differences of denier and cut length also effects on the difference of hand feel and size of products. The smaller denier and shorter cut length bring about softer and smoother feeling.

				<span class="dot">
					<i></i>
					<i></i>
					<i></i>
					<i></i>
					<i></i>
				</span>
				<span class="dot">
					<i></i>
					<i></i>
					<i></i>
					<i></i>
					<i></i>
				</span>
				</p>
			</div>
		</div>
		<div class="row trim there-are">
			<div class="col-lg-4 col-md-4 a bg-white" id="there-are-a">
				<div class="head">
					<h2>A. There are<br>two types of<br>Polyester<br>Staple<br>Fiber.</h2>
				</div>
				<div class="head">
					<h2>1. Virgin<br>Polyester<br>Staple<br>Fiber<br>(PSF)</h2>
					<span class="dot">
						<i></i>
						<i></i>
						<i></i>
						<i></i>
						<i></i>
					</span>
					<span class="dot">
						<i></i>
						<i></i>
						<i></i>
						<i></i>
						<i></i>
					</span>
				</div>
				<i class="empty-left"></i>
			</div>
			<div class="col-lg-4 col-md-4 b bg-white" id="there-are-b">
				<div class="txt"  id="there-are-b-txt">
					<p class="indent">Virgin polyester staple fiber (PSF) is made from a non-renewable polyester and using an energy intensive process. Therefore, virgin PSF is produced from PFY which is non-renewable polyester. The colors that we provide are:</p>
					<img src="/assets/images/psf/psf-white-640.webp" width="300" height="304">
					<h3>1.1	Raw White (RW)</h3>
					<p>RW is the nature color of the polyester, not pass any dyed process.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 c">
				<div class="txt"  id="there-are-c-txt">
					<img src="/assets/images/psf/psf-black-640.webp" width="300" height="304">
					<div>
						<h3>1.2 Dope Dye Black (DDB)</h3>
						<p>DDB is the black color polyester staple fiber. The black color is created by the black master-batch since the beginning of POY process with high temperature. Therefore, DDB PSF will have non-staining function quality and pale color.</p>
						<i class="empty-right"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row trim gpsf">
			<div class="col-lg-4 col-md-4 a">
				<div class="row">
					<div class="bg-white">
						<div class="head">
							<h2>2. Recycled<br>Polyester<br>Staple<br>Fiber<br>(GPSF)</h2>
						</div>
						<i class="empty-left"></i>
					</div>
					<div class="content">
					<p class="indent">Recycled polyester staple fiber is made from PET/Polyester waste and post consumer PET bottles.</p>
					<p class="indent">Recycled polyester, also known as R-PET, is obtained by melting down existing plastic and re-spinning it into new polyester fiber. It is a great way to divert plastic from our landfills and the production of recycled polyester requires far fewer resources than new fibers and generates fewer Co2 emissions.
					<span class="dot">
						<i></i>
						<i></i>
						<i></i>
						<i></i>
						<i></i>
					</span>
					</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8">
				<div class="row">
					<div class="col-lg-6 col-md-6 b">
						<p class="indent">The colors of recycled polyester staple fiber which TPC provides are:</p>
						<h3>2.1 Raw White (RW)</h3>
						<p>RW for recycled polyester staple fiber is slightly difference from any virgin polyester PSF. Its color looks fairly yellow which is natural from the process.</p>
					</div>
					<div class="col-lg-6 col-md-6 c">
 						<h3>2.2 Dope Dye Black (DDB)</h3>
 						<p>DDB for recycled polyester looks similar to virgin PSF. It also contains black master-batch since the process of melting before injecting. For this reason, there is no difference between Dope Dye Black virgin PSF and Dope Dyed Black Recycled staple fiber by vision.</p>				
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 d">
					  <div class="col-lg-12 col-md-12">
					  	<div class="row">
					  		<div class="col-md-3">
					  			<img src="/assets/images/psf/psf-white-gpsf-640.webp" width="400" height="406" alt="Recycled Polyester Staple Fiber (GPSF)">
					  		</div>
					  		<div class="col-md-3 bg-white" id="gpsf-d-blank"></div>
					  		<div class="col-md-6 bg-white trim content" id="gpsf-d-content">
								But there is a mechanical test to detect which one is made from recycle and which one is made from virgin. It also has a standard testing. Normally, the recycled fibers and recycled yarns will be tested by third party which qualified by Global Recycled Standard (GRS), the standard certificate of recycling material and tracking process.
								<i class="empty-right"></i>
					  		</div>
					  	</div>
					  </div>
					</div>
				</div>
			</div>
		</div>

		<div class="row trim psf-luster">

			<div class="row trim bg-white">
				<div class="col-lg-12 topic bg-white">
					<hr><h2>B. PSF luster</h2>
				</div>

				<div class="col-lg-12 a">
					<div class="col-lg-4 bg-m-white col-md-4">
						<p class="indent">Luster refers to the degree of light that is reflected from the surface of a fiber or the degree of gloss or sheen that the fiber possesses.</p>
						<h3 class="left">1. Full dull</h3>
					</div>
					<div class="col-lg-4 col-md-4">
					<div class="img-center">
						<img src="/assets/images/psf/psf-blue-2-640.webp">
						<span class="dot">
						<i></i>
						<i></i>
						<i></i>
						<i></i>
						<i></i>
						</span>
					</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="right">
							<h3 class="right">2. Semi-dull</h3>
							<p>Semi-dull yarn are manufactured from the raw materials which have low luster as compared to partially oriented<br>bright yarns are used to manufacture<br>semi dull polyester textured yarns.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row trim bg-black">
				<div class="col-lg-12 b">
					<div class="col-lg-4 col-md-4">
						<p class="indent">Full dull yarns are manufactured<br>from the raw materials which are modified chemically and/or physically<br>to reduce their normal luster. Few of the qualities of full dull yarns are, they have high tenacity, strength and look like cotton fiber. These yarns are of good pendent, soft visual appeal and a strong covering. Full dull type of yarns have various applications in manufacturing apparels, home textiles etc.</p>
					</div>
					<div class="col-lg-4 col-md-4"></div>
					<div class="col-lg-4 col-md-4">
						<p class="right">Semi dull partially oriented yarns<br>have more strength and durability.<br>The end user applications of semi dull partially oriented yarns are in the garment and apparel industries for weaving and for doing embroidery works. These semi dull yarns are available in various deniers and filaments.</p>
					</div>
				</div>
			</div>

		</div>

		<div class="row trim psf-product">
			<div class="row trim bg-white">
			<div class="col-lg-6 col-md-6 a" id="psf-product-a">
				<i class="empty-left"></i>
				<h3>C. What kind<br>of product<br>is from<br>PSF?</h3>
				<h4>1. Soften product</h4>
				<p>PSF Yarn is used in Non-Woven carpets,<br>wadding, filtration industries, as a<br>poly-fill for stuffing cushions, pillows, soft<br>toys, quilts etc.</p>
				<div class="row col-lg-5 col-md-offset-4 box">
					<span class="dot">
					<i></i>
					<i></i>
					<i></i>
					<i></i>
					<i></i>
					</span>
					<span class="dot">
					<i></i>
					<i></i>
					<i></i>
					<i></i>
					<i></i>
					</span>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 b" id="psf-product-b">
				<i class="empty-right"></i>
				<div class="col-lg-6 col-xs-6 img">
					<img src="/assets/images/psf/psf-products-1.webp">
				</div>
				<div class="col-lg-6 col-xs-6 img">
					<img src="/assets/images/psf/psf-products-2.webp">
				</div>
				<div class="col-lg-6 col-xs-6 img bt-30">
					<img src="/assets/images/psf/psf-products-3.webp">
				</div>
				<div class="col-lg-6 col-xs-6 img bt-30">
					<img src="/assets/images/psf/psf-products-4.webp">
				</div>
			</div>
			</div>
		</div>

		<div class="row trim psf-spun-yarn">
			<div class="col-lg-12 topic">
				<h4>2. Produce spun yarn</h4>
				<p>PSF is also used for spinning yarns or spun yarn and making geo-textiles.</p>
				<div class="col-lg-3 col-md-3 col-xs-6 img">
					<img src="/assets/images/psf/psf-spun-yarn-01.webp">
				</div>
				<div class="col-lg-3 col-md-3 col-xs-6 img">
					<img src="/assets/images/psf/psf-spun-yarn-02.webp">
				</div>
				<div class="col-lg-3 col-md-3 col-xs-6 img">
					<img src="/assets/images/psf/psf-spun-yarn-03.webp">
				</div>
				<div class="col-lg-3 col-md-3 col-xs-6 img">
					<img src="/assets/images/psf/psf-spun-yarn-04.webp">
				</div>
			</div>
		</div>

		<div class="row trim psf-e">
			<div class="col-lg-12 topic">
				<hr><h2>E. Polyester Staple Fiber (PSF) Product which TPC provide</h2>
			</div>
			<picture>
				<source srcset="/assets/images/psf/psf-e-800.webp" media="(max-width: 800px)">
				<source srcset="/assets/images/psf/psf-e-1200.webp" media="(max-width: 1024px)">
				<source srcset="/assets/images/psf/psf-e-1200.webp" media="(max-width: 1600px)">
				<img src="/assets/images/psf/psf-e-1920.webp" alt="PSF (Polyester Staple Fiber)" width="1920" height="405">
			</picture>
		</div>

	</div>
</div>
@endsection

@section('custom-script')
<script>

	var video = document.getElementById("video");
	var playbtn = document.getElementById("playbtn");
	var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

	function colThreeAutoHeight(){
		var img = document.getElementById("column-3-psf-img");
			document.getElementById("column-3-psf-txt").style.height = img.offsetHeight+"px";
			document.getElementById("column-3-psf-ul").style.height = img.offsetHeight+"px";
	}
	function hasBeenAutoHeight(){
		var img = document.getElementById("has-been-img");
			document.getElementById("has-been-txt").style.height = img.offsetHeight+"px";
	}
	function thereAreAutoHeight(){
		var el = document.getElementById("there-are-a");
			document.getElementById("there-are-b-txt").style.height = el.offsetHeight+"px";
			document.getElementById("there-are-c-txt").style.height = el.offsetHeight+"px";
	}
	function gpsfAutoHeight(){
		var el = document.getElementById("gpsf-d-content");
			document.getElementById("gpsf-d-blank").style.height = el.offsetHeight+"px";
	}
	function psfProductAutoHeight(){
		var el = document.getElementById("psf-product-b");
			document.getElementById("psf-product-a").style.height = el.offsetHeight+"px";
	}

	document.getElementById("playbtn").onclick = function() {
	    video.play();
	    playbtn.classList.remove('active');
	};

	video.onpause = function() {
	  playbtn.classList.add('active');
	};

	window.addEventListener('load', (event) => {
		if(width>1200){
		  hasBeenAutoHeight();
		  colThreeAutoHeight();
		  thereAreAutoHeight();
		  gpsfAutoHeight();
	  	  //psfProductAutoHeight();
		}
	});

	console.log(width);
</script>
@endsection