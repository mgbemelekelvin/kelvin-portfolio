@extends('layouts.app')

@section('meta')
    <meta name="description" content="Contact Engr. kelvin .C. Mgbemele" />
        <meta property="og:image" content="{{ asset('assets/img/logo/favicon.png') }}">
@endsection

@section('style')
@endsection

@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Me</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Contact Me</li>
            </ul>
        </div>
    </div>

    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row contact-content">
                            <div class="col-md">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Address</h5>
                                        <a href="#">Waterloo, Ontario Canada</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Call Me</h5>
                                        <a href="tel:+12265037799">+1(226)-503-7799</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Email Me</h5>
                                        <a href="mailto:mgbemelekelvin@gmail.com">
                                            <span class="__cf_email__">mgbemelekelvin@gmail.com</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="contact-info mb-0">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-globe"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Website</h5>
                                        <a href="#">https://engr-kelvin.com</a>
                                    </div>
                                </div>
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
