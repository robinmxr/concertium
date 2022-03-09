<!DOCTYPE html>
<html lang="en" xmlns="">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Concertium</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: TheEvent - v4.7.0
    * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>


<body>
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center header-inner">
    <div class="container-fluid container-xxl d-flex align-items-center">

        <div id="logo" class="me-auto">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
            <a href="#" class="scrollto"><img src="{{ asset('img/concertium.svg') }}" alt="" title="">
            </a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>

                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>


                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <!-- .navbar -->

        @if(Auth::guard('admin')->check())
            <li class="dropdown" aria-labelledby="navbarDropdown"><a href="#">
                    <span> {{ Auth::guard('admin')->user()->name }} </span> <i class="bi bi-chevron-down"></i></a>
                <ul>

                    <li> <a class="dropdown-item" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>


                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                    </form>


                </ul>


            </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
            @elseif(Auth::guard('user')->check())
            <li class="dropdown" aria-labelledby="navbarDropdown"><a href="#">
                    <span> {{ Auth::guard('user')->user()->name }} </span> <i class="bi bi-chevron-down"></i></a>
                <ul>

                    <li> <a class="dropdown-item" href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>


                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST">
                        @csrf
                    </form>


                </ul>


            </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        @elseif(Auth::guard('artist')->check())
            <li class="dropdown" aria-labelledby="navbarDropdown"><a href="#">
                    <span> {{ Auth::guard('artist')->user()->name }} </span> <i class="bi bi-chevron-down"></i></a>
                <ul>

                    <li> <a class="dropdown-item" href="{{ route('artist.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>


                    <form id="logout-form" action="{{ route('artist.logout') }}" method="POST">
                        @csrf
                    </form>


                </ul>


            </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        @elseif(Auth::guard('organizer')->check())
            <li class="dropdown" aria-labelledby="navbarDropdown"><a href="#">
                    <span> {{ Auth::guard('organizer')->user()->name }} </span> <i class="bi bi-chevron-down"></i></a>
                <ul>

                    <li> <a class="dropdown-item" href="{{ route('organizer.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>


                    <form id="logout-form" action="{{ route('organizer.logout') }}" method="POST">
                        @csrf
                    </form>


                </ul>


            </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        @else
        </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a class="buy-tickets scrollto" href="#login">Login</a>
@endif
    </div>
</header><!-- End Header -->
