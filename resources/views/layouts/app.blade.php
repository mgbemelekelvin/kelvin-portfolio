<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kelvin .C. Mgbemele | @if (!empty($title)) <?= $title; ?> @else Welcome to My Portfolio @endif </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Welcome to Kelvin .C. Mgbemele Portfolio">
    <meta name="author" content="Kelvin Chibuikem Mgbemele Portfolio">
    <meta name="keywords" content="Kelvin Chibuikem Mgbemele, Senior Software Engineer, Software Engineer, Software, Backend Programming, Programming, Php, Laravel, Nodejs, Database, MySql, Mongodb">
    @yield('meta')
    <meta charset="utf-8">

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
</head>
<body class="home-3 bg">

<div class="preloader">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>

@include('includes.header')
<main class="main">
@yield('content')
</main>
@include('includes.footer')

<a href="#" id="scroll-top"><i class="far fa-arrow-up-to-line"></i></a>

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/counter-up.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('script')
</body>
</html>
