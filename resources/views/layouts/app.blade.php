<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/flags.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom-style-2.css') }}" rel="stylesheet">
	@yield('css')

  </head>
<body>
		<?php
		
				use App\Models\MainMenu;
				use App\Models\Partner;
				
				$menus = MainMenu::where('status','1')->orderBy('index', 'asc')->get();

				$partners = Partner::where('status','1')->orderBy('index', 'asc')->get();

    ?>
	@include('include.header')
	@include('include.menu')
	
  @yield('content')
		
	@include('include.footer-top')
	@include('include.footer-bottom')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/custom-javascript-2.js') }}" defer></script>
	  
  @yield('js')
</body>
</html>
