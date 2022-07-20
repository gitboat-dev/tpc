<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="ATu6ryYnUUDr9ejrsDtenq3jGgu15W5FDCQEtgegeoU" />

    <meta name="yandex-verification" content="2ad95f8bdc9d7baa" />
    <meta name="ncode" content="@if(isset($ncode)){{$ncode}}@endif">
    <meta name="chkie" content="@if(isset($chkie)){{$chkie}}@endif">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@if(isset($title)){{$title}}@endif</title>
    <meta name="description" content="@if(isset($des)){{$des}}@endif">
    <meta name="keywords" content="@if(isset($key)){{$key}}@endif">
    <meta name="author" content="TCP">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:site_name" content="Thai Polyester" />
    <meta property="og:title" content="@if(isset($title)){{$title}}@endif">
    <meta property="og:image" content="@yield('og-image')">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@if(isset($title)){{$title}}@endif">
    <meta name="twitter:description" content="@if(isset($des)){{$des}}@endif">
    <meta name="twitter:image" content="@yield('og-image')">
    <link rel="shortcut icon" href="{{ asset('assets/custom/images/home/Logo-01.webp')}}">
@include('layouts.tags.header')
@include('layouts.style')
@yield('style')
    <script>
        if (document.getElementsByName('chkie')[0].getAttribute('content')==0) {
            alert('To get the best possible experience using our site we recommend that your upgrade to a newer version of Internet Explorer or choose another web browser. such as " goole chrome browser or Firefox browser " !!! ');

        }
    </script>
</head>
<body>
    <div class="wrapper">
    	@include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
        @if(isset($pdpa_check) && $pdpa_check['status'] != 1)
            @include('layouts.pdpa.popup')
        @endif
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
@include('layouts.tags.footer')
@include('layouts.script')
@yield('custom-script')
</body>
</html>

