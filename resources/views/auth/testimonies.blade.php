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
            <h2 class="breadcrumb-title">Testimonies</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Testimonies</li>
            </ul>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 text-right mb-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#createService">Create Testimony</button>
                </div>
                <div class="col-12 col-lg-12">@include('includes.notifications')</div>
                <div class="col-md-12 col-lg-12 text-center">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonies as $key=>$testimony)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$testimony->name}}</td>
                                    <td>{{ $testimony->company }}</td>
                                    <td>{{ $testimony->created_at }}</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#viewService{{ $testimony->id }}">View</button>
                                        <button class="btn btn-success" data-toggle="modal" data-target="#editService{{ $testimony->id }}">Edit</button>
                                        <form class="main-form" action="{{ route('testimoniesDelete',['testimony_id'=>$testimony->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start contact-us -->

    @foreach($testimonies as $key=>$testimony)
    <div class="modal fade" id="viewService{{ $testimony->id }}" tabindex="-1" role="dialog" aria-labelledby="viewService{{ $testimony->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{ $testimony->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body showP" style="max-height: 500px; overflow: auto;">
                    <img src="{{ asset('assets/img/testimonial/'.$testimony->image1) }}" style="width: 100%">
                    <p>{{ $testimony->company }}</p>
                    {!! $testimony->message !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editService{{ $testimony->id }}" tabindex="-1" role="dialog" aria-labelledby="editService{{ $testimony->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{ $testimony->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="main-form" action="{{ route('testimoniesUpdate',['testimony_id'=>$testimony->id]) }}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="modal-body" style="max-height: 500px; overflow: auto;">
                        <div class="row ">
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="name" style="color: black;">Name</label>
                                    <input class="form-control" id="name" name="name" type="text" required value="{{ $testimony->name }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="company" style="color: black;">Short Detail</label>
                                    <input class="form-control" id="company" name="company" type="text" required value="{{ $testimony->company }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="image1" style="color: black;">Image</label>
                                    <input class="form-control" id="image1" name="image1" type="file"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-wrapper">
                                    <label class="input-label" for="message" style="color: black;">Message</label>
                                    <textarea class="form-control"  name="message" required style="color: black !important;">{!! $testimony->message !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <div class="modal fade" id="createService" tabindex="-1" role="dialog" aria-labelledby="createService" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">Create Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="main-form" action="{{ route('testimoniesCreate') }}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="modal-body" style="max-height: 500px; overflow: auto;">
                        <div class="row ">
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="name" style="color: black;">Name</label>
                                    <input class="form-control" id="name" name="name" type="text" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="company" style="color: black;">Short Detail</label>
                                    <input class="form-control" id="company" name="company" type="text" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="image1" style="color: black;">Image</label>
                                    <input class="form-control" id="image1" name="image1" type="file"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="input-wrapper">
                                    <label class="input-label" for="message" style="color: black;">Description</label>
                                    <textarea class="form-control" id="message" name="message" required style="color: black !important;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection
