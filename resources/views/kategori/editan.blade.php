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
                        <h4>Edit Users
                            <a href="{{ url('kategoris') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kategoris/'.$editors->kat_id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- <div class="mb-3">
                                <label for="">Id: </label>
                                <input type="text" name="id" placeholder="Id" value="{{ $editor->id }}"/>
                                @error('id') <span class="text-danger">{{ $message }}</span>@enderror
                            </div> --}}
                            <div class="mb-3">
                                <label for="">kategori: </label>
                                <input type="text" name="kategori" placeholder="kategori" value="{{ $editors->kategori }}"/>
                                @error('kategori') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Keterangan: </label>
                                <textarea name="keterangan" class="form-control"  rows="2">{{ $editors->keterangan }}</textarea>
                                @error('keterangan') <span class="text-danger">{{ $message }}</span>@enderror
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
