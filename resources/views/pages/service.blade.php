@extends('layouts.app')

@section('meta')
    <meta name="title" content="{{ $service->name }}" />
    <meta name="description" content="{{ $service->short_detail }}" />
    <meta property="og:image" content="{{ asset('assets/img/service/'.$service->image1) }}">
@endsection

@section('style')
    <style>
        h1, h2, h3, h4, h5, h6 {
            color: #ffffff !important;
        }
    </style>
@endsection

@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $service->name }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active"><a href="{{ route('services') }}">Services</a> / {{ $service->name }}</li>
            </ul>
        </div>
    </div>

    <div class="service-single-area py-120">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-sidebar">
                            <div class="widget category">
                                <h4 class="widget-title">All Services</h4>
                                <div class="category-list">
                                    @foreach($allServices as $allService)
                                        <a href="{{ route('service',['service'=>$allService->meta_name]) }}"><i class="far fa-long-arrow-right"></i>{{ $allService->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="widget service-download">
                                <h4 class="widget-title">Resume</h4>
                                <a href="{{ env('CV') }}"><i class="far fa-file-pdf"></i> Download mu CV (pdf)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="service-details">
                            <div class="service-details-img mb-30">
                                <img src="{{ asset('assets/img/service/'.$service->image1) }}" alt="thumb">
                            </div>
                            <div class="service-details">
                                <h3 class="mb-30">{{ $service->name }}</h3>
                                {!! $service->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
