@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="details">
            <div class="container">
                <div class="section-header">
                    <h2>Sold Tickets</h2>

                </div>
                @include('partials.message')


                        <table class="table table-dark table-striped">
<thead>
<th scope="col">#</th>
<th scope="col">Concert Name</th>
<th scope="col">Customer Name</th>
<th scope="col">Date</th>
<th scope="col">Quantity</th>
<th scope="col">Class</th>
<th scope="col">Price</th>
<th scope="col">Action</th>
</thead>
@foreach($ticket as $tt)
                            <tr>
                                <th scope="row">{{ $tt->id }}</th>
                                <td>{{ $tt->concert->name }}</td>
                                <td>{{ $tt->name }}</td>
                                <td>{{ $tt->concert->date }}</td>
                                <td>{{ $tt->numberofticket }}</td>
                                <td>{{ $tt->class }}</td>
                                <td>{{ $tt->totalprice }}</td>
                                <form method="post" action="{{ route('admin.ticket.delete',$tt->id) }}">
                                    @csrf<td><button type="submit" class="buy-tickets">Delete</button></td></form>
                            </tr>

                            @endforeach
                        </table>

                    </div>


        </section>

    </main>
@endsection
