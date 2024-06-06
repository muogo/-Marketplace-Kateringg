@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Menu') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('menus.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="nama_menu">Nama Menu</label>
                            <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Nama Menu" value="{{ old('nama_menu') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="merchant_id">Merchant</label>
                            <select class="form-control" id="merchant_id" name="merchant_id">
                                @foreach($merchants as $merchant)
                                    <option value="{{ $merchant->id }}">{{ $merchant->nama_perusahaan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required>{{ old('deskripsi') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" required>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="{{ old('harga') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="{{ old('kategori') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
