@extends('layouts.master')
@section('content')
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">Logged In <br><span>as</span> Artist</h1>


            <a href="{{ route('artist.concert.list') }}" class="about-btn scrollto">All Concerts</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>About Concertium</h2>
                        <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
                            accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
                            est ut optio sequi unde.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Where</h3>
                        <p>Downtown Conference Center, New York</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>When</h3>
                        <p>Monday to Wednesday<br>10-12 December</p>
                    </div>
                </div>
            </div>
        </section>





@endsection
