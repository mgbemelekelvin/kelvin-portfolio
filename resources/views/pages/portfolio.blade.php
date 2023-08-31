@extends('layouts.app')
    <meta name="title" content="{{ $portfolio->name }}" />
    <meta name="description" content="{{ $portfolio->name }}, one of Kelvin's master-piece" />
    <meta property="og:image" content="{{ asset('assets/img/portfolio/'.$portfolio->image1) }}">
@section('meta')
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
            <h2 class="breadcrumb-title">{{ $portfolio->name }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active"><a href="{{ route('portfolios') }}">Portfolio</a> / {{ $portfolio->name }}</li>
            </ul>
        </div>
    </div>

    <div class="portfolio-single-area py-120">
        <div class="container">
            <div class="portfolio-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="portfolio-sidebar">
                            <div class="widget portfolio-sidebar-content">
                                <h4 class="portfolio-sidebar-title">{{ $portfolio->name }} Details</h4>
                                <ul>
                                    <li>
                                        Category <span>{{ $portfolio->category }}</span>
                                    </li>
                                    @if($portfolio->date)
                                    <li>
                                        Lunch Date <span>{{ \Carbon\Carbon::parse($portfolio->date)->format('d, F Y') }}</span>
                                    </li>
                                    @endif
                                    @if($portfolio->client)
                                    <li>
                                        Client Name <span>{{ $portfolio->client }}</span>
                                    </li>
                                    @endif
                                    @if($portfolio->budget)
                                    <li>
                                        Budget <span>{{ $portfolio->budget }}</span>
                                    </li>
                                    @endif
                                    @if($portfolio->location)
                                    <li>
                                        Location <span>{{ $portfolio->location }}</span>
                                    </li>
                                    @endif
                                    @if($portfolio->technologies)
                                    <li>
                                        Technologies <span>{{ $portfolio->technologies }}</span>
                                    </li>
                                    @endif
                                    @if($portfolio->website)
                                    <li>
                                        URL <span ><a href="{{ $portfolio->website }}" style="color:white;">{{ $portfolio->website }}</a></span>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="widget new-portfolio">
                                <h4>Need A Brand New Project?</h4>
                                <a href="tel:+12265037799" class="new-portfolio-btn">Contact Me Now <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="portfolio-details">
                            <div class="portfolio-details-img mb-30">
                                <div style="height: 350px; background-image: url({{ asset('assets/img/portfolio/'.$portfolio->image1) }}); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
                            </div>
                            <div class="portfolio-details">
                                <h3 class="mb-30">{{ $portfolio->name }}</h3>
                                {!! $portfolio->description !!}
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
