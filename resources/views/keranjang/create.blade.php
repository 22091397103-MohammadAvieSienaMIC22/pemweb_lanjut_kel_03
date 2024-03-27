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
                        <h4>Add keranjang
                            <a href="{{ url('keranjangs') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('keranjangs/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">ID: </label>
                                <input type="text" name="ker_id" placeholder="ID" value="{{ old('ker_id') }}"/>
                                @error('ker_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">ID User: </label>
                                <input type="text" name="ker_id_user" placeholder="ID User" value="{{ old('ker_id_user') }}"/>
                                @error('ker_id_user') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">ID produk: </label>
                                <input type="text" name="ker_id_produk" placeholder="ID produk" value="{{ old('ker_id_produk') }}"/>
                                @error('ker_id_produk') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Harga: </label>
                                <input type="text" name="ker_harga" placeholder="Harga" value="{{ old('ker_harga') }}"/>
                                @error('ker_harga') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Jumlah: </label>
                                <input type="text" name="ker_jml" placeholder="Jumlah" value="{{ old('ker_jml') }}"/>
                                @error('ker_jml') <span class="text-danger">{{ $message }}</span>@enderror
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
