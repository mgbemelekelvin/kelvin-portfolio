@extends('layouts.app')

@section('meta')
    <meta name="description" content="Explore Some of Engr. Kelvin's Work" />
    <meta property="og:image" content="{{ asset('assets/img/logo/favicon.png') }}">
@endsection

@section('style')
@endsection

@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <h2 class="breadcrumb-title">My Portfolio</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">My Portfolio</li>
            </ul>
        </div>
    </div>

    <div class="portfolio-area bg-2 py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="site-heading">
                        <span class="site-title-tagline"><i class="far fa-bring-forward"></i> Portfolio</span>
                        <h2 class="site-title">Explore My <span>Awesome</span> Work</h2>
                    </div>
                </div>
                <div class="filter-controls">
                    <ul class="filter-btns">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".Ecommerce" style="font-size: 14px !important;">Ecommerce</li>
                        <li data-filter=".FinTechs" style="font-size: 14px !important;">FinTechs</li>
                        <li data-filter=".Applications_Portals" style="font-size: 14px !important;">Applications / Portals</li>
                        <li data-filter=".Payments" style="font-size: 14px !important;">Payments</li>
                        <li data-filter=".Websites" style="font-size: 14px !important;">Websites</li>
                        <li data-filter=".Laravel" style="font-size: 14px !important;">Laravel</li>
                        <li data-filter=".NodeJs" style="font-size: 14px !important;">NodeJs</li>
                        <li data-filter=".Spring-boot" style="font-size: 14px !important;">Spring-boot</li>
                        <li data-filter=".Others" style="font-size: 14px !important;">Others</li>
                    </ul>
                </div>
            </div>
            <div class="row filter-box">
                @foreach($portfolios as $portfolio)
                <div class="col-md-6 col-lg-4 filter-item @foreach(explode(',', $portfolio->category) as $cat) {{ $cat }} @endforeach">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="{{ asset('assets/img/portfolio/'.$portfolio->image1) }}" alt="{{ $portfolio->name }}-Kelvin-Mgbemele">
                        </div>
                        <div class="portfolio-content">
                            <a href="{{ route('portfolio',[$portfolio->meta_name]) }}">
                                <h4 class="portfolio-title">{{ Str::limit($portfolio->name, 20, '...') }}</h4>
                            </a>
                            <ul class="portfolio-category">
                                <li><a href="{{ route('portfolio',[$portfolio->meta_name]) }}">{{ Str::limit($portfolio->technologies, 30, '...') }}</a></li>
                            </ul>
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
