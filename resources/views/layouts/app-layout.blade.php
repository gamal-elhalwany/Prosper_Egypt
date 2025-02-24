<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Compatibility for IE browsers -->

    <!-- SEO Meta Tags -->
    <meta name="title" content="Prosoper Egypt"> <!-- Title of the page -->
    <meta name="description" content="A brief description of the page content"> <!-- Page description -->
    <meta name="keywords" content="keyword1, keyword2, keyword3"> <!-- Keywords (optional) -->
    <meta name="author" content="Prosoper Egypt"> <!-- Author of the page -->
    <meta name="robots" content="index, follow"> <!-- Control crawling/indexing by search engines -->

    <!-- Social Media and Open Graph -->
    <meta property="og:title" content="Your Page Title"> <!-- Title for social sharing -->
    <meta property="og:description" content="A brief description for social media">
    <!-- Description for social sharing -->
    <meta property="og:image" content="URL_to_image.jpg"> <!-- Image to display on social media -->
    <meta property="og:url" content="https://example.com"> <!-- URL of the page -->
    <meta property="og:type" content="website"> <!-- Type of content -->

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image"> <!-- Twitter card type -->
    <meta name="twitter:title" content="Your Page Title"> <!-- Twitter card title -->
    <meta name="twitter:description" content="A brief description for Twitter"> <!-- Twitter card description -->
    <meta name="twitter:image" content="URL_to_image.jpg"> <!-- Image for Twitter -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon -->

    <!-- Canonical URL -->
    <link rel="canonical" href="https://example.com"> <!-- Preferred URL of the page -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Creato Display Font CDN Link -->
    <link href="https://fonts.cdnfonts.com/css/creato-display" rel="stylesheet">

    <!-- Matrial Icons CDN Link -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('storage/images/logos/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/images/logos/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/images/logos/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('storage/images/logos/site.webmanifest') }}">    

    <title>@yield('title', 'Prosper Egypt')</title> <!-- Page title -->

    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- External CSS file -->
    <link rel="stylesheet" href="{{ asset(path: 'assets/css/landing_page.css') }}">
    <link rel="stylesheet" href="{{ asset(path: 'assets/css/about_page.css') }}">
    <link rel="stylesheet" href="{{asset(path: 'assets/css/business.css') }}">
    <link rel="stylesheet" href="{{asset(path: 'assets/css/careers.css') }}">
    <link rel="stylesheet" href="{{asset(path: 'assets/css/contact.css') }}">

</head>

<body class="{{ request()->is('/') ? 'home' : '' }}">
    <!-- Start Header -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="{{ !request()->is('/') ? 'box-shadow: 15px 0px 25px rgba(0, 0, 0, 0.5);' : '' }}">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('storage/images/logos/prosper_logo.png')}}" alt="Prosoper Egypt Holding">
                <div class="logo-title">
                    <p>Prosper Egypt</p>
                    <p>Holding</p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about-us')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('business')}}">Lines of Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('careers')}}">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact-us')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Navbar Ends -->
    </header>
    <!-- End Header -->

    @yield('content')

    <!-- Footer Section -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="info">
                        <h1>Contact Us !</h1>
                        <p>Call Us
                            <span>
                                <a href="#">+01212087255</a>
                            </span>
                        </p>
                        <p>Email Us
                            <span>
                                <a href="#">Info@Prosperegypt.com</a>
                            </span>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <ul class="navigation-list">
                        <h3>Navigation</h3>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                            <span class="material-symbols-outlined">east</span>
                        </li>
                        <li>
                            <a href="{{route('about-us')}}">About</a>
                            <span class="material-symbols-outlined">east</span>
                        </li>
                        <li>
                            <a href="{{route('business')}}">Lines of Business</a>
                            <span class="material-symbols-outlined">east</span>
                        </li>
                        <li>
                            <a href="{{route('careers')}}">Careers</a>
                            <span class="material-symbols-outlined">east</span>
                        </li>
                        <li>
                            <a href="{{route('contact-us')}}">Contact Us</a>
                            <span class="material-symbols-outlined">east</span>
                        </li>
                    </ul>
                    <div class="office">
                        <h3>Office</h3>
                        <p>24 A Al-Obour Buildings 1st floor Salah Salem Cairo, Egypt</p>
                    </div>
                    <ul class="social-list">
                        <h3>Social</h3>
                        <li>
                            <a class="white-one" href="https://www.facebook.com/Prosoperegypt">f</a>
                            <a class="colored-one" href="https://www.facebook.com/Prosoperegypt">f</a>
                        </li>
                        <li>
                            <a class="white-one" href="https://www.linkedin.com/company/prosper-egypt">in</a>
                            <a class="colored-one" href="https://www.linkedin.com/company/prosper-egypt">in</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-logo">
                    <img src="{{asset('storage/images/logos/prosper-footer-logo2.png')}}">
                </div>
                <div class="foot">
                    <p class="copy-right">Copyright © [2025] Prosper Egypt Facility Management</p>
                    <p class="rights">Designed & Developed by <span>{{config('app.developer')}}</span> All Rights Reserved</p>
                </div>
            </div> <!-- Row ends -->
        </div>
    </footer>
    <!-- Footer Section -->

    <!-- jQuery External Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS file -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- External jQuery Files -->
    <script type="text/javascript" src="{{asset('assets/js/landing_page.js')}}"></script>
</body>

</html>