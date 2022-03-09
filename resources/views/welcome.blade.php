@extends('layouts.master')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
      <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>

      <a href="#about" class="about-btn scrollto">About The Event</a>
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
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
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
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">User</h5>

                <hr>
                <div class="text-center">
                    <a href="{{ route('user.login') }}"> <button type="button" class="btn btn-outline-dark" >Login</button></a>
                </div>
                  <hr>
                  <div class="text-center">
                      <a href="{{ route('user.register') }}"><button type="button" class="btn btn-outline-dark" >Register</button> </a>
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
                    <a href="{{ route('organizer.login') }}">    <button type="button" class="btn btn-outline-dark">Login</button> </a>
                </div>
                  <hr>
                  <div class="text-center">
                      <a href="{{ route('organizer.register') }}"> <button type="button" class="btn btn-outline-dark" >Register</button> </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Artist</h5>

                <hr>

                <div class="text-center">
                    <a href="{{ route('artist.login') }}">  <button type="button" class="btn btn-outline-dark" >Login</button></a>
                </div>
                  <hr>
                  <div class="text-center">
                      <a href="{{ route('artist.register') }}">
                          <button type="button" class="btn btn-outline-dark" >Register</button> </a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group mt-3">
                  <select id="ticket-type" name="ticket-type" class="form-select">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section><!-- End Buy Ticket Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>



      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
