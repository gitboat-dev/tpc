@extends('landing.template')
@section('style')
    <link rel="stylesheet" href="\lib\Finallanding\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="\css\landing\Finallanding\style.css">
@endsection
@section('og-image','\assets\images\landing\page1\og-image\og-image.webp')
@section('close_style',1)
@section('content')
<div class="header">
    <div class="nav-container">
        <nav>
            <div class="logo">
              <a href="#home"><img src="\assets\images\landing\Finallanding\logo_1.png" alt="Thai Poyester"></a>
            </div>
            <div class="topnav">
                <a href="#present1" class="active">Why you have to choose us?</a>
                <a href="#news">All Products</a>
                <a href="#about">About Us</a>
                <a href="#strength">Our Strength</a>
            </div>
        </nav>
    </div>
    <div id="home" class="imgheader-container">
        <header>
            <div class="hero-image"><img src="\assets\images\landing\Finallanding\v1_94-3.png" alt="Thai Polyester"></div>
        </header>
    </div>
</div>

<div class="allcontent">

<div id="regis1" class="register">
  <div id="containerform1" class="container mt-lg-auto">
    <div class="row align-items-stretch justify-content-center no-gutters">
    <div class="col-md-10">
    <div class="form h-100 contact-wrap">
    <h2 id="headform1" class="text-center">Thai Polyester limited company (TPC)
- In the polyester industry, we are one of the best in Southeast Asia.</h2>
     <p id="subheadform1" class="text-center"> We are one of Thailand's largest yarn producers.</p>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="firstName"  class="form-label"></label>
        <input type="text" class="form-control" id="firstName1" placeholder="Name" required>
      </div>
      <div class="col-md-6">
        <label for="lastName"  class="form-label"></label>
        <input type="text" class="form-control" id="lastName1" placeholder="Lastname" required>
      </div>
      <div class="col-md-6">
        <label for="tel"  class="form-label"></label>
        <input type="text" class="form-control" id="tel1" placeholder="Tel" required>
      </div>
      <div class="col-md-6">
        <label for="emailInfo"  class="form-label"></label>
        <input type="text" class="form-control" id="email1" placeholder="E-Mail" required>
      </div>
      <div id="formcheck1" class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">I hereby consent Thai Polyester limited company (TPC) to collect, use or disclose my given information for the company's promotion.</label>
      </div>
  <div class="d-grid gap-2 col-8 mx-auto">
    <button type="submit" id="btn1" class="btn btn-primary btn-block">Register for free catalog
  </button>
</div>
    </form>
    </div>
    </div>
    </div>
  </div>
</div>

<div id="present1" class="present">
    <div class="pickme-container">
        <h2>why you have to choose us?</h2>

        <div class="pickme-row">
          <div class="pickme-column">
            <div class="pickme-card">
              <div id="card1" class="pick-card">
              <h3>Good</h3>
              <p>High Quality <br><br></p>
              </div>
              <img src="\assets\images\landing\Finallanding\v1_02.png" alt="">
            </div>
          </div>

          <div class="pickme-column">
            <div class="pickme-card">
              <div id="card2" class="pick-card">
              <h3>New</h3>
              <p>New Technology <br><br></p>
            </div>
              <img src="\assets\images\landing\Finallanding\v1_04.png" alt="">
            </div>
          </div>

          <div class="pickme-column">
            <div class="pickme-card">
              <div id="card3" class="pick-card">
              <h3>Fast</h3>
              <p>Fast Support <br> Resposibility <br> Fast Transpotation</p></div>
              <img src="\assets\images\landing\Finallanding\v1_03.png" alt="">
            </div>
          </div>

          <div class="pickme-column">
            <div class="pickme-card">
              <div id="card4" class="pick-card">
              <h3>Exactly</h3>
              <p>Amount Quantity <br><br></p>
              </div>
              <img src="\assets\images\landing\Finallanding\v1_01.png" alt="">
            </div>
          </div>
        </div>
      </div>
</div>

