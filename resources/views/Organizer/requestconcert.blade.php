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






                    <div class="col-md-8 mx-auto my-auto">
                        <form method="post" action="{{ route('organizer.concert.makerequest',$artist->id) }}">
                            @csrf
                        <div class="card">
                            <div class="card-body">
                               @include('partials.message')

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
                                    <div class="row mb-3">
                                    <label>
                                        <input type="number" required="required" name="price"/>
                                        <span>Ticket Price(General)</span>
                                    </label>
                                </div>
                                    <div class="row mb-3">
                                        <label>
                                            <select class="form-select form-select-lg mb-3" name="date">
                                                <option selected>Available Dates</option>
                                               @foreach($artist->date as $dt)
                                                <option value="{{ $dt->id }}">{{ $dt->date }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                    <div class="row mb-3">
                                        <label>
                                            <select class="form-select form-select-lg mb-3" name="venue">
                                                <option selected>Available Venues</option>
                                               @foreach($venue as $vn)
                                                <option value="{{ $vn->id }}">{{ $vn->name  }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>







                                <div class="row">
                                        <div class="col-sm-12" align="center">
                                        <input type="submit" class="btn buy-tickets px-4" value="Send Request">
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
