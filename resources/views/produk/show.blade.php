@extends('template')
@section('content')
<div class="container mt-5">
    <h1>Detail Produk</h1>
    <hr>
    @foreach ($barang as $brg)
    <dl>
        <dt>Nama Produk</dt>
        <dd>{{$brg->nama_barang}}</dd>

        <dt>Harga Satuan</dt>
        <dd>{{$brg->harga}}</dd>

        <dt>Jumlah Stok</dt>
        <dd>{{$brg->stok}}</dd>

        <dt>Tanggal Kadaluarsa</dt>
        <dd>{{$brg->tgl_kadaluarsa}}</dd>
    </dl>
    <a href="/produk" class="btn btn-outline-secondary">Kembali</a>
    @endforeach
</div>
@endsection