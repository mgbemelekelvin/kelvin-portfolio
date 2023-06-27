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
            <h2 class="breadcrumb-title">Feedbacks</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Feedbacks</li>
            </ul>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">@include('includes.notifications')</div>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feedbacks as $key=>$feedback)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $feedback->name }}</td>
                                    <td><a href="mailto:{{ $feedback->email }}" style="color: dodgerblue;">{{ $feedback->email }}</a></td>
                                    <td><a href="tel:{{ $feedback->phone }}" style="color: dodgerblue;">{{ $feedback->phone }}</a></td>
                                    <td>{{ $feedback->subject }}</td>
                                    <td>{{ $feedback->message }}</td>
                                    <td>{{ $feedback->created_at->format('d F Y | h:i:a') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection
