@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Send the Artist a Request</h2>

                </div>

                <div class="row">






                    <div class="col-md-12">
                        <form method="post" action="{{ route('artist.profile.update') }}">
                            @csrf
                        <div class="card">
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <div class="wrapper">
                                <div class="row mb-3">

                                    <label>
                                        <input type="text" required="required" value="{{ $organizer->name }}"/>
                                        <span>Name</span>
                                    </label>


                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" value="{{ $organizer->email }}"/>
                                        <span>Email</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" value="{{ $organizer->phone }}"/>
                                        <span>Phone</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="name"/>
                                        <span>Concert Name</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="songcount"/>
                                        <span>Number of Songs</span>
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
