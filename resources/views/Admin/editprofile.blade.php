@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Edit My Profile</h2>

                </div>
                <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                <div class="row">



                    <div class="col-md-4">

                        @if($organizer->image!=NULL)
                            <img src="{{ asset('img/admin/'.$admin->image) }}" class="img-fluid" style="width: 640px; height: 480px;">
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
                                        <input type="text" required="required" name="name" value="{{ $admin->name }}"/>
                                        <span>Name</span>
                                    </label>


                                </div>

                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="phone" value=" {{ $admin->phone }}"/>
                                        <span>Phone</span>
                                    </label>
                                </div>


                                <div class="row">
                                        <div class="col-sm-12" align="center">
                                        <input type="submit" class="btn-lg buy-tickets " value="Save Changes">
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
