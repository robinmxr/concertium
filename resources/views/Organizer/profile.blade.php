@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>My Profile</h2>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        @if($organizer->image!=NULL)
                            <img src="{{ asset('img/organizer/'.$organizer->image) }}" class="img-fluid" style="width: 640px; height: 480px;">
                        @else
                            <img src="{{ asset('img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
                        @endif
                   </div>


                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-header">
                               <h3 class="mt-3">Organizer Information</h3>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $organizer->name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $organizer->email }}
                                    </div>
                                </div>


                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Balance</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $organizer->balance }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $organizer->phone }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12" align="center">
                                        <a class="btn buy-tickets px-4" href="{{ route('organizer.profile.edit') }}">Edit Information</a>
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
