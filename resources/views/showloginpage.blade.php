@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="login" class="section-with-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Login to Our Site</h2>

                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">User</h5>

                                <hr>
                                <div class="text-center">
                                    <a href="{{ route('user.login') }}"> <button type="button" class="btn buy-tickets px-6" >Login</button></a>
                                </div>
                                <br>
                                <div class="text-center">
                                    <a href="{{ route('user.register') }}"><button type="button" class="btn buy-tickets-2 px-6" >Register</button> </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card mb-5 mb-lg-0">

                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Organizer</h5>


                                <hr>
                                <div class="text-center">
                                    <a href="{{ route('organizer.login') }}">    <button type="button" class="btn buy-tickets px-6">Login</button> </a>
                                </div>
                                <br>
                                <div class="text-center">
                                    <a href="{{ route('organizer.register') }}"> <button type="button" class="btn buy-tickets-2 px-6" >Register</button> </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Pro Tier -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Artist</h5>

                                <hr>

                                <div class="text-center">
                                    <a href="{{ route('artist.login') }}">  <button type="button" class="btn buy-tickets px-6" >Login</button></a>
                                </div>
                                <br>
                                <div class="text-center">
                                    <a href="{{ route('artist.register') }}">
                                        <button type="button" class="btn buy-tickets-2 px-6" >Register</button> </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Admin</h5>

                                <hr>
                                <div class="text-center">
                                    <a href="{{ route('admin.login') }}"> <button type="button" class="btn buy-tickets px-6" >Login</button></a>
                                </div>
                                <br>

                            </div>
                        </div>
                    </div>



                </div>

            </div>

            <!-- Modal Order Form -->


        </section>

    </main>
@endsection
