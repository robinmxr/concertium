@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">
        <section id="buy-tickets" class="section-with-bg">
<div class="container" data-aos="fade-up">

    <div class="section-header">
        <h2>Buy Tickets</h2>
    </div>

    <div class="row">

        <!-- Pro Tier -->

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Regular</h5>
                    <h6 class="card-price text-center">TK {{ $concert->baseprice }}</h6>
                    <hr>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                        <li><span class="fa-li"><i class="fa fa-check"></i></span>No Extra Gifts</li>

                    </ul>
                    <hr>
                    <div class="text-center">
                        <a class="btn" href="{{ route('user.ticket.buy',['id'=>$concert->id,'class'=>'regular']) }}">Buy Now</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Standard</h5>
                    <h6 class="card-price text-center">TK {{ $concert->baseprice*1.2 }}</h6>
                    <hr>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Complementary Badge</li>

                    </ul>
                    <hr>
                    <div class="text-center">
                        <a class="btn" href="{{ route('user.ticket.buy',['id'=>$concert->id,'class'=>'standard']) }}" >Buy Now</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
                    <h6 class="card-price text-center">TK {{ $concert->baseprice*1.5 }}</h6>
                    <hr>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Premium Seating</li>
                        <li><span class="fa-li"><i class="fa fa-check"></i></span>Tshirts</li>

                    </ul>
                    <hr>
                    <div class="text-center">
                        <a class="btn" href="{{ route('user.ticket.buy',['id'=>$concert->id,'class'=>'premium']) }}">Buy Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
        </section>
    </main>
@endsection
