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
                                        <h6 class="mb-0">Organizer Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->organizer->name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Organizer Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->organizer->email }}
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
                                    <div class="col-sm-9 text-secondary">
                                        {{ $concert->baseprice }}
                                    </div>
                                </div>
                                <hr>



                                <div class="row">
                                    @if($concert->status == 'approved')
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Status</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Approved
                                        </div>
                                    @else
                                    <div class="col-sm-6" align="center">
                                        <form method="post" action="{{ route('artist.concert.approve',$concert->id) }}">
                                        @csrf
                                            <button class="btn buy-tickets px-4" type="submit" >Accept</button>
                                        </form>
                                    </div>


                                    <div class="col-sm-6" align="center">
                                        <form method="post" action="{{ route('artist.concert.delete',$concert->id) }}">
                                            @csrf
                                        <button class="btn buy-tickets px-4" type="submit">Reject</button>
                                        </form>
                                    </div>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>
@endsection
