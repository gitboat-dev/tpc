<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="ATu6ryYnUUDr9ejrsDtenq3jGgu15W5FDCQEtgegeoU" />

    <meta name="ncode" content="@if(isset($ncode)){{$ncode}}@endif">
    <meta name="chkie" content="@if(isset($chkie)){{$chkie}}@endif">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

    <title>@if(isset($title)){{$title}}@endif</title>
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

    @include('landing.style')
    @yield('style')

    <script>if(document.getElementsByName('chkie')[0].getAttribute('content')==0){
    alert('To get the best possible experience using our site we recommend that'+
    ' your upgrade to a newer version of Internet Explorer or choose another web'+
    ' browser. such as " goole chrome browser or Firefox browser " !!! ');}
    </script>
</head>
<body>
    @yield('content')
    @include('landing.scrollup')
    @include('landing.contact_tools')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTG33WM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('landing.script')
    @yield('script')
</body>
</html>
