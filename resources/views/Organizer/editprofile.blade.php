@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Edit My Profile</h2>

                </div>

                <div class="row">



                    <div class="col-md-4">
                        <img src="{{ asset('img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
                    </div>


                    <div class="col-md-8">
                        <form method="post" action="{{ route('organizer.profile.update') }}">
                            @csrf
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
                                        <input type="text" required="required" name="name" value="{{ $organizer->name }}"/>
                                        <span>Name</span>
                                    </label>


                                </div>


                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="phone" value=" {{ $organizer->phone }}"/>
                                        <span>Phone</span>
                                    </label>
                                </div>
















                                <div class="row">
                                        <div class="col-sm-12" align="center">
                                        <input type="submit" class="btn buy-tickets px-4" value="Save Changes">
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                        </form>

                        </div>




                </div>
                </div>


        </section>

    </main>
@endsection
