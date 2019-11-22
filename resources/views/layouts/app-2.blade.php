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
	
  <header id="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="{{ route('home') }}" class="img-logo" title="{{ __('global.company_name') }}">
						<img src="/images/logo.png" alt="..." />
					</a>
				</div>
				<div class="col-sm-3 offset-sm-6 text-center">
					<div class="dropdown dropdown-lang">
						<button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="flag flag-en"></div> English
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<a href="#" class="dropdown-item">
								<div class="flag flag-en"></div> &nbsp;English
							</a>
							<a href="#" class="dropdown-item">
								<div class="flag flag-kh"></div> &nbsp;Khmer
							</a>
						</div>
					</div>
					<div class="social-header">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fab fa-youtube"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fab fa-twitter"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<nav id="navbar-1" class="navbar navbar-main-top navbar-expand-lg navbar-light bg-white">

		<div class="container">
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-item-list mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('about-us') }}">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Projects &nbsp;<i class="fa fa-angle-down"></i></a>
						<ul class="list-unstyled">
							<li>
								<a href="#">Mujammak</a>
							</li>
							<li>
								<a href="#">Halaqah</a>
							</li>
							<li>
								<a href="#">សាលាបឋមសិក្សា</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Activities</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Education</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-heart"></i> Donate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
				</ul>
				
				<form class="form-inline search-bar-menu-top">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="search..." aria-label="search..." aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</nav>
	
	<nav id="navbar-2" class="navbar navbar-main-top navbar-expand-lg navbar-light bg-white animated sr-only">
		<div class="container">
			<a class="navbar-brand" style="width: 210px;" href="#">
				<img src="/images/logo.png" alt="..." />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-item-list ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('about-us') }}">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Projects &nbsp;<i class="fa fa-angle-down"></i></a>
						<ul class="list-unstyled">
							<li>
								<a href="#">Mujammak</a>
							</li>
							<li>
								<a href="#">Halaqah</a>
							</li>
							<li>
								<a href="#">សាលាបឋមសិក្សា</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Activities</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Education</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-heart"></i> Donate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
					<li class="nav-item search">
						<a class="nav-link" href="#"><i class="fa fa-search"></i></a>
						<ul class="list-unstyled">
							<li>
								<input type="text" placeholder="search..." />
							</li>
						</ul>
					</li>
				</ul>
								
			</div>
		</div>
	</nav>

  @yield('content')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/custom-javascript-2.js') }}" defer></script>
	  
  @yield('js')
</body>
</html>
