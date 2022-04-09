@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <form action="{{ route('organizer.wallet.storewithdraw') }}" method="post">
                @csrf
            <div class="container">
                <div class="section-header">
                    <h2>Withdraw Money</h2>

                </div>

                <div class="row">






                    <div class="col-md-8 mx-auto my-auto">

                        <div class="card">
                            <div class="card-body">
                               @include('partials.message')

                                <div class="wrapper">
                                    <div class="row mb-3">

                                        <label>
                                            <input type="text" required="required" name="bankname"/>
                                            <span>Bank Name</span>
                                        </label>


                                    </div>
                                <div class="row mb-3">

                                    <label>
                                        <input type="text" required="required" name="accname"/>
                                        <span>Account Name</span>
                                    </label>


                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="number" required="required" name="accnum"/>
                                        <span>Account Number</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="number" required="required" name="amount" max="{{ $organizer->balance }}"/>
                                        <span>Amount</span>
                                    </label>
                                </div>
                                    <div class="row mb-3">
                                        <label>
                                            <input type="password" required="required" name="password"/>
                                            <span>Password</span>
                                        </label>
                                    </div>





                                </div>
                                </div>
                            </div>



                        </div>




                </div>
                <div class="row mb-3">
                    <div class="col-sm-12" align="center">
                        <input type="submit" class="btn buy-tickets px-4" value="Request Withdraw">
                    </div>
                </div>

                </div>
            </form>





        </section>

    </main>
@endsection
