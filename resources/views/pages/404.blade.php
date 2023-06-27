@extends('layouts.app')

@section('meta')
    <meta name="description" content="The page you looking for is not in BetaTech Consults Limited." />
    <meta property="og:image" content="{{ asset('assets/img/logo/favicon.png') }}">
@endsection

@section('style')
@endsection

@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <h2 class="breadcrumb-title">404 Error</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">404 Error</li>
            </ul>
        </div>
    </div>

    <div class="error-area py-120">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="error-wrapper">
                    <img src="{{ asset('assets/img/error/01.png') }}" alt="">
                    <h2>Opos... Page Not Found!</h2>
                    <p>The page you looking for not found may be it not exist or removed.</p>
                    <a href="{{ route('home') }}" class="theme-btn">Go Back Home <i class="far fa-home"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
