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
	
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=503208063400589&autoLogAppEvents=1"></script>
	
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
	
	<nav id="navbar-2" class="navbar navbar-main-top navbar-expand-lg navbar-light bg-white animated">
		<div class="container">
			<a class="navbar-brand sr-only" style="width: 210px;" href="#">
				<img src="/images/logo.png" alt="..." />
			</a>
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
								<a href="{{ route('project.mujammak') }}">Mujammak</a>
							</li>
							<li>
								<a href="{{ route('project.halaqah') }}">Halaqah</a>
							</li>
							<li>
								<a href="{{ route('project.primary-school') }}">សាលាបឋមសិក្សា</a>
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
					<li class="nav-item search sr-only">
						<a class="nav-link" href="#"><i class="fa fa-search"></i></a>
						<ul class="list-unstyled">
							<li>
								<input type="text" placeholder="search..." />
							</li>
						</ul>
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

  @yield('content')
		<footer id="top-footer">
			<div class="container">
				<h3>Our Partner</h3>
				<div class="customer-logos">
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image1.png">
								</a>
						</div>
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image2.png">
								</a>
						</div>
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image3.png">
								</a>
						</div>
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image4.png">
								</a>
						</div>
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image5.png">
								</a>
						</div>
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image6.png">
								</a>
						</div>
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image7.png">
								</a>
						</div>
						<div class="slide">
								<a href="#">
										<img src="https://www.solodev.com/assets/carousel/image8.png">
								</a>
						</div>
				</div>
			</div>
		</footer>
		<footer id="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="email"><i class="fa fa-envelope"></i> &nbsp; info@thecmdf.org</div>
						<div class="phone"><i class="fas fa-phone"></i> &nbsp; (855) 23 880 616. Fax: (855-23) 880 920.</div>
						<div class="address"><i class="fa fa-home"></i> &nbsp; #116D, Russian Federation Blvd, Phnom Penh, Cambodia</div>
					</div>
					<div class="col-sm-6 text-right">
						<ul class="list-inline footer-menu mb-0">
							<li class="list-inline-item">
									<a href="#">About Us</a>
							</li>
							<li class="list-inline-item">
									<a href="#">Projects</a>
							</li>
							<li class="list-inline-item">
									<a href="#">Activities</a>
							</li>
							<li class="list-inline-item">
									<a href="#">Education</a>
							</li>
							<li class="list-inline-item">
									<a href="#">Donate</a>
							</li>
						</ul>
						<div class="footer-copyright mb-0">Copyright &copy;2019 <strong>C.A.A</strong>. All right reserved.</div>
						<div class="dev-by mb-0">Website Develope by <a href="#">BSS Solution</a></div>
					</div>
				</div>
			</div>
		</footer>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/custom-javascript-2.js') }}" defer></script>
	  
  @yield('js')
</body>
</html>
