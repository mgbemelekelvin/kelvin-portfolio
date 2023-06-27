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
                    <div class="col-12 col-lg-12">@include('includes.notifications')</div>
                    <div class="col-lg-8 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>
                                    Let's discuss how I can contribute to your project's success - reach out to me today!
                                </p>
                            </div>
                            <form class="main-form" id="contact-us-form" action="{{ route('contactPost') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name:</label>
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number: (Format: +1088729387)</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject" placeholder="Your Subject" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                                </div>
                                <button type="submit" class="theme-btn">Send Message <i class="far fa-paper-plane"></i></button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-content">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Address</h5>
                                    <a href="#">103 Stillwater St. Kitchener, ON N2A 0J1 Canada</a>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Me</h5>
                                    <a href="tel:+2349060698110">+2349060698110</a>
                                </div>
                            </div>
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

    <div class="contact-map">
        <iframe src="https://www.google.com/maps?q=103+Stillwater+St,+Kitchener,+ON+N2A+0C6,+Canada&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection

@section('script')
@endsection
