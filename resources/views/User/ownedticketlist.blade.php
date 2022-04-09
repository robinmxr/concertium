@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>Booked Tickets</h2>

                </div>


                        <table class="table table-dark table-striped">
<thead>
<th scope="col">#</th>
<th scope="col">Concert Name</th>
<th scope="col">Venue</th>
<th scope="col">Date</th>
<th scope="col">Class</th>
<th scope="col">Quantity</th>
<th scope="col">Price</th>
<th scope="col">Action</th>
</thead>
@foreach($ticket as $tt)
                            <tr class="mt-3 mb-3">
                                <th scope="row">1</th>
                                <td>{{ $tt->concert->name }}</td>
                                <td>{{ $tt->concert->venue->name }}</td>
                                <td>{{ $tt->concert->date }}</td>
                                <td>{{ $tt->class }}</td>
                                <td>{{ $tt->numberofticket }}</td>
                                <td>{{ $tt->totalprice }}</td>
                                <form method="post" action="{{ route('user.ticket.refund',$tt->id) }}">@csrf
                                    <td><button class="buy-tickets-2" type="submit">Details</button></td>
                                </form>

                            </tr>

                            @endforeach
                        </table>
                    </div>


        </section>

    </main>
@endsection
