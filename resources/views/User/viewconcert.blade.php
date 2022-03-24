@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Concert Details</h2>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
                        <div class="card-header"><h3 class="mt-3" >Venue </h3></div>
                    </div>


                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Concert Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Song Count</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->email }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Band Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->bandname }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Genre</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->genre }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Cost</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->cost }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Balance</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->balance }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->phone }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12" align="center">
                                        <a class="buy-tickets" href="{{ route('user.profile.edit') }}">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>
@endsection
