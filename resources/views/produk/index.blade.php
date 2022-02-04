@extends('template')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="float-start text-center">Daftar Barang di Gudang Alfamart</h1>
            <a href="/produk/create" class="col-3 float-end btn btn-primary mb-2">Tambah Data</a>
        </div>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Barang</th>
                <th class="text-center">Harga Satuan</th>
                <th class="text-center">Stok</th>
                <th class="text-center">Tanggal Kadaluarsa</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($barang as $brg)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $brg->nama_barang }}</td>
                <td class="text-center">{{ $brg->harga }}</td>
                <td class="text-center">{{ $brg->stok }} Kardus</td>
                <td class="text-center">{{ $brg->tgl_kadaluarsa }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="/produk/{{ $brg->id }}" class="btn btn-secondary me-2">Detail</a>
                        <a href="/produk/{{ $brg->id }}/edit" class="btn btn-warning me-2">Ubah</a>
                        <form action="/produk/{{ $brg->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection