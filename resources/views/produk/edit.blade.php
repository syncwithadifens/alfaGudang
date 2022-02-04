@extends('template')
@section('content')
<div class="container mt-5">
    <h1>Ubah Data Produk</h1>
    <hr class="mb-4">
    @foreach ($barang as $brg)
    <form action="/produk/{{ $brg->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="bg-white form-control @error('nama_barang') is-invalid @enderror"
                    name="nama_barang" value="{{ $brg->nama_barang }}">
                @error('nama_barang')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="harga" class="form-label">Harga Satuan</label>
                <input type="text" class="bg-white form-control @error('harga') is-invalid @enderror" name="harga"
                    value="{{ $brg->harga }}">
                @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="bg-white form-control @error('stok') is-invalid @enderror" name="stok"
                    value="{{ $brg->stok }}">
                @error('stok')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="tgl" class="form-label">Tanggal Kadaluarsa</label>
                <input type="text" class="bg-white form-control @error('tgl_kadaluarsa') is-invalid @enderror"
                    name="tgl_kadaluarsa" value="{{ $brg->tgl_kadaluarsa }}">
                @error('tgl_kadaluarsa')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <a href="/produk" class="btn btn-outline-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-warning">Ubah</button>

    </form>
    @endforeach
</div>
@endsection