@extends('layouts.main')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Orders
                            <a href="{{ url('orders/create') }}" class="btn btn-primary float-end">Add Orders</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Order</th>
                                    <th>ID User</th>
                                    <th>Tanggal Order</th>
                                    <th>Code Order</th>
                                    <th>TTL</th>
                                    <th>Kurier</th>
                                    <th>Ongkir</th>
                                    <th>Deadline bayar</th>
                                    <th>Order batal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collectss as $item)
                                    <tr>
                                        <td>{{ $item->order_id }}</td>
                                        <td>{{ $item->order_id_user }}</td>
                                        <td>{{ $item->order_tgl }}</td>
                                        <td>{{ $item->order_code }}</td>
                                        <td>{{ $item->order_ttl }}</td>
                                        <td>{{ $item->order_kurir }}</td>
                                        <td>{{ $item->order_ongkir }}</td>
                                        <td>{{ $item->order_byr_deadline }}</td>
                                        <td>
                                            @if ($item->order_batal)
                                                cancelled
                                            @else
                                                Process
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('orders/'.$item->order_id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{ url('orders/'.$item->order_id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Users
                    <a href="{{ url('users/create') }}" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">


                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th>POS</th>
                            <th>User_Role</th>
                            <th>User_Aktif</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collect as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->pos }}</td>
                                <td>
                                    @if ($item->user_role)
                                        Role
                                    @else
                                        Not-role
                                    @endif
                                </td>
                                <td>
                                    @if ($item->user_aktif)
                                        Active
                                    @else
                                        In-Active
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('users/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div> --}}
