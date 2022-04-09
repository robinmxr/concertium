@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <form action="{{ route('admin.user.store') }}" method="post">
                @csrf
            <div class="container">
                <div class="section-header">
                    <h2>Add a New User</h2>

                </div>

                <div class="row">






                    <div class="col-md-8 mx-auto my-auto">

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
                                        <input type="email" required="required" name="email"/>
                                        <span>Email</span>
                                    </label>
                                </div>
                                <div class="row mb-3">
                                    <label>
                                        <input type="number" required="required" name="phone"/>
                                        <span>Phone</span>
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
                        <input type="submit" class="btn buy-tickets px-4" value="Create User">
                    </div>
                </div>

                </div>
            </form>





        </section>

    </main>
@endsection
