<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="ATu6ryYnUUDr9ejrsDtenq3jGgu15W5FDCQEtgegeoU" />

    <meta name="ncode" content="@if(isset($ncode)){{$ncode}}@endif">
    <meta name="chkie" content="@if(isset($chkie)){{$chkie}}@endif">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@if(isset($title)){{$title}}@endif </title>
    <meta name="description" content="@if(isset($des)){{$des}}@endif">
    <meta name="keywords" content="@if(isset($key)){{$key}}@endif">
    <meta name="author" content="TCP">
    <link rel="shortcut icon" href="{{ asset('assets/custom/images/home/Logo-01.webp')}}">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MTG33WM');</script>
    <!-- End Google Tag Manager -->


@include('layouts.style')
@yield('style')

    <script>
    if (document.getElementsByName('chkie')[0].getAttribute('content')==0) {
    	alert('To get the best possible experience using our site we recommend that your upgrade to a newer version of Internet Explorer or choose another web browser. such as " goole chrome browser or Firefox browser " !!! ');

    }
    </script>



</head>
<body data-rsssl="1" class="product-template-default single single-product postid-3981 woocommerce woocommerce-page tribe-no-js wpb-js-composer js-comp-ver-5.4.5 vc_responsive" data-nicescroll-cursorcolor="#e7174d" data-nicescroll-cursorwidth="7px" style="overflow-x:hidden;">

    <div class="wrapper">

        <!-- Loading Screen -->
        <div id="ju-loading-screen" >
          <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
          </div>
        </div>

    	@include('layouts.navbar')

        @yield('content')
        @include('layouts.footer')

    </div>

    <div class="scrollup right">
        <i class="fa fa-angle-up"></i>
    </div>

    <div class="contact-tools important">
        <div class="tools-box"></div>
        <div class="box-blur"></div>
        <div class="drawer-msg">
            <div class="close-widget" onclick="closeWidgetBubble(this)"></div>
            <img src="/assets/custom/images/contact-tools/ICON-contact-2.webp" alt="Ask for more information.">
        </div>
        <span class="contact-icon"></span>
        <ul class="contact-lists">
            <li>
                <a href="https://www.facebook.com/EcoTPC-101465111232392/" title="Facebook" target="_blank">
                    <img src="/assets/custom/images/contact-tools/ICON-Facebook1.webp" alt="Facebook" loading="lazy">
                </a>
            </li>
            <li>
                <a href="/contact" title="Email">
                    <img src="/assets/custom/images/contact-tools/ICON-Mail1.webp" alt="Email" loading="lazy">
                </a>
            </li>
            <li>
                <a href="tel:+66634852371" title="Phone">
                    <img src="/assets/custom/images/contact-tools/ICON-Phone1.webp" alt="Phone" loading="lazy">
                </a>
            </li>
        </ul>
    </div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTG33WM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('layouts.script')

@yield('custom-script')

</body>
</html>

