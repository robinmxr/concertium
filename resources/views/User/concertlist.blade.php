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
<th scope="col">Name</th>
<th scope="col">Status</th>
<th scope="col">Action</th>
</thead>
@foreach($concert as $con)
                            <tr class="mt-3 mb-3">
                                <th scope="row">1</th>
                                <td>{{ $con->name }}</td>
                                <td>{{ $con->status }}</td>
                                <td><a class="buy-tickets">Details</a></td>
                            </tr>

                            @endforeach
                        </table>
                    </div>


        </section>

    </main>
@endsection
