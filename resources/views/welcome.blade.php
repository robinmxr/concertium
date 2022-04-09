@extends('layouts.master')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">The Elegant Solution to<br><span>Manage</span> Concerts</h1>
      <p class="mb-4 pb-0">Sector 10,Uttara,Dhaka,Bangladesh</p>

      <a href="#about" class="about-btn scrollto">About Concertium</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>About Concertium</h2>
            <p><span>Concertium is a web-Based Fully Functional Concert Management System .</span> </p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Anywhere In the Country</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Any Day</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Venue</h2>
          <p>Check our Venues from the recent events</p>
        </div>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">
            @foreach($venue as $vn)
          <div class="swiper-slide"><a href="{{ asset('/img/venue/'.$vn->image) }}" class="gallery-lightbox"><img src="{{ asset('/img/venue/'.$vn->image) }}" class="img-fluid" alt=""></a></div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->







    <!-- ======= Buy Ticket Section ======= -->
  <!-- End Buy Ticket Section -->




    <!-- ======= Contact Section ======= -->
   <!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
