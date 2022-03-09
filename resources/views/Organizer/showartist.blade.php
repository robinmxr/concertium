@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">
    <section id="speakers">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Available Artists</h2>
                <p>Here are some of our Artists</p>
            </div>

            <div class="row">
                @foreach($artist as $art)
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="#">{{ $art->name }}</a></h3>
                            <p>Quas alias incidunt</p>
                            <div class="social">
                            <button class="btn btn-success">Book This Artist</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </section>
    </main>
@endsection
