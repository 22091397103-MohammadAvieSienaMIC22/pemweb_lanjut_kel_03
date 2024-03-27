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
                        <h4>Add Kategori
                            <a href="{{ url('kategoris') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kategoris/create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="">Id-kategori: </label>
                                <input type="text" name="idkategori" placeholder="Id" value="{{ old('idkategori') }}"/>
                                @error('id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">kategori: </label>
                                <input type="text" name="kategori" placeholder="kategori" value="{{ old('kategori') }}"/>
                                @error('kategori') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Keterangan: </label>
                                <textarea name="keterangan" class="form-control"  rows="2">{{ old('keterangan') }}</textarea>
                                @error('keterangan') <span class="text-danger">{{ $message }}</span>@enderror
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
