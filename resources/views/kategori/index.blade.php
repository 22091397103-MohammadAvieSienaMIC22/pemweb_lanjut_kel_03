@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kategori
                            <a href="{{ url('kategoris/create') }}" class="btn btn-primary float-end">Add Kategori</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>kategori</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collects as $item)
                                    <tr>
                                        <td>{{ $item->kat_id }}</td>
                                        <td>{{ $item->kat_nama }}</td>
                                        <td>{{ $item->kat_keterangan }}</td>
                                        <td>
                                            <a href="{{ url('kategoris/'.$item->kat_id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ url('kategoris/'.$item->kat_id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
