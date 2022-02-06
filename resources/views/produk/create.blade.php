@extends('template')
@section('content')
<div class="container mt-5">
    <h1>Input Data Produk</h1>
    <hr class="mb-4">
    <form action="/produk" method="POST">
        @csrf
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="bg-white form-control @error('nama_barang') is-invalid @enderror"
                    name="nama_barang" autofocus>
                @error('nama_barang')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="harga" class="form-label">Harga Satuan</label>
                <input type="text" class="bg-white form-control @error('harga') is-invalid @enderror" name="harga">
                @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="stok" class="form-label">Jumlah Stok</label>
                <input type="text" class="bg-white form-control @error('stok') is-invalid @enderror" name="stok">
                @error('stok')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-5">
                <label for="tgl" class="form-label">Tanggal Kadaluarsa</label>
                <input type="date" class="bg-white form-control @error('tgl_kadaluarsa') is-invalid @enderror"
                    name="tgl_kadaluarsa">
                @error('tgl_kadaluarsa')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <a href="/produk" class="btn btn-outline-secondary">Kembali</a>
        <button type="submit" class="btn btn-outline-primary">Tambah</button>
    </form>
</div>
@endsection