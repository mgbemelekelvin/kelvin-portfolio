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
                        <li data-filter=".Ecommerce">Ecommerce</li>
                        <li data-filter=".FinTechs">FinTechs</li>
                        <li data-filter=".Applications_Portals">Applications / Portals</li>
                        <li data-filter=".Payments">Payments</li>
                        <li data-filter=".Websites">Websites</li>
                        <li data-filter=".Laravel">Laravel</li>
                        <li data-filter=".NodeJs">NodeJs</li>
                        <li data-filter=".Others">Others</li>
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
