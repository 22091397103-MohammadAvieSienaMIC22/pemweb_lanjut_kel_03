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
                        <h4>Edit Order
                            <a href="{{ url('orders') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('orders/'.$editorss->order_id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="">Code Order: </label>
                                <input type="text" name="code" placeholder="Code Order" value="{{ $editorss->code }}"/>
                                @error('code') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">TTL: </label>
                                <input type="text" name="ttl" placeholder="TTL" value="{{ $editorss->ttl }}"/>
                                @error('ttl') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Kurier: </label>
                                <input type="text" name="kurrier" placeholder="Kurier" value="{{ $editorss->kurrier }}"/>
                                @error('kurrier') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Ongkir: </label>
                                <input type="text" name="ongkir" placeholder="Ongkir" value="{{ $editorss->ongkir }}"/>
                                @error('ongkir') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Deadline bayar: </label>
                                <input type="text" name="deadline" placeholder="Deadline bayar" value="{{ $editorss->deadline }}"/>
                                @error('ongkir') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Order batal: </label>
                                <input type="checkbox" name="order_batal" {{ $editorss->order_batal == true ? 'checked':'' }} />
                                @error('order_batal') <span class="text-danger">{{ $message }}</span>@enderror
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
