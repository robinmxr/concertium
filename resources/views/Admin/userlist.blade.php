@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="details">
            <div class="container">
                <div class="section-header">
                    <h2>Users</h2>

                </div>
                @include('partials.message')


                        <table class="table table-dark table-striped">
<thead>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">EMail</th>
<th scope="col">Phone</th>
<th scope="col">Action</th>
<th scope="col">Action</th>
</thead>
@foreach($user as $usr)
                            <tr>
                                <th scope="row">{{ $usr->id }}</th>
                                <td>{{ $usr->name }}</td>
                                <td>{{ $usr->email }}</td>
                                <td>{{ $usr->phone }}</td>
                                <td>
                                <a  class="btn buy-tickets-2" href="{{ route('admin.user.edit',$usr->id) }}">Edit</a></td>
                            <form method="post" action="{{ route('admin.user.delete',$usr->id) }}">
                                    @csrf<td><button type="submit" class="buy-tickets">Delete</button></td></form>
                            </tr>

                            @endforeach
                        </table>
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <a class="btn buy-tickets px-4 mb-3" href="{{ route('admin.user.add') }}"><span class="bi bi-plus-circle"></span>  Add New User</a>
                    </div>
                </div>
                    </div>


        </section>

    </main>
@endsection
