@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><a href="{{ route('menu_tambah') }}">Tambah Menu</a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name Menu</th>
                        <th>Merchant</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr>
                        <td>{{ $menu++ }}</td>
                        <td>{{ $menu->nama_menu }}</td>
                        <td>{{ $menu->merchant_id }}</td> <!-- Assuming you want to display the merchant ID -->
                        <td>{{ $menu->deskripsi }}</td>
                        <td>{{ $menu->foto }}</td>
                        <td>{{ $menu->harga }}</td>
                        <td>Aksi</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
