@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="details">
            <div class="container">
                <div class="section-header">
                    <h2>Venues</h2>

                </div>


                        <table class="table table-dark table-striped">
<thead>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Capacity</th>
<th scope="col">Action</th>
</thead>
@foreach($venue as $ven)
                            <tr>
                                <th scope="row">{{ $ven->id }}</th>
                                <td>{{ $ven->name }}</td>
                                <td>{{ $ven->capacity }}</td>
                                <td><a class="buy-tickets">Details</a></td>
                            </tr>

                            @endforeach
                        </table>
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <a class="btn buy-tickets px-4 mb-3" href="{{ route('admin.venue.create') }}">Add New Venue</a>
                    </div>
                </div>
                    </div>


        </section>

    </main>
@endsection
