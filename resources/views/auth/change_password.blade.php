@extends('layouts.admin')

@section('meta')
    <meta name="description" content="PRECIOUSGATE INTEGRATED SERVICES LIMITED" />
    <meta property="og:image" content="http://preciousgateintegrated.com/images/favicon.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="PRECIOUSGATE INTEGRATED SERVICES LIMITED">
@endsection

@section('style')
@endsection

@section('content')
    <div class="site-breadcrumb">
        <div class="container">
            <h2 class="breadcrumb-title">Change Password</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Change Password</li>
            </ul>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">@include('includes.notifications')</div>
                <div class="col-12">
                    <form class="main-form" action="{{ route('changePasswordPost') }}" method="post" style="margin-bottom: 40px;">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-12 mb-4">
                                <div class="input-wrapper">
                                    <label class="input-label" for="name" style="color: white;">Old Password</label>
                                    <input class="form-control" id="old_password" name="old_password" type="password" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="title1" style="color: white;">New Password</label>
                                    <input class="form-control" id="new_password" name="new_password" type="password" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="title1" style="color: white;">Confirm New Password</label>
                                    <input class="form-control" id="new_password_confirmation" name="new_password_confirmation" type="password" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12" style="margin-top: 20px;">
                                <div class="input-wrapper">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
