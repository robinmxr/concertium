@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <form action="{{ route('admin.artist.update',$artist->id) }}" method="post">
                @csrf
            <div class="container">
                <div class="section-header">
                    <h2>Edit Artist</h2>

                </div>

                <div class="row">






                    <div class="col-md-8 mx-auto my-auto">

                        <div class="card">
                            <div class="card-body">
                               @include('partials.message')

                                <div class="wrapper">
                                <div class="row mb-3">

                                    <label>
                                        <input type="text" required="required" name="balance" value="{{ $artist->balance }}"/>
                                        <span>Balance</span>
                                    </label>


                                </div>







                                </div>
                                </div>
                            </div>



                        </div>




                </div>
                <div class="row mb-3">
                    <div class="col-sm-12" align="center">
                        <input type="submit" class="btn buy-tickets px-4" value="Update Artist">
                    </div>
                </div>

                </div>
            </form>





        </section>

    </main>
@endsection
