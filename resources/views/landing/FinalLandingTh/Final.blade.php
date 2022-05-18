@extends('landing.template')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preload stylesheet" href="/css/landing/Finallanding/nav.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/Finallanding/footer.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet" href="/css/landing/Finallanding/style.min.css?v={{time()}}" as="style" crossorigin>
    <link rel="preload stylesheet"  href="/lib/owlcarousel/assets/owl.carousel.min.css" as="style" crossorigin>
    <link rel="stylesheet" id="fancybox-css" href="{!!asset('/assets/custom/wp-content/plugins/radiantthemes-addons/assets/css/jquery.fancybox.min.css?ver=4.9.11')!!}" type="text/css" media="all">
@endsection
@section('og-image','/assets/images/landing/page1/og-image/og-image.webp')
@section('content')
    <div id="landing">
        @include('landing.FinalLandingTh.nav')
        <section id="sec1">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="content_block pos-r">
                        <div class="img_block">
                            <picture>
                                <source src="/assets/images/landing/Finallanding/v1_94-3.webp" alt="Thai Poyester" media="(max-width: 640px)">
                                <img src="/assets/images/landing/Finallanding/v1_94-3.webp" alt="Thai Poyester" width="900" height="350" class="img-fluid">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec2">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="content_block pos-r d-flex">
                        <div class="content_group m-auto">
                            <h2 class="headform1 text-center">
                                บริษัท ไทยโพลีเอสเตอร์ จำกัด - บริษัทอันดับ 1 ของเอเชียตะวันออกเฉียงใต้ในอุตสาหกรรมโพลีเอสเตอร์
                            </h2>
                            <p class="subheadform1 text-center">
                                เราเป็นผู้ผลิตเส้นด้ายรายใหญ่ที่สุดของประเทศไทย
                            </p>
                            <form id="contact-form1" data-request="landing-page" autocomplete="off">
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="ชื่อ*">
                                    <span class="text-danger name mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="นามสกุล">
                                    <span class="text-danger name mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="เบอร์โทรศัพท์*">
                                    <span class="text-danger phone mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="อีเมล*">
                                    <span class="text-danger email mb-font12"></span>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex form-check">
                                    <input type="checkbox" id="privacy">
                                    <label class="ml-0 fw-n">ข้าพเจ้ายินยอมให้บริษัท ไทยโพลีเอสเตอร์ จำกัด (TPC) เพื่อรวบรวมหรือเปิดเผยข้อมูลที่ข้าพเจ้ามอบให้เพื่อการส่งเสริมการขายของบริษัท</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div id="res1" class="res"></div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex">
                                    <button id="submit-f1" type="submit" class="btn btn-regis m-auto">ลงทะเบียนเพื่อรับแคตตาล็อกฟรี</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec3">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <h2 class="text-center h-title">ทำไมคุณถึงต้องเลือกเรา?</h2>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">ดี</h3>
                        <p class="card-desc">คุณภาพสูง</p>
                        <img src="/assets/images/landing/Finallanding/v1_02.webp" alt="คุณภาพสูง" loading="lazy">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">ใหม่</h3>
                        <p class="card-desc">เทคโนโลยีใหม่<br>อัพเดตสินค้าใหม่ๆ</p>
                        <img src="/assets/images/landing/Finallanding/v1_04.webp" alt="เทคโนโลยีใหม่ อัพเดตสินค้าใหม่ๆ" loading="lazy">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">เร็ว</h3>
                        <p class="card-desc">รวดเร็วในเรื่องการตอบลูกค้า<br>การขนส่งที่รวดเร็ว</p>
                        <img src="/assets/images/landing/Finallanding/v1_03.webp" alt="รวดเร็วในเรื่องการตอบลูกค้า การขนส่งที่รวดเร็ว" loading="lazy">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="card">
                        <h3 class="card-title">แม่นยำ</h3>
                        <p class="card-desc">จำนวน ปริมาณ<br>ถูกต้องและแม่นยำ</p>
                        <img src="/assets/images/landing/Finallanding/v1_01.webp" alt="จำนวน ปริมาณ ถูกต้องและแม่นยำ" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <section id="sec4">
            <div class="row m-0">
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <h2 class="text-center h-title">สินค้า</h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 p-0">
                    <div class="container">
                        <ul class="nav nav-tabs row prod_tab d-flex">
                            <li class="nav-item active m-0">
                                <a class="nav-link active" aria-current="page" data-toggle="tab" href="#tab-1">All</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-2">Polyester Staple Fiber (PSF)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-3">Filament Yarn</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-4">Partially Oriented Yarn (POY)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-5">Fully Drawn Yarn (FDY)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-6">Draw Textured Yarn (DTY)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-7">Twisted Yarn</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-8">Mono Filament Yarns</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-9">Dope Dyed</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-10">Spun Yarn</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-11">Recycled Polyester Staple Fiber (PSF)</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-12">Recycled Polyester Filament Yarn</a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="nav-link" aria-current="page" data-toggle="tab" href="#tab-13">Recycled Polyester Spun Yarn</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/001.webp" alt="monofilament" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/002.webp" alt="dope dyed" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/003.webp" alt="dty" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/004.webp" alt="twisted" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/005.webp" alt="spun yarn" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/006.webp" alt="psf" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/007.webp" alt="filament" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/008.webp" alt="fdy" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/009.webp" alt="poy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/006.webp" alt="psf" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/007.webp" alt="filament" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/009.webp" alt="poy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/008.webp" alt="fdy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/003.webp" alt="dty" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/004.webp" alt="twisted" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-8" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/001.webp" alt="monofilament" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/002.webp" alt="dope dyed" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-10" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/005.webp" alt="spun yarn" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-11" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/001.webp" alt="monofilament" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-12" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/003.webp" alt="dty" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/008.webp" alt="fdy" loading="lazy">
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/009.webp" alt="poy" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-13" class="tab-pane" style="overflow-x:auto;">
                                <div class="row m-0">
                                    <div class="col-xs-6 col-sm-4 col-md-4 p-0">
                                        <img src="/assets/images/landing/Finallanding/005.webp" alt="spun yarn" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec5">
            <div class="container-fluid">
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-12 col-md-5 col1">
                        <img src="/assets/images/landing/Finallanding/v1_77.webp" alt="เกี่ยวกับเรา" loading="lazy">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col2">
                        <h2 class="h-title">เกี่ยวกับเรา</h2>
                        <h3 class="h-sub-title">บริษัท ไทยโพลีเอสเตอร์ จำกัด (TPC) ได้รับการยอมรับว่าเป็นผู้ผลิตเส้นด้ายโพลีเอสเตอร์ชั้นนำของประเทศไทย</h3>
                        <p>คุณภาพ - นวัตกรรม - การตอบสนองอย่างรวดเร็ว - ราคาที่ดีที่สุด<br>เพื่อตอบสนองความต้องการของลูกค้าในอุตสาหกรรมต่างๆ บริษัทประสบความสำเร็จในการจัดหาผลิตภัณฑ์เส้นใยและเส้นด้าย ซึ่งรวมถึง POY, FDY, DTY, staple fiber, and spun yarn in raw white, mélange, dope dyed, and yarn dyed.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec6" class="pos-r">
            <div class="container">
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-12 col-md-6 col1">
                        <h3 class="title-lists">จุดแข็งของเรา</h3>
                        <ul class="lists">
                            <li>ราคาสมเหตุสมผล</li>
                            <li>การผลิตและการขนส่งรวดเร็ว</li>
                            <li>เป็นซัพพลายเออร์ที่น่าเชื่อถือ</li>
                            <li>กำลังการผลิตสูงถึง 350,000 ตัน/ปี</li>
                            <li>มีสินค้าที่หลากหลาย</li>
                        </ul>
                        <h3 class="title-lists">ทำไมถึงควรซื้อสินค้าและบริการจาก TPC?</h3>
                        <ul class="lists">
                            <li>ตรงเวลา</li>
                            <li>มีความรับผิดชอบ</li>
                            <li>บริการทันใจรวดเร็ว</li>
                            <li>บริการแบบครบวงจร</li>
                            <li>ราคาที่ดีที่สุด</li>
                            <li>บริการด้วยใจ</li>
                            <li>ประสบการณ์กว่า 80 ปี</li>
                            <li>เทคโนโลยีเยอรมัน</li>
                            <li>ปรึกษาฟรี</li>
                            <li>ตัวอย่างฟรี (5Kg-20Kg)</li>
                        </ul>
                        <h3 class="title-lists">อะไรที่ทำให้เราแตกต่างจากคู่แข่ง?</h3>
                        <ul class="lists">
                            <li>ราคาที่ดีที่สุด</li>
                            <li>LNG(Green Factory in Process)</li>
                            <li>เราเป็นผู้ผลิตเส้นด้ายรายใหญ่ที่สุดของประเทศไทย</li>
                            <li>ลูกค้าจากทั่วโลกเลือกเรา</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 d-flex pos-r col2">
                        <img src="/assets/images/landing/Finallanding/v1_93.webp" class="m-auto" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <section id="sec7">
            <div class="container-fluid">
                <div class="slide">
                    <div class="owl-carousel owl-theme">
                        <div class="item text-center p-0">
                            <h1 class="default">รีวิวจากลูกค้า</h1>
                            <h2 class="default">"High technology German machine is one of my favourite"</h2>
                            <p>Mirza Md. Shahadat Hossain , Rubel</p>
                            <p>CEO Shazman Trade International</p>
                        </div>
                        <div class="item text-center p-0">
                            <h1 class="default">รีวิวจากลูกค้า</h1>
                            <h2 class="default">"High technology German machine is one of my favourite"</h2>
                            <p>Mirza Md. Shahadat Hossain , Rubel</p>
                            <p>CEO Shazman Trade International</p>
                        </div>
                        <div class="item text-center p-0">
                            <h1 class="default">รีวิวจากลูกค้า</h1>
                            <h2 class="default">"High technology German machine is one of my favourite"</h2>
                            <p>Mirza Md. Shahadat Hossain , Rubel</p>
                            <p>CEO Shazman Trade International</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec8">
            <div class="container">
                <h2 class="text-center">หนังสือรับรอง</h2>
                <div class="slide">
                    <div class="owl-carousel owl-theme">
                        <div class="item text-center p-0">
                            <a href="/assets/images/landing/Finallanding/v001.webp" title="certificate of registration" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/Finallanding/v001.webp">
                                <img src="/assets/images/landing/Finallanding/v001.webp" alt="certificate of registration">
                            </a>
                        </div>
                        <div class="item text-center p-0">
                            <a href="/assets/images/landing/Finallanding/v002.webp" title="green ndustry" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/Finallanding/v002.webp">
                                <img src="/assets/images/landing/Finallanding/v002.webp" alt="green ndustry">
                            </a>
                        </div>
                        {{-- <div class="item text-center p-0">
                            <a href="/assets/images/landing/Finallanding/v003.webp" title="Global Recycle Standard" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/Finallanding/v003.webp">
                                <img src="/assets/images/landing/Finallanding/v003.webp" alt="Global Recycle Standard">
                            </a>
                        </div> --}}
                        <div class="item text-center p-0">
                            <a href="/assets/images/landing/Finallanding/v004.webp" title="oeko-tex" data-fancybox="gallery" data-thumbnail-src="/assets/images/landing/Finallanding/v004.webp">
                                <img src="/assets/images/landing/Finallanding/v004.webp" alt="oeko-tex">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec9">
            <div class="container bg-green">
                <h2 class="text-center h-title">ติดต่อเรา</h2>
                <div class="row m-0">
                    <div class="col-xs-12 col-sm-12 col-md-12 p-0 d-flex pos-r">
                        <form id="contact-form2" data-request="landing-page" autocomplete="off" class="m-auto">
                            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                <label for="name">ชื่อ <span style="color: #a94442;">*</span></label>
                                <input type="text" class="w-100p" name="name" id="name">
                                <span class="text-danger name mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 col-md-6">
                                <label for="lname">นามสกุล</label>
                                <input type="text" class="w-100p" name="lname" id="lname">
                                <span class="text-danger name mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <label for="email">อีเมล <span style="color: #a94442;">*</span></label>
                                <input type="email" class="w-100p" name="email" id="email">
                                <span class="text-danger email mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <label for="phone">เบอร์โทรศัพท์ <span style="color: #a94442;">*</span></label>
                                <input type="email" class="w-100p" name="phone" id="phone">
                                <span class="text-danger phone mb-font12"></span>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                <label for="message">ข้อมูลเพิ่มเติม</label>
                                <textarea class="w-100p" name="message" id="message" rows="5"></textarea>
                                <span class="text-danger message mb-font12"></span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div id="res2" class="res"></div>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 d-flex">
                                <button id="submit-f2" type="submit" class="btn btn-regis m-auto">ส่งข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @include('landing.FinalLandingTh.footer')
    </div>
@endsection
@section('script')
    <script src="/js/landing/Finallanding/main.min.js?v={{time()}}"></script>
    <script src="/lib/jquery-on-scrolled-to/on-scrolled-to.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/custom/wp-content/plugins/radiantthemes-addons/assets/js/jquery.fancybox.min.js?v={{ time() }}"></script>
@endsection
