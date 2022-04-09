@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>My Wallet</h2>

                </div>

                <div class="row">



                    <div class="col-md-12 mx-auto my-auto">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0"> Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                {{ $user->name }}
                                            </div>
                                        </div>
                                        <hr>



                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Balance</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->balance }} Taka
                                        </div>
                                    </div>
                                    <hr>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-header mb-3">
                                            Transactions
                                        </div>
                                        @foreach($ticket as $tt)
                                            <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Ticket </h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                - {{ $tt->totalprice }} Taka
                                            </div>
                                        </div>
                                        <hr>
                                        @endforeach
                                            @foreach($payment as $pt)
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Withdraw</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        - {{ $pt->amount }} Taka
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach

                                    </div>





                                <div class="row">

                                        <div class="col-sm-12" align="center">

                                                <a class="btn btn-lg buy-tickets-2 mx-auto" href="{{ route('user.wallet.withdraw') }}">WithDraw</a>

                                        </div>




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