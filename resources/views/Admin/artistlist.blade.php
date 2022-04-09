@extends('layouts.master')
@section('content')
    <main id="main" class="main-page">

        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="details">
            <div class="container">
                <div class="section-header">
                    <h2>Artists</h2>

                </div>


                        <table class="table table-dark table-striped">
<thead>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Band Name</th>
<th scope="col">Genre</th>
<th scope="col">Cost</th>
<th scope="col">Action</th>
<th scope="col">Action</th>
</thead>
@foreach($artist as $art)
                            <tr>
                                <th scope="row">{{ $art->id }}</th>
                                <td>{{ $art->name }}</td>
                                <td>{{ $art->bandname }}</td>
                                <td>{{ $art->genre }}</td>
                                <td>{{ $art->cost }}</td>
                                <td>
                                    <a  class="btn buy-tickets-2" href="{{ route('admin.artist.edit',$art->id) }}">Edit</a></td>
                                <form method="post" action="{{ route('admin.artist.delete',$art->id) }}">
                                    @csrf<td><button type="submit" class="buy-tickets">Delete</button></td></form>
                            </tr>

                            @endforeach
                        </table>
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <a class="btn buy-tickets px-4 mb-3" href="{{ route('admin.artist.add') }}"><span class="bi bi-plus-circle"></span>  Add New Artist</a>
                    </div>
                </div>
                    </div>


        </section>

    </main>
@endsection
