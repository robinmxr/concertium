@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Buy Ticket</h2>

                </div>
                <form method="post" action="{{ route('user.ticket.store',$concert->id) }}" >
                    @csrf

                <div class="row">






                    <div class="col-md-12" align="center">

                        <div class="card">
                            <div class="card-header">
                                <h1 class="mt-3">{{ $concert->name }} @ {{ $concert->date }}</h1>
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
                                            <input type="text" required="required" name="name" value="{{ Auth::guard('user')->user()->name }}"/>
                                            <span>Name</span>
                                        </label>
                                    </div>

                                        <div class="row mb-3">
                                            <label>
                                                <input type="text" required="required" name="phone" />
                                                <span>Phone</span>
                                            </label>
                                        </div>




                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="email" />
                                        <span>Email</span>
                                    </label>
                                </div>
                                    <div class="row mb-3">
                                        <label>
                                            <input type="number" required="required" name="quantity" min="1" max="3">
                                            <span>Ticket Quantity</span>
                                        </label>
                                    </div>
                                    <div class="row mb-3">

                                        <label>
                                            <input type="text" required="required" name="class"  value="{{ $ticket_class }}"/>
                                        </label>


                                    </div>



                                <div class="row">
                                        <div class="col-sm-12" align="center">
                                        <input type="submit" class="btn buy-tickets px-4" value="Confirm Purchase">
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
