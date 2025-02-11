<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Offshore - Responsive HTML Template">
    <meta name="author" content="Surjith S.M">

    <!-- Page Title -->
    <title> Offshore - Responsive Gas &amp; Oil Industry HTML Template </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ url('favicon.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ url('frontend/fonts/font-awesome/css/font-awesome.min.css') }}">

    <!-- Flex Slider -->
    <link rel="stylesheet" href="{{ url('frontend/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.min.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ url('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body class="homepage">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Header Section -->
        <header>
            <div class="header-area">

                <!-- Top Contact Info -->
                <div class="row logo-top-info">
                    <div class="container">
                        <div class="col-md-3 logo">
                            <!-- Main Logo -->
                            <a href="{{ route('home') }}"><img src="{{ url('frontend/images/logo.png') }}" alt="Offshore Logo" /></a>
                            <!-- Responsive Toggle Menu -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only"> Main Menu </span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-9 top-info-social">
                            <div class="pull-right">
                                <div class="top-info">
                                    <div class="call">
                                        <h3> CALL US </h3>
                                        <p> 1800 425 4646 </p>
                                    </div>
                                    <div class="email">
                                        <h3> EMAIL US </h3>
                                        <p> info@offshoreindustry.com </p>
                                    </div>
                                    <div class="market">
                                        <h3> MARKET </h3>
                                        <p> 256.78 <span class="forex"> <i class="fa fa-caret-up" aria-hidden="true"></i> + 4.26 </span> </p>
                                    </div>
                                </div>
                                <div class="social">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Navigation Section -->
                <nav id="navbar" class="collapse navbar-collapse main-menu">
                    <div class="container">
                        <ul class="main-menu">
                            <li class="active"> <a href="{{ route('home') }}"> Home </a></li>
                            <li class="dropdown"> <a href="#" data-toggle="dropdown"> About
                                <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                                <ul>
                                    <li> <a href="{{ route('company') }}"> The Company </a> </li>
                                    <li> <a href="{{ route('mission') }}"> Vision &amp; Mission </a> </li>
                                    <li> <a href="{{ route('approach') }}"> Our Approach </a> </li>
                                    <li> <a href="{{ route('leaders') }}"> Our Team </a> </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown"> Services
                                <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                                <ul>
                                    <li> <a href="{{ route('services') }}"> Services List </a> </li>
                                    <li> <a href="{{ route('services.list.fullwidth') }}"> Services List Fullwidth </a> </li>
                                    <li> <a href="{{ route('services.single') }}"> Services Single </a> </li>
                                    <li> <a href="{{ route('services.fullwidth') }}"> Services Full Width </a> </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('technology') }}"> Technology </a> </li>
                            <li><a href="{{ route('blog') }}"> News &amp; Media </a> </li>
                            <li class="dropdown"> <a href="#" data-toggle="dropdown"> Pages
                                <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                                <ul>
                                    <li> <a href="{{ route('blog') }}"> Blog </a> </li>
                                    <li> <a href="{{ route('blog.single') }}"> Blog Single </a> </li>
                                    <li> <a href="{{ route('careers.single') }}"> Careers Single </a> </li>
                                    <li> <a href="{{ route('shortcodes') }}"> Shortcodes </a> </li>
                                    <li> <a href="{{ route('404') }}"> 404 page </a> </li>
                                    <li> <a href="{{ route('blank.page') }}"> Blank Page </a> </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('careers') }}"> CAREERS </a> </li>
                            <li><a href="{{ route('contact') }}"> CONTACT </a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header Section -->