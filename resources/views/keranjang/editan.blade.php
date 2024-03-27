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
                        <h4>Edit Keranjang
                            <a href="{{ url('keranjangs') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('keranjangs/'.$ganti->ker_id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="">Harga: </label>
                                <input type="text" name="ker_harga" placeholder="Harga" value="{{ $ganti->ker_harga }}"/>
                                @error('ker_harga') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Jumlah: </label>
                                <input type="text" name="ker_jml" placeholder="Jumlah" value="{{ $ganti->ker_jml }}"/>
                                @error('ker_jml') <span class="text-danger">{{ $message }}</span>@enderror
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
