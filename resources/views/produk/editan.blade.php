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
                        <h4>Edit Produk
                            <a href="{{ url('produks') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('orders/'.$ubah->produk_id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="">Code: </label>
                                <input type="text" name="produk_code" placeholder="Code" value="{{ $ubah->produk_code }}"/>
                                @error('produk_code') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Produk Name: </label>
                                <input type="text" name="produk_nama" placeholder="Produk Name" value="{{ $ubah->produk_nama }}"/>
                                @error('produk_nama') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Harga: </label>
                                <input type="text" name="produk_hrg" placeholder="Harga" value="{{ $ubah->produk_hrg }}"/>
                                @error('produk_hrg') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Keterangan: </label>
                                <input type="text" name="produk_keterangan" placeholder="Keterangan" value="{{ $ubah->produk_keterangan }}"/>
                                @error('produk_keterangan') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Stock: </label>
                                <input type="text" name="produk_stock" placeholder="Stock" value="{{ $ubah->produk_stock }}"/>
                                @error('produk_stock') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Photo: </label>
                                <input type="text" name="produk_photo" placeholder="Photo" value="{{ $ubah->produk_photo }}"/>
                                @error('produk_photo') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <button type="Submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
