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
            <h2 class="breadcrumb-title">Portfolio</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Portfolio</li>
            </ul>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 text-right mb-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#createPortfolio">Create Portfolio Item</button>
                </div>
                <div class="col-12 col-lg-12">@include('includes.notifications')</div>
                <div class="col-md-12 col-lg-12 text-center">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Technologies</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($portfolios as $key=>$portfolio)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$portfolio->name}}</td>
                                    <td>{{ $portfolio->technologies }}</td>
                                    <td>{{ $portfolio->created_at }}</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#viewPortfolio{{ $portfolio->id }}">View</button>
                                        <button class="btn btn-success" data-toggle="modal" data-target="#editPortfolio{{ $portfolio->id }}">Edit</button>
                                        <form class="main-form" action="{{ route('portfoliosMgtDelete',['portfolio_id'=>$portfolio->id]) }}" method="post">
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

    @foreach($portfolios as $key=>$portfolio)
    <div class="modal fade" id="viewPortfolio{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="viewPortfolio{{ $portfolio->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{ $portfolio->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body showP" style="max-height: 500px; overflow: auto;">
                    <img src="{{ asset('assets/img/portfolio/'.$portfolio->image1) }}" style="height: 200px">
                    <p>Category: {{ $portfolio->category }}</p>
                    <p>Date: {{ $portfolio->date }}</p>
                    <p>Budget: {{ $portfolio->budget }}</p>
                    <p>Location: {{ $portfolio->location }}</p>
                    <p>Website: {{ $portfolio->website }}</p>
                    <p>Technologies: {{ $portfolio->technologies }}</p>
                    <p>Client: {{ $portfolio->client }}</p>
                    {!! $portfolio->description !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editPortfolio{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="editPortfolio{{ $portfolio->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">{{ $portfolio->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="main-form" action="{{ route('portfoliosMgtUpdate',['portfolio_id'=>$portfolio->id]) }}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="modal-body" style="max-height: 500px; overflow: auto;">
                        <div class="row ">
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="name" style="color: black;">Name</label>
                                    <input class="form-control" id="name" name="name" type="text" required value="{{ $portfolio->name }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="category" style="color: black;">Category</label>
                                    <input class="form-control" id="category" name="category" type="text" required value="{{ $portfolio->category }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="date" style="color: black;">Date</label>
                                    <input class="form-control" id="date" name="date" type="date" value="{{ $portfolio->date }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="budget" style="color: black;">Budget</label>
                                    <input class="form-control" id="budget" name="budget" type="text" value="{{ $portfolio->budget }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="location" style="color: black;">Location</label>
                                    <input class="form-control" id="location" name="location" type="text" required value="{{ $portfolio->location }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="website" style="color: black;">Website</label>
                                    <input class="form-control" id="website" name="website" type="text" value="{{ $portfolio->website }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="technologies" style="color: black;">Technologies</label>
                                    <input class="form-control" id="technologies" name="technologies" type="text" required value="{{ $portfolio->technologies }}"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="client" style="color: black;">Client</label>
                                    <input class="form-control" id="client" name="client" type="text" value="{{ $portfolio->client }}"/>
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
                                    <textarea class="form-control" id="description{{ $portfolio->id }}" name="description" required style="color: black !important;">{!! $portfolio->description !!}</textarea>
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
    <div class="modal fade" id="createPortfolio" tabindex="-1" role="dialog" aria-labelledby="createPortfolio" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;">Create Portfolio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="main-form" action="{{ route('portfoliosMgtCreate') }}" method="post" enctype="multipart/form-data" novalidate>
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
                                    <label class="input-label" for="category" style="color: black;">Category</label>
                                    <input class="form-control" id="category" name="category" type="text" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="date" style="color: black;">Date</label>
                                    <input class="form-control" id="date" name="date" type="date"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="budget" style="color: black;">Budget</label>
                                    <input class="form-control" id="budget" name="budget" type="text"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="location" style="color: black;">Location</label>
                                    <input class="form-control" id="location" name="location" type="text" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="website" style="color: black;">Website</label>
                                    <input class="form-control" id="website" name="website" type="text"/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="technologies" style="color: black;">Technologies</label>
                                    <input class="form-control" id="technologies" name="technologies" type="text" required/>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="input-wrapper">
                                    <label class="input-label" for="client" style="color: black;">Client</label>
                                    <input class="form-control" id="client" name="client" type="text"/>
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
                                    <label class="input-label" for="description" style="`color: black;">Description</label>
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
            @foreach($portfolios as $key=>$portfolio)
            let demos{{$portfolio->id}} = function () {
                ClassicEditor
                    .create( document.querySelector( '#description{{ $portfolio->id }}' ),{
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
                    @foreach($portfolios as $key=>$portfolio)
                    demos{{ $portfolio->id }}();
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
