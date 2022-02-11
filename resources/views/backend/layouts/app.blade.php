<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/custom/images/home/Logo-01.webp')}}">
	@include('backend.layouts.css')
	@yield('css')
</head>
<body>
	<div class="loader">
		<div></div>
	</div>
	<div class="wrapper">
		@yield('content')
	</div>
	@include('backend.layouts.js')
	@yield('js')
</body>
</html>