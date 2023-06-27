@extends('layouts.admin')

@section('meta')
    <meta name="description" content="Welcome Kelvin Chibuikem Mgbemele. " />
    <meta property="og:image" content="{{ asset('assets/img/logo/logo.png') }}">
@endsection

@section('style')
@endsection

@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <h2 class="breadcrumb-title">Welcome Kelvin</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">My Dashboard</li>
            </ul>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 text-center">
                    <h1 style="color: white;">What would you like to odo today?</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
