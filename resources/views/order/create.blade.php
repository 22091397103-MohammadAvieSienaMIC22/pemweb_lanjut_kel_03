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
                        <h4>Add Orders
                            <a href="{{ url('orders') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('orders/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">Id: </label>
                                <input type="text" name="id" placeholder="Id" value="{{ old('id') }}"/>
                                @error('id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Id User: </label>
                                <input type="text" name="order_id_user" placeholder="Id User" value="{{ old('order_id_user') }}"/>
                                @error('order_id_user') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Tanggal Order: </label>
                                <input type="text" name="order_tgl" placeholder="Tanggal Order" value="{{ old('order_tgl') }}"/>
                                @error('order_tgl') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Code Order: </label>
                                <input type="text" name="code" placeholder="Code Order" value="{{ old('code') }}"/>
                                @error('code') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">TTL: </label>
                                <input type="text" name="ttl" placeholder="TTL" value="{{ old('ttl') }}"/>
                                @error('ttl') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Kurier: </label>
                                <input type="text" name="kurrier" placeholder="Kurier" value="{{ old('kurrier') }}"/>
                                @error('kurrier') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Ongkir: </label>
                                <input type="text" name="ongkir" placeholder="Ongkir" value="{{ old('ongkir') }}"/>
                                @error('ongkir') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Deadline bayar: </label>
                                <input type="text" name="deadline" placeholder="Deadline bayar" value="{{ old('deadline') }}"/>
                                @error('deadline') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Order batal: </label>
                                <input type="checkbox" name="order_batal" {{ old('order_batal') == true ? 'checked':'' }} />
                                @error('order_batal') <span class="text-danger">{{ $message }}</span>@enderror
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
