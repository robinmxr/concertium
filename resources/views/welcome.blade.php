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
            <h2>About The Event</h2>
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
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/1.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/1.jpg') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/2.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/2.jpg') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/3.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/3.jpg') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/4.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/4.jpg') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/5.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/5.jpg') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/6.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/6.jpg') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/7.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/7.jpg') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('/img/gallery/8.jpg') }}" class="gallery-lightbox"><img src="{{ asset('/img/gallery/8.jpg') }}" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </section><!-- End Gallery Section -->





    <!-- ======= Buy Ticket Section ======= -->
    <section id="login" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Login to Our Site</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card text-white bg-dark mb-3">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">User</h5>

                <hr>
                <div class="text-center">
                    <a href="{{ route('user.login') }}"> <button type="button" class="btn buy-tickets px-6" >Login</button></a>
                </div>
                  <br>
                  <div class="text-center">
                      <a href="{{ route('user.register') }}"><button type="button" class="btn buy-tickets px-6" >Register</button> </a>
                </div>
              </div>
            </div>
          </div>



            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-5 mb-lg-0">

                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Organizer</h5>


                        <hr>
                        <div class="text-center">
                            <a href="{{ route('organizer.login') }}">    <button type="button" class="btn buy-tickets px-6">Login</button> </a>
                        </div>
                        <br>
                        <div class="text-center">
                            <a href="{{ route('organizer.register') }}"> <button type="button" class="btn buy-tickets px-6" >Register</button> </a>
                        </div>
                    </div>
                </div>
            </div>


          <!-- Pro Tier -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card text-white bg-dark mb-3">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Artist</h5>

                <hr>

                <div class="text-center">
                    <a href="{{ route('artist.login') }}">  <button type="button" class="btn buy-tickets px-6" >Login</button></a>
                </div>
                  <br>
                  <div class="text-center">
                      <a href="{{ route('artist.register') }}">
                          <button type="button" class="btn buy-tickets px-6" >Register</button> </a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Modal Order Form -->


    </section><!-- End Buy Ticket Section -->

    <!-- ======= Contact Section ======= -->
   <!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
