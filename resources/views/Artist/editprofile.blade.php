@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Edit Profile</h2>

                </div>
                <form method="post" action="{{ route('artist.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row">



                    <div class="col-md-4">
                        @if($artist->image!=NULL)
                            <img src="{{ asset('img/artist/'.$artist->image) }}" class="img-fluid" style="width: 640px; height: 480px;">
                        @else
                            <img src="{{ asset('img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
                        @endif
                            <div class="row m-3">

                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control">
                                </div>



                            </div>
                    </div>


                    <div class="col-md-8">

                        <div class="card">
                            <div class="card-header">
                                <h1 class="mt-3">Edit Your Profile</h1>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div class="wrapper">
                                <div class="row mb-3">

                                    <label>
                                        <input type="text" required="required" name="name" value="{{ $artist->name }}"/>
                                        <span>Name</span>
                                    </label>


                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="bandname" value="{{ $artist->bandname }}"/>
                                        <span>Band Name</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" name="genre" required="required" value="{{ $artist->genre }}"/>
                                        <span>Genre</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="phone" value=" {{ $artist->phone }}"/>
                                        <span>Phone</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="cost" value=" {{ $artist->cost }}"/>
                                        <span>Cost</span>
                                    </label>
                                </div>


                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label>
                                                <input type="text" class="dateselect" name="date[]"  />
                                                <span>Date</span>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="text" class="dateselect" name="date[]" />
                                                <span>Date</span>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="text" class="dateselect" name="date[]" />
                                                <span>Date</span>
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label>
                                                <input type="text" class="dateselect" name="date[]" />
                                                <span>Date</span>
                                            </label>
                                        </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="check" value="true" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Save Date Changes
        </label>
    </div>

                                    </div>















                                <div class="row">
                                        <div class="col-sm-12" align="center">
                                        <input type="submit" class="btn buy-tickets px-4" value="Update">
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>


                        </div>




                </div>
                </form>
                </div>


        </section>

    </main>
@endsection
