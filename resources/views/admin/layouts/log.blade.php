<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('admin_asset/js/app.js') }}"></script>

	<!-- Styles -->
	<link href="{{ asset('admin_asset/css/app.css') }}" rel="stylesheet">

	{{-- Custom Style Css --}}
	@yield('css')

</head>
<body>

  @yield('content')
  
	{{-- Custom Javascript --}}
	@yield('js')
</body>
</html>
