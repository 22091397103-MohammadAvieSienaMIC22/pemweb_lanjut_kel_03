@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Add Users
                            <a href="{{ url('details') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('details/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">ID Order: </label>
                                <input type="text" name="detail_id_order" placeholder="ID Order" value="{{ old('detail_id_order') }}"/>
                                @error('detail_id_order') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">ID Produk: </label>
                                <input type="text" name="detail_id_produk" placeholder="ID Produk" value="{{ old('detail_id_produk') }}"/>
                                @error('detail_id_produk') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Harga: </label>
                                <input type="text" name="detail_harga" placeholder="Harga" value="{{ old('detail_harga') }}"/>
                                @error('detail_harga') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Jumlah: </label>
                                <input type="text" name="detail_jml" placeholder="Jumlah" value="{{ old('detail_jml') }}"/>
                                @error('detail_jml') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="Submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
