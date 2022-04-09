@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Venue Details</h2>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/venue/'.$venue->image) }}"  class="img-fluid" style="height: 480px; width: 640px;">
                        <div class="card-header"><h3 class="mt-3" >Venue   : {{ $venue->name }}</h3></div>
                    </div>


                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Venue Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $venue->name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Location</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $venue->location }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Capacity</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $venue->capacity }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Cost</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $venue->cost }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Owner</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $venue->admin->name }}
                                    </div>
                                </div>
                                <hr>



<form action="{{ route('admin.venue.delete',$venue->id) }}" method="post">@csrf
    <button type="submit" class="buy-tickets-2 mx-auto">Delete Venue</button>
</form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>
@endsection
