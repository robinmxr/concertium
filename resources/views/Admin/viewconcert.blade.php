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
                        <img src="{{ asset('img/venue/'.$concert->venue->image) }}"  class="img-fluid" style="height: 480px; width: 640px;">
                        <div class="card-header"><h3 class="mt-3" >Venue   : {{ $concert->venue->name }}</h3></div>
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
                                        <h6 class="mb-0">Artist</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->artist->name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Tickets</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->tickets }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Song Count</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->songcount }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->date }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Ticket Price</h6>
                                    </div>
                                    <div class="col-sm-3 text-secondary">
                                        General : {{ $concert->baseprice }}
                                    </div>
                                    <div class="col-sm-3 text-secondary">
                                        Standard : {{ $concert->baseprice*1.2 }}
                                    </div>
                                    <div class="col-sm-3 text-secondary">
                                        Premium : {{ $concert->baseprice*1.5 }}
                                    </div>
                                </div>
                                <hr>



                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>
@endsection
