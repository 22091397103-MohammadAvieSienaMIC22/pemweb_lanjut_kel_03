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
                            <a href="{{ url('users') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('users/'.$editor->user_id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="">Email: </label>
                                <input type="text" name="email" placeholder="Email" value="{{ $editor->email }}"/>
                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Password: </label>
                                <input type="text" name="password" placeholder="Password" value="{{ $editor->password }}"/>
                                @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Username: </label>
                                <input type="text" name="username" placeholder="Username" value="{{ $editor->username }}"/>
                                @error('username') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat: </label>
                                <textarea name="alamat" class="form-control"  rows="3">{{ $editor->alamat }}</textarea>
                                @error('alamat') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Telp: </label>
                                <input type="text" name="telp" placeholder="Telp" value="{{ $editor->telp }}"/>
                                @error('telp') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">POS: </label>
                                <input type="text" name="pos" placeholder="POS" value="{{ $editor->pos }}"/>
                                @error('pos') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">User_Role: </label>
                                <input type="checkbox" name="user_role" {{ $editor->user_role == true ? 'checked':'' }} />
                                @error('user_role') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="">User_Aktif: </label>
                                <input type="checkbox" name="user_aktif" {{ $editor->user_aktif == true ? 'checked':'' }} />
                                @error('user_aktif') <span class="text-danger">{{ $message }}</span>@enderror
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
