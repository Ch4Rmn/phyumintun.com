<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">

<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--  -->
    <title>@yield('title', 'My Laravel App')</title>
    @stack('meta')
    <!-- <title>Construction - Free HTML Bootstrap Template</title> -->
    <!-- Mobile Specific Meta -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon/favicon.svg')}}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png')}}" />
    <meta name="apple-mobile-web-app-title" content="Phyumintun" />
    <link rel="manifest" href="/site.webmanifest" />
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/custom-font/fonts.css') }}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <!-- Bootsnav -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}" />
    <!-- Fancybox -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/css/jquery.fancybox.css') }}"
        media="screen" />
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    @stack('css')
</head>

<body>
    <!-- Preloader -->

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!--End off Preloader -->

    <!-- Header -->
    <header>
        <!-- Top Navbar -->
        <div class="top_nav">
            <div class="container">
                <ul class="list-inline info">
                    <li>

                        <a href="#"><span class="fa fa-phone"></span> <a href="tel:+959 500 6225">+959 500 6225</a>, <a href="tel:+">+959 517 5867</a></a>
                    </li>
                    <li>
                        <a href="mailto:theinhtoon@tunthwinmining.com"><span class="fa fa-envelope"></span>
                            theinhtoon@tunthwinmining.com</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-clock-o"></span> Mon - Sat
                            9:00 - 19:00</a>
                    </li>
                </ul>
                <ul class="list-inline social_icon">
                    <!-- <li>
                        <select name="language" id="language-select" class="form-select">
                            <option value="en">Eng</option>
                            <option value="mm">Mm</option>
                        </select>
                    </li> -->
                    <!-- Language Switcher -->
                    <li class="nav-item">
                        <form method="GET" action="{{ route('lang.switch') }}" class="d-flex align-items-center">
                            <select name="locale" class="form-select form-select-sm" onchange="this.form.submit()">
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                                <option value="mm" {{ app()->getLocale() == 'mm' ? 'selected' : '' }}>မြန်မာ</option>
                            </select>
                        </form>
                    </li>

                    <li class="ms-2">
                        <a href=""><span class="fa fa-facebook"></span></a>
                    </li>
                    <li>
                        <a href=""><span class="fa fa-twitter"></span></a>
                    </li>
                    <li>
                        <a href=""><span class="fa fa-behance"></span></a>
                    </li>
                    <li>
                        <a href=""><span class="fa fa-dribbble"></span></a>
                    </li>
                    <li>
                        <a href=""><span class="fa fa-linkedin"></span></a>
                    </li>
                    <li>
                        <a href=""><span class="fa fa-youtube"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Top Navbar end -->

        <!-- Navbar -->
        <nav class="navbar bootsnav">
            <!-- Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search" />
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Header Navigation -->
                <div class="navbar-header">
                    <button
                        type="button"
                        class="navbar-toggle"
                        data-toggle="collapse"
                        data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href=""><img
                            class="logo img-fluid" style="width: 100px;height:60px;
"
                            src="{{ asset('assets/images/Plogo.png') }}"
                            alt="" /></a>
                </div>
                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav menu">
                        <li><a href="/">{{ __('messages.home') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('messages.about') }}</a></li>
                        <li><a href="{{ route('service') }}">{{ __('messages.services') }}</a></li>
                        <li><a href="{{ route('building.index') }}">Buildings</a></li>
                        <li><a href="{{ route('awards')}}">Awards</a></li>
                        <li><a href="{{ route(name: 'contact')}}">{{ __('messages.contact') }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar end -->
    </header>
    <!-- Header end -->