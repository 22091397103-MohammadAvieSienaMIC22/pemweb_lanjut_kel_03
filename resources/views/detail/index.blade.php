@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Detail
                            <a href="{{ url('details/create') }}" class="btn btn-primary float-end">Order Detail</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Order</th>
                                    <th>ID Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ambil as $item)
                                    <tr>
                                        <td>{{ $item->detail_id_order }}</td>
                                        <td>{{ $item->detail_id_produk }}</td>
                                        <td>{{ $item->detail_harga }}</td>
                                        <td>{{ $item->detail_jml }}</td>
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

