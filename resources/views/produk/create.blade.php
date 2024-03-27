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
                        <h4>Add Produk
                            <a href="{{ url('produks') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('produks/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">ID: </label>
                                <input type="text" name="produk_id" placeholder="ID" value="{{ old('produk_id') }}"/>
                                @error('produk_id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">ID Produk: </label>
                                <input type="text" name="produk_id_kat" placeholder="ID Produk" value="{{ old('produk_id_kat') }}"/>
                                @error('produk_id_kat') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">ID User: </label>
                                <input type="text" name="produk_id_user" placeholder="ID User" value="{{ old('produk_id_user') }}"/>
                                @error('produk_id_user') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Code: </label>
                                <input type="text" name="produk_code" placeholder="Code" value="{{ old('produk_code') }}"/>
                                @error('produk_code') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Produk Name: </label>
                                <input type="text" name="produk_nama" placeholder="Produk Name" value="{{ old('produk_nama') }}"/>
                                @error('produk_nama') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Harga: </label>
                                <input type="text" name="produk_hrg" placeholder="Harga" value="{{ old('produk_hrg') }}"/>
                                @error('produk_hrg') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Keterangan: </label>
                                <input type="text" name="produk_keterangan" placeholder="Keterangan" value="{{ old('produk_keterangan') }}"/>
                                @error('produk_keterangan') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Stock: </label>
                                <input type="text" name="produk_stock" placeholder="Stock" value="{{ old('produk_stock') }}"/>
                                @error('produk_stock') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Photo: </label>
                                <input type="text" name="produk_photo" placeholder="Photo" value="{{ old('produk_photo') }}"/>
                                @error('produk_photo') <span class="text-danger">{{ $message }}</span>@enderror
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
