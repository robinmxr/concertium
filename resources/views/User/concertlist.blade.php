@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Upcoming Concerts</h2>

                </div>


                        <table class="table table-dark table-striped">
<thead>
<th scope="col">#</th>
<th scope="col">Concert Name</th>
<th scope="col">Artist</th>
<th scope="col">Venue</th>
<th scope="col">Date</th>
<th scope="col">Available Tickets</th>
<th scope="col">Action</th>
</thead>
@foreach($concert as $con)
                            <tr class="mt-3 mb-3">
                                <th scope="row">1</th>
                                <td>{{ $con->name }}</td>
                                <td>{{ $con->artist->name }}</td>
                                <td>{{ $con->venue->name }}</td>
                                <td>{{ $con->date }}</td>
                                <td>{{ $con->tickets }}</td>
                                <td><a class="buy-tickets-2" href="{{ route('user.concert.view',$con->id) }}">Details</a></td>
                            </tr>

                            @endforeach
                        </table>
                    </div>


        </section>

    </main>
@endsection
