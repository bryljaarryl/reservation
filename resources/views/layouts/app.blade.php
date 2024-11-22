<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRANQUILSTAY</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chocolat.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/easy-responsive-tabs.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-gn538Mzj+8F/wJtFl5Mz6VJ/bGUgwbQSW26U+QI8Uz6U3V9LG4MEd7bT1Sowc7w6TynQGSxGUzr88RxlyNOFGrA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <!-- Header -->
    <div class="banner-top">
        <div class="w3_navigation">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="navbar-brand" href="{{ url('/') }}">
                                TRANQUILSTAY
                                <p class="logo_w3l_agile_caption">Your One Stop Vacation</p>
                            </a>
                        </h1>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="menu__item menu__item--current">
                                <a href="{{ url('/') }}" class="menu__link">Dashboard</a>
                            </li>
                            <li class="menu__item">
                                <a href="#about" class="menu__link scroll">About</a>
                            </li>
                            <li class="menu__item">
                                <a href="#gallery" class="menu__link scroll">Gallery</a>
                            </li>
                            <li class="menu__item">
                                <a href="#rooms" class="menu__link scroll">Rooms</a>
                            </li>
                            <li class="menu__item">
                                <a href="#contact" class="menu__link scroll">Contact Us</a>
                            </li>
                            @guest
                                <li class="menu__item">
                                    <a href="{{ route('login') }}" class="menu__link">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="menu__item">
                                        <a href="{{ route('register') }}" class="menu__link">Register</a>
                                    </li>
                                @endif
                            @else
                                <li class="menu__item dropdown">
                                    <a href="#" class="menu__link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
<div class="copy">
    <p>© 2023 TRANQUILSTAY. All Rights Reserved</a> </p>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>

