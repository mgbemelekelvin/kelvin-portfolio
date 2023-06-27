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
            <h2 class="breadcrumb-title">Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 text-right mb-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#createService">Create Service</button>
                </div>
                <div class="col-12 col-lg-12">@include('includes.notifications')</div>
                <div class="col-md-12 col-lg-12 text-center">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Short Detail</th>
                                <th scope="col">Flaticon</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $key=>$service)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$service->name}}</td>
                                    <td>{{ $service->short_detail }}</td>
                                    <td><i class="flaticon-{{ $service->flaticon }}"></i></td>
                                    <td>{{ $service->created_at }}</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#viewService{{ $service->id }}">View</button>
                                        <button class="btn btn-success" data-toggle="modal" data-target="#editService{{ $service->id }}">Edit</button>
                                        <form class="main-form" action="{{ route('servicesMgtDelete',['service_id'=>$service->id]) }}" method="post">
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

    @foreach($services as $key=>$service)
    <div class="modal fade" id="viewService{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="viewService{{ $service->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{ $service->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body showP" style="max-height: 500px; overflow: auto;">
                    <img src="{{ asset('assets/img/services/'.$service->image1) }}" style="width: 100%">
                    {!! $service->description !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editService{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editService{{ $service->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{ $service->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="main-form" action="{{ route('servicesMgtUpdate',['service_id'=>$service->id]) }}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="modal-body" style="max-height: 500px; overflow: auto;">
                        <div class="row ">
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="name" style="color: black;">Name</label>
                                    <input class="form-control" id="name" name="name" type="text" required value="{{ $service->name }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="short_detail" style="color: black;">Short Detail</label>
                                    <input class="form-control" id="short_detail" name="short_detail" type="text" required value="{{ $service->short_detail }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="flaticon" style="color: black;">Icon</label>
                                    <input class="form-control" id="flaticon" name="flaticon" type="file"/>
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
                                    <label class="input-label" for="description" style="color: black;">Description</label>
                                    <textarea class="form-control" id="description{{ $service->id }}" name="description" required style="color: black !important;">{!! $service->description !!}</textarea>
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
                <form class="main-form" action="{{ route('servicesMgtCreate') }}" method="post" enctype="multipart/form-data" novalidate>
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
                                    <label class="input-label" for="short_detail" style="color: black;">Short Detail</label>
                                    <input class="form-control" id="short_detail" name="short_detail" type="text" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="flaticon" style="color: black;">Icon</label>
                                    <input class="form-control" id="flaticon" name="flaticon" type="file" required/>
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
                                    <label class="input-label" for="description" style="color: black;">Description</label>
                                    <textarea class="form-control" id="descriptionCreate" name="description" required style="color: black !important;"></textarea>
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
    <script src="{{ asset('assets/js/ckeditor-classic.bundle.js') }}"></script>
    <script>
        const KTCkeditor = function() {
            // Private functions
            @foreach($services as $key=>$service)
            let demos{{$service->id}} = function () {
                ClassicEditor
                    .create( document.querySelector( '#description{{ $service->id }}' ),{
                            mediaEmbed: {
                                previewsInData:true
                            },
                        }
                    )
                    .then( editor => {
                    } )
                    .catch( error => {
                        alert("Info !", error, "error");
                    } );
            }
            @endforeach
            let demosCreate = function () {
                ClassicEditor
                    .create( document.querySelector( '#descriptionCreate' ),{
                            mediaEmbed: {
                                previewsInData:true
                            },
                        }
                    )
                    .then( editor => {
                    } )
                    .catch( error => {
                        alert("Info !", error, "error");
                    } );
            }
            return {
                // public functions
                init: function() {
                    @foreach($services as $key=>$service)
                    demos{{ $service->id }}();
                    @endforeach
                    demosCreate();
                }
            };
        }();
        jQuery(document).ready(function() {
            KTCkeditor.init();
        });
    </script>
@endsection
