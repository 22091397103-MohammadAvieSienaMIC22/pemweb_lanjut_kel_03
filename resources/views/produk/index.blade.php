@extends('layouts.main')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Produk
                            <a href="{{ url('produks/create') }}" class="btn btn-primary float-end">Add Produk</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Produk</th>
                                    <th>ID Kat</th>
                                    <th>ID User</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>stock</th>
                                    <th>photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apply as $item)
                                    <tr>
                                        <td>{{ $item->produk_id }}</td>
                                        <td>{{ $item->produk_id_kat }}</td>
                                        <td>{{ $item->produk_id_user }}</td>
                                        <td>{{ $item->produk_code }}</td>
                                        <td>{{ $item->produk_nama }}</td>
                                        <td>{{ $item->produk_hrg }}</td>
                                        <td>{{ $item->produk_keterangan }}</td>
                                        <td>{{ $item->produk_stock }}</td>
                                        <td>{{ $item->produk_photo }}</td>
                                        <td>
                                            <a href="{{ url('produks/'.$item->produk_id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ url('produks/'.$item->produk_id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
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
