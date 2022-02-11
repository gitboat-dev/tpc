<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="token-id" content="@yield('token-id')">
	{{-- <title>@yield('title')</title> --}}
	<title>TPC | Admin</title>
	<!-- Fonts -->
   	<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/custom/images/home/Logo-01.webp')}}">
    @yield('jquery_ui_css')
	@include('backend.layout.css')
	@yield('css')
</head>
<body class="sidebar-open">
	<div class="loader">
		<div></div>
	</div>
	<div class="wrapper">
		@include('backend.layout.header')
		@include('backend.layout.sidenav')
		<div class="content">
			<div class="content-wrapper">
				@yield('content')
			</div>
			@include('backend.layout.footer')
		</div>
	</div>
	@yield('jquery_ui')
	@include('backend.layout.js')
	@yield('js')
</body>
</html>