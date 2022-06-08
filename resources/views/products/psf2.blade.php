@extends('layouts.template')
@section('style')
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/psf2.css?v={{ time() }}" as="style" crossorigin>
@endsection
@section('og-image','/assets/images/product/desktop/OE-Open-End-Spun-Yarn-Polyester-Thaipolyester.webp')
@section('content')
<div id="tpc">
    <div id="tpc_bg">
        <section id="sec1" class="bg-black pos-r">
            <div class="row">
                <div class="col-xs-7 col-sm-7 col-md-9 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h1 class="white-hl fw-600">
                                <span class="m-tl">What is<br>
                                polyester staple fiber?</span>
                            </h1>
                            <p class="desktop head-desc">
                                Polyester Staple Fiber (PSF) is a synthetic man-made fiber created directly via a polymerization process of polyester
                                material such as PTA (Purified Terephthalic Acid) and MEG (Mono Ethylene Glycol) under high temperature and
                                pressure. After the spinning and drawing process, the polymer becomes staple fibers and is cut to a specific cut length.
                                Polyester staple fiber plays an essential role in the textile industry due to several advantages of its characteristics.
                                Polyester staple fiber is more durable than cotton or wool. Additionally, polyester staple fiber also has high heat,
                                wrinkle and abrasion resistance, low absorbency, a stretching and shrinking resistance and quick-dry after washing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-3 p-0 col2">
                    <div class="img_block pos-ab">
                        <picture>
                            <source srcset="/assets/images/psf-v2/mobile/PSF-Product-Thaipolyester.webp" alt="" media="(max-width: 640px)">
                            <img src="/assets/images/psf-v2/desktop/PSF-Product-Thaipolyester.webp" width="900" height="350" class="img-fluid" alt="">
                        </picture>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col3 p-0">
                    <p class="mobile head-desc">
                        <span>&nbsp;&nbsp;&nbsp;&nbsp; Polyester Staple Fiber (PSF)</span> <span>is a synthetic man-made fiber</span> <span>created directly via a polymerization</span> process of polyester
                        material such as PTA (Purified Terephthalic Acid) and MEG (Mono Ethylene Glycol) under high temperature and
                        pressure. After the spinning and drawing process, the polymer becomes staple fibers and is cut to a specific cut length.
                        Polyester staple fiber plays an essential role in the textile industry due to several advantages of its characteristics.
                        Polyester staple fiber is more durable than cotton or wool. Additionally, polyester staple fiber also has high heat,
                        wrinkle and abrasion resistance, low absorbency, a stretching and shrinking resistance and quick-dry after washing.
                    </p>
                </div>
            </div>
        </section>
        <section id="sec2" class="bg-black pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <div class="video_1 pos-r">
                                <video autoplay muted loop playsinline id="video1" poster="">
                                    <source src="/assets/images/landing/page4/video/minify/TPC-Landing-Page2.mp4" type="video/mp4">
                                </video>
                                <figure class="btn-play d-flex pos-ab top-0 left-0 w-100p h-100p">
                                    <button class="m-auto" id="btn-video1" name="play">
                                        <picture>
                                            <source srcset="/assets/images/open-end/mobile/Play-Icon.webp" media="(max-width: 640px)">
                                            <img src="/assets/images/open-end/desktop/Play-Icon.webp" width="900" height="350" class="img-fluid" alt="Play video" loading="lazy">
                                        </picture>
                                    </button>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col2">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h2 class="theme-hl">
                                How is polyester staple fiber made?
                            </h2>
                            <p>
                                Polyester Staple Fiber is a synthetic man-made fiber made directly from Purified Terephthalic Acid (PTA) and Mono Ethylene Glycol (MEG) or Polyethylene
                                Terephthalate (PET Chips), while recycled polyester staple fiber is made from recycled PET Chips, polyester waste, or post-consumer PET bottle flakes.
                                The production of polyester staple fiber starts from the polymerization process where PTA is fed into hot MEG under a high temperature and pressure setting.
                                Next is the melt spinning process. The bundle of continuous filaments obtained from the melt spinning technique (called tow) is subjected to the application
                                of more processes such as drawing and crimping and is then cut into fixed lengths. After the cutting process, these cut fibers are called polyester staple fibers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec3" class="bg-white pos-r">
            <div class="row bg-white">
                <div class="col-xs-12 col-sm-12 col-md-6 col1">
                    <div class="content_group">
                        <div class="content">
                            <h2>
                                What is<br>
                                polyester staple fiber<br>
                                used for?
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 d-flex col2">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <p>
                                Polyester staple fiber is mainly used in the spinning industry and
                                in non-woven weaving. In the textile industry, polyester staple fiber is
                                used in spinning production as a raw material for Polyester spun yarn,
                                further knitted or woven into fabrics. Additionally, polyester staple fiber
                                has a wide range of applications, including the following:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec4" class="bg-white pos-r">

        </section>
        <section id="sec5" class="bg-green pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h2>What is a polyester staple fiber in textile?</h2>
                            <p>
                                Polyester staple fiber is mainly used in spinning production in the textile industry. Wherein, the resulting yarns, spun yarns, are used for apparel manufacturing,
                                including sportswear, activewear, and intimate wear. As well as, shirts, socks, dresses, lingerie, gloves, suits, and sewing threads etc. In spinning production, polyester staple
                                fiber can be individually produced for 100% Polyester spun yarn or combined with cotton, viscose or wool for blended yarn such as CVC 70/30 consisting of 70% cotton fiber
                                and 30% polyester staple fiber. Compared to the cotton fiber, polyester staple fiber has major benefits in terms of cost, thinness, strength, abrasion resistance, water
                                absorption, and multiple designs and colors. Thus, polyester staple fiber can be considered the main cotton fiber alternative for the garment industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec6" class="bg-white pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <picture class="m-auto">
                                <source srcset="/assets/images/psf-v2/mobile/Polyester-yarn-machine-Thaipolyester.webp" media="(max-width: 640px)">
                                <img src="/assets/images/psf-v2/desktop/Polyester-yarn-machine-Thaipolyester.webp" alt="polyester yarn machine Thaipolyester" width="900" height="350" class="img-fluid">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col2">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h2 class="theme-hl">
                                Where would you find<br>
                                staple fiber?
                            </h2>
                            <p>
                                You can find polyester staple fiber from a reliable polyester manufacturer.
                                Our company, Thai Polyester Company (TPC), has been a registered company
                                specializing in 100% fiber and filament polyester yarn in Thailand since 2001. We
                                are a fully integrated polyester manufacturer with a capacity of approximately
                                233,600 tons annually when combining polyester staple fiber and spun production.
                                Our products are certified by international standards, including STANDARD 100
                                by OEKO-TEX®, ISO 9001:2015 and the Global Recycled Standard (GRS).
                                Deniers and cut length are the significant factors for polyester staple fiber, where
                                the size and length are related to the end product. Our product range;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec7" class="pos-r">

        </section>
        <section id="sec8" class="pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h2 class="text-center">
                                Is polyester staple fiber safe?
                            </h2>
                            <p>
                                Polyester staple fiber is safe for all applications.<br>
                                In the present day, polyester staple fiber is one of the most used fiber types globally for the textile industry. Due to its advantageous characteristics, the global demand for
                                polyester staple fiber has been increasing for decades as an alternative and sustainable option to cotton and natural fibers. Flexibility, durability, high toughness,
                                heat-resistance, stain-resistance, wrinkle resistance, versatility, and economical price are the main reasons for boosting polyester staple fiber in the global market.
                                Polyester staple fiber is safe not for just humans in textile use, but polyester staple fiber can also be produced as recycled polyester staple fiber which is environmentally
                                friendly. Global warming and pollution concerns have been the center of the world’s attention nowadays, so it would be great if we started using recyclable products, reusing
                                and reducing them. Polyester recycled production starts from collecting plastic bottles and waste, which is then cleaned. Subsequently, the PET bottles are then cut into small
                                pieces called PET flakes. Then, the flakes are melted into pellets, re-melted using high temperatures, and finally, those pellets are spun into the polyester recycled polymer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec9" class="pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h2 class="text-center">
                                What does polyester staple fiber feel?
                            </h2>
                            <p>
                                Polyester staple fiber feels like cotton. In the past, people were more likely to wear apparel made from natural fibers due to their familiarity, softness, and
                                comfortable in wear nature. However, synthetic man-made fiber production has continued to develop properties similar to natural fiber. The end product of polyester
                                staple fiber after the spinning process is called Polyester spun yarn. The properties and appearances are very close to cotton yarn. Polyester spun also has the same denier
                                count as cotton, while the price is lower. Polyester staple fiber also has the alternative option to be environmentally friendly by using recycled polyester staple fiber, which
                                is sustainable and eco-friendly. And the production of recycled polyester requires far fewer resources than new fibers and generates fewer Co2 emissions. Using recycled
                                polyester staple fiber is a major value add to a company and it also creates a significant impact on brand images compared to others.
                            </p>
                            <p class="m-0">
                                The differences in denier and cut length also affect the difference in hand-feel and product size. The smaller denier and shorter cut length bring a softer and smoother
                                feeling. According to our product, our newly developed item is polyester staple fiber 1.0 D, which is used in spinning spun yarn. Spun yarn made from polyester staple fiber
                                1.0 D will have a soft feeling to the touch and is very close to spun cotton.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec10" class="pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <h2 class="text-center">
                                Polyester Staple Fiber vs<br>
                                Polyester Filament Yarn
                            </h2>
                            <p>
                                In the present day, Polyester is commonly used in the textile industry, which is divided into two types: polyester staple fiber and polyester filament yarn. The major
                                differences between polyester staple and polyester filament yarn are length, classification and characteristics.
                            </p>
                            <p class="m-0">
                                The first difference between polyester staple fiber and polyester filament yarn is length. Although polyester staple fiber is short fiber, the length varies from a few
                                centimeters to 10 centimeters. On the other hand, polyester filament yarn is a continuous fiber with a long yarn that starts from 1,000 meters winding into a group.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec11" class="pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <p class="text-center">
                                <span class="h3">In addition,</span> there are differences in classification. Polyester staple fiber is primarily used in spinning to produce spun yarn,<br>
                                while polyester filament yarn is divided into three categories;
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col2">

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col3">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <p>
                                <span class="h3">Our company</span> manufacturing capacity is 233,600 tons annually of polyester staple fiber and spun, and we can produce 84,000 tons of polyester filament
                                yarn annually. The last differences are overall characteristics. Polyester staple fiber generally has hairiness on the surface, is fully fluffy and is commonly used in autumn
                                and winter fabrics. In addition, a fabric made from polyester staple fiber has the benefit of high heat resistance, high wrinkle and abrasion resistance, and quick dries after
                                washing. Meanwhile, a fabric made from filaments will have a brighter, smoother surface and a stronger, more lustrous surface commonly used in summer fabrics.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec12" class="pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group">
                        <div class="content">
                            <p>
                                <span class="h3 theme-hl">PSF luster</span> Refers to the degree of light reflected from surfaces of fibers or the degree of gloss or sheen that the fiber possesses.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                    <div class="content_group d-flex">
                        <div class="content m-auto">
                            <div class="col-xs-12 col-sm-12 col-md-6 col2-1">
                                <div class="content">
                                    <h3 class="theme-hl fw-500">1.Full dull</h3>
                                    <p>
                                        Full dull yarns are manufactured from raw materials modified
                                        chemically and physically to reduce their normal luster. A few of the
                                        qualities of full dull yarns are that they have high tenacity and strength
                                        and look like cotton fiber. In addition, these yarns are of good
                                        pendent, soft visual appeal and a strong covering. Full dull yarns have
                                        various applications in manufacturing apparel, home textiles, etc.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 d-flex col2-2">
                                <div class="content">
                                    <h3 class="theme-hl fw-500">2.Semi-dull</h3>
                                    <p>
                                        Semi-dull yarn is manufactured from raw materials with low luster
                                        compared to partially oriented bright yarns used to manufacture
                                        semi-dull polyester textured yarn.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col3">
                    <div class="slide">
                        <div class="owl-carousel owl-theme">
                            <div class="item r1 p-0">
                                <div class="img_block d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/psf-v2/mobile/PSF-Product-Thaipolyester-1.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/psf-v2/desktop/PSF-Product-Thaipolyester-1.webp" width="900" height="350" class="img-fluid" alt="PSF Product" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="item r1 p-0">
                                <div class="img_block d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/psf-v2/mobile/PSF-Product-Thaipolyester-2.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/psf-v2/desktop/PSF-Product-Thaipolyester-2.webp" width="900" height="350" class="img-fluid" alt="PSF Product" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div class="item r1 p-0">
                                <div class="img_block d-flex">
                                    <picture class="m-auto">
                                        <source srcset="/assets/images/psf-v2/mobile/PSF-Product-Thaipolyester-3.webp"  media="(max-width: 640px)" loading="lazy">
                                        <img src="/assets/images/psf-v2/desktop/PSF-Product-Thaipolyester-3.webp" width="900" height="350" class="img-fluid" alt="PSF Product" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec13" class="pos-r">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col1">
                    <div class="content_group">
                        <div class="content">
                            <h2 class="text-center">
                                Polyester Staple Fiber (PSF)<br>
                                product we provide:
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 p-0 col2">
                    <table>
                        <thead>
                            <tr>
                                <th width="23.5%">FIBER</td>
                                <th width="23.5%">DENIER</td>
                                <th width="15%">
                                    CUT<br>
                                    LENGTH<br>
                                    (MM)
                                </td>
                                <th width="19%">TYPE</td>
                                <th width="19%">COLOR</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" class="fw-600">
                                    <div class="img_block d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/psf-v2/mobile/PSF-Product-Thaipolyester-4.webp" alt="PSF Virgin" media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/psf-v2/desktop/PSF-Product-Thaipolyester-4.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Virgin" loading="lazy">
                                        </picture>
                                    </div>
                                    PSF<br> Virgin
                                </td>
                                <td class="fw-600 text_focus">*1.0,1.2*</td>
                                <td rowspan="2">
                                    32,38,44,51
                                </td>
                                <td rowspan="2">Virgin</td>
                                <td>RW</td>
                            </tr>
                            <tr>
                                <td>1.4</td>
                                <td>DDB</td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="fw-600">
                                    <div class="img_block d-flex">
                                        <picture class="m-auto">
                                            <source srcset="/assets/images/psf-v2/mobile/PSF-Product-Thaipolyester-5.webp" alt="PSF Recycled" media="(max-width: 640px)" loading="lazy">
                                            <img src="/assets/images/psf-v2/desktop/PSF-Product-Thaipolyester-5.webp" width="900" height="350" class="img-fluid ab-img" alt="PSF Recycled" loading="lazy">
                                        </picture>
                                    </div>
                                    PSF<br> Recycled
                                </td>
                                <td class="fw-600 text_focus">*1.2*</td>
                                <td rowspan="2">
                                    32,38,44,51
                                </td>
                                <td rowspan="2">Recycled</td>
                                <td>RW</td>
                            </tr>
                            <tr>
                                <td>1.4</td>
                                <td>DDB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="sec14" class="bg-black pos-r">
            <div class="row r1 m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="content_block d-flex pos-r">
                        <div class="content_group m-auto">
                            <h2 class="theme-hl text-center">
                                Get FREE SAMPLE<br>
                                Now!
                            </h2>
                            <form id="contact-form" data-request="landing-page" autocomplete="off">
                                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="NAME*">
                                    <span class="text-danger name mb-font12"></span>
                                </div>
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
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="button" id="submitcontract" class="bt-contact">SEND</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('custom-script')
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="/js/psf2.js?v={{ time() }}"></script>
@endsection
