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
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
</head>
<body>
    
    <header id="htop">
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

    <div class="container">
        <nav class="navbar navbar-main-top navbar-expand-lg navbar-light bg-white">
            
            {{-- <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-item-list mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
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
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> --}}
                </ul>
                {{-- <form class="form-inline search-bar-menu-top">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search..." aria-label="search..." aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </nav>
    </div>
        
    @yield('content')

    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom-javascript.js') }}" defer></script>
</body>
</html>
