@extends('layouts.app')

@section('meta')
    <meta name="description" content="Services Engr. Kelvin Provide For Clients / Organizations" />
    <meta property="og:image" content="{{ asset('assets/img/logo/favicon.png') }}">
@endsection

@section('style')
@endsection

@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <h2 class="breadcrumb-title">My Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">My Services</li>
            </ul>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <span class="site-title-tagline"><i class="far fa-bring-forward"></i> My Services</span>
                        <h2 class="site-title">Services I Provide <span>For</span> Clients / Organizations.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-6 col-lg-3">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('assets/img/icon/'.$service->flaticon) }}" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="javascript:;">{{ $service->name }}</a>
                            </h3>
                            <p> {{ $service->short_detail }} </p>
                            <div class="service-arrow">
                                <a href="{{ route('service',[$service->meta_name]) }}">Read More <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