<div id="news" class="products">
  <h2 class="product-head">Product</h2>
  <div class="main">
    <div id="myBtnContainer">
      <div class="row justify-content-center">
        <button id="btn5" class="button-fil active" onclick="filterSelection('all')">All</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('psf')">Polyester Staple Fiber (PSF)</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('filament')">Filament Yarn</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('poy')">Partially Oriented Yarn (POY)</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('fdy')">Fully Drawn Yarn (FDY)</button>
      </div>
      <div class="row justify-content-center">
        <button id="btn5" class="button-fil" onclick="filterSelection('dty')">Draw Textured Yarn (DTY)</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('twisted')">Twisted Yarn</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('mono')">Mono Filament Yarns</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('dope')">Dope Dyed</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('spun')">Spun Yarn</button>
      </div>
      <div class="row center"><center>
        <button id="btn5" class="button-fil" onclick="filterSelection('repsf')">Recycled Polyester Staple Fiber (PSF)</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('retrio')">Recycled Polyester Filament Yarn</button>
        <button id="btn5" class="button-fil" onclick="filterSelection('respun')">Recycled Polyester Spun Yarn</button>
      </center></div>
    </div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column mono">
    <div class="content">
      <img src="\assets\images\landing\Finallanding\001" alt="monofilament" style="width:100%">
    </div>
  </div>
  <div class="column dope">
    <div class="content">
    <img src="\assets\images\landing\Finallanding\002.png" alt="dope" style="width:100%">
    </div>
  </div>
  <div class="column dty retrio">
    <div class="content">
    <img src="\assets\images\landing\Finallanding\003.png" alt="dty" style="width:100%">
    </div>
  </div>

  <div class="column twisted">
    <div class="content">
      <img src="\assets\images\landing\Finallanding\004.png" alt="twisted" style="width:100%">
    </div>
  </div>
  <div class="column spun respun">
    <div class="content">
    <img src="\assets\images\landing\Finallanding\005.png" alt="spun" style="width:100%">
    </div>
  </div>
  <div class="column psf repsf">
    <div class="content">
    <img src="\assets\images\landing\Finallanding\006.png" alt="psf" style="width:100%">
    </div>
  </div>

  <div class="column filament">
    <div class="content">
      <img src="\assets\images\landing\Finallanding\007.png" alt="filament" style="width:100%">
    </div>
  </div>
  <div class="column pdy retrio">
    <div class="content">
    <img src="\assets\images\landing\Finallanding\008.png" alt="pdy" style="width:100%">
    </div>
  </div>
  <div class="column poy retrio">
    <div class="content">
    <img src="\assets\images\landing\Finallanding\009.png" alt="poy" style="width:100%">
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
</div>

<div id="about" class="abouts">
    <div id="ro1" class="row">
        <div id="column1" class="col-md-4">
          <img src="\assets\images\landing\Finallanding\v1_77.png" width="600">
        </div>
        <div id="column2" class="col-md-8">
          <h2>ABOUT US</h2>
          <h3>Thai Polyester limited company (TPC) is recognized as a leading polyester yarn manufacturer in Thailand.</h3>
          <p>Quality - Innovation - Quick response - Competitive price.<br>To meet the needs of customers in various industries, the company has successfully provided a wide range of fiber and yarn products, including POY, FDY, DTY, staple fiber, and spun yarn in raw white, mélange, dope dyed, and yarn dyed.
          </p>
      </div>
    </div>
    <div id="ro2" class="row">
      <div id="column3" class="col-md-6">
        <div class="detail-column2 left2">
            <h3 id="strength">Our Strength</h3>
            <p><ul>
                <li>Reasonable Price</li>
                <li>Short Lead Time</li>
                <li>Trustworthy Supplier</li>
                <li>Large Capacity</li>
                <li>Wide Product Range</li>
            </ul></p>
            <h3>Why you should buy products and services from TPC?</h3>
            <p><ul>
                <li>On time</li>
                <li>Responsibility</li>
                <li>Prompt Service</li>
                <li>One Stop service</li>
                <li>Competitive Price</li>
                <li>Service Mind</li>
                <li>Experience over 80 Years</li>
                <li>German Technology</li>
                <li>Free consulation</li>
                <li>Free sample (5Kg-20Kg)</li>
            </ul></p>
            <h3>What distinguishes us from our competitors?</h3>
            <p><ul>
                <li>Competitive Price</li>
                <li>LNG(Green Factory in Process)</li>
                <li>We are one of the biggest yarn manufacturer in Thailand</li>
                <li>Global Brand Name Customer chose us</li>
            </ul></p>
        </div>
    </div>
    <div id="column4" class="col-md-6">
      <img src="\assets\images\landing\Finallanding\v1_93.png " width="900">
    </div>
    </div>
</div>

<div id="test1" class="testimonial">
    <div class="slideshow-container">

        <div class="mySlides">
          <h1>Testimonial</h1>
          <h2>"High technology German machine is one of my favourite"</h2>
          <p1>Mirza Md. Shahadat Hossain , Rubel</p1><br>
          <p2>CEO Shazman Trade International</p2>
        </div>

        <div class="mySlides">
          <h1>Testimonial</h1>
          <h2>"High technology German machine is one of my favourite"</h2>
          <p1>Mirza Md. Shahadat Hossain , Rubel</p1><br>
          <p2>CEO Shazman Trade International</p2>
        </div>

        <div class="mySlides">
          <h1>Testimonial</h1>
          <h2>"High technology German machine is one of my favourite"</h2>
          <p1>Mirza Md. Shahadat Hossain , Rubel</p1><br>
          <p2>CEO Shazman Trade International</p2>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="dot-container">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        </div>
