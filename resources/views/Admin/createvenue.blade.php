@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Add a New Venue</h2>

                </div>

                <div class="row">






                    <div class="col-md-12">
<form action="{{ route('admin.venue.store') }}" method="post">
    @csrf
                        <div class="card">
                            <div class="card-body">
                               @include('partials.message')

                                <div class="wrapper">
                                <div class="row mb-3">

                                    <label>
                                        <input type="text" required="required" name="name"/>
                                        <span>Name</span>
                                    </label>


                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="number" required="required" name="capacity"/>
                                        <span>Capacity</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="text" required="required" name="cost"/>
                                        <span>Cost</span>
                                    </label>
                                </div>



                                <div class="row">
                                        <div class="col-sm-12" align="center">
                                        <input type="submit" class="btn buy-tickets px-4" value="Save Changes">
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
</form>


                        </div>




                </div>
                </div>


        </section>

    </main>
@endsection