</div>

<div id="certifi1" class="certification">
  <h2>Certification</h2>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div id="certico1" class="carousel-inner">
        <div id="certitem1" class="carousel-item active">
            <div class="row justify-content-center">
                <div id="coitem1" class="col-4 align-middle">
                    <img src="\assets\images\landing\Finallanding\v001.png" alt="oeko-tex" class="d-block" style="max-width: 100%; height: auto;">
                </div>
                <div id="coitem2" class="col-4 align-middle">
                    <img src="\assets\images\landing\Finallanding\v002.png" alt="Global Recycle Standard" class="d-block" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>

        <div id="certitem2" class="carousel-item">
            <div class="row justify-content-center">
                <div id="coitem3" class="col-4 align-middle">
                    <img src="\assets\images\landing\Finallanding\v003.png" alt="green ndustry" class="d-block" style="max-width: 100%; height: auto; align-items: center;">
                </div>
                <div id="coitem4" class="col-4 align-middle">
                    <img src="\assets\images\landing\Finallanding\v004.png" alt="certificate of registration" class="d-block" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

</div>

<div id="contact1" class="contactus">
  <div id="containerform" class="container mt-5">
    <div class="row align-items-stretch justify-content-center no-gutters">
    <div class="col-md-7">
    <div class="form h-100 contact-wrap p-5">
    <h2 class="text-center">Contact Us</h2>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="firstName"  class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" required>
      </div>
      <div class="col-md-6">
        <label for="lastName"  class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" required>
      </div>
      <div class="col-md">
        <label for="emailInfo"  class="form-label">E-mail</label>
        <input type="email" class="form-control" id="emailInfo" required>
      </div>
      <div class="col-md-12 ">
        <label for="message"  class="form-label">Message</label>
        <textarea class="form-control" id="comments" rows="3"></textarea>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" id="btn2" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
    </div>
    </div>
  </div>
</div>


<div class="footer-dark">
  <div id="dark2" class="footer-dark2">
<footer>
  <div id="content1" class="container">
    <div class="row">
        <div class="col-md-4 item">
            <h3>Our Services</h3>
            <h3>Polyester Product</h3>
            <ul>
                <li><a href="#">Polyester Staple Fiber (PSF)</a></li>
                <li><a href="#">Filament Yarn</a></li>
                <li><a href="#">Partially Oriented Yarn (POY)</a></li>
                <li><a href="#">Fully Drawn Yarn (DSY)</a></li>
                <li><a href="#">Draw Textured (DTY)</a></li>
                <li><a href="#">Twisted Yarn</a></li>
                <li><a href="#">Mono Filament Yarns</a></li>
                <li><a href="#">Dope Dyed</a></li>
                <li><a href="#">Spun Yarn</a></li>
            </ul>
        </div>
        <div class="col-md-4 item">
            <h3>100% Recycle Polyester</h3>
            <ul>
                <li><a href="#">Recycle Polyester Staple Fiber (PSF)</a></li>
                <li><a href="#">Recycled Polyester Filament Yarn<br>(POY, FDY, DTY)</a></li>
                <li><a href="#">Recycled Polyester Spun Yarn</a></li>
            </ul><br>
            <h3>Contact Us</h3>
            <ul>
                <li><a href="#">470 Bangkuntien-Chaitalay Rd.,<br>Samaedum, Bangkuntien, Bangkok<br>10150 Thailand</a></li>
                <li><a href="#">+66 34 852371 to 2</a></li>
                <li><a href="#">support@thaipolyester.com</a></li>
            </ul>
        </div>
        <div class="col-md-4 item text">
            <h3>Thai Polyester limited company (TPC)</h3>
            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            <h3>Tel.</h3>
            <p>+66 34 852371 to 2</p>
            <hr width="100%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.4833112577744!2d100.43225571534639!3d13.628338503813001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bccbdbee519d%3A0x14c1af4b7e294f1c!2sThai%20Polyester%20Co.%2CLTD.!5e0!3m2!1sen!2sth!4v1648717772110!5m2!1sen!2sth" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</footer>
</div>
<p class="copyright">copyright © 2019 Thai polyester Co., Ltd. All rights reserved.</p>
</div>

</div>
@endsection
@section('close_script',1)
@section('script')
    <script src="\lib\Finallanding\js\bootstrap.min.js"></script>
    <script src="\js\landing\Finallanding\main.js"></script>
@endsection
@section('close_contact_tools',1)


