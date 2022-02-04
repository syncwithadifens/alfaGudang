<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // NOTE: Menampilkan semua data dari database
    public function index()
    {
        $ambilBarang = DB::table('barang')->get();
        return view('produk.index', ['barang' => $ambilBarang]);
    }

    // NOTE: Menampilkan form tambah data
    public function create()
    {
        return view('produk.create');
    }

    // NOTE: Validasi dan menyimpan data ke database 
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama_barang' => 'required|string|max:50',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'tgl_kadaluarsa' => 'required|string|max:10',
        ]);
        $simpanBarang = DB::table('barang')->insert([
            'nama_barang' => $request->input('nama_barang'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'tgl_kadaluarsa' => $request->input('tgl_kadaluarsa'),
        ]);
        return redirect('produk')->with('status', 'Data berhasil ditambahkan');
    }

    // NOTE: Menampilkan salah satu data 
    public function show($id)
    {
        $tampilbarang = DB::table('barang')->where('id', $id)->get();
        return view('produk.show', ['barang' => $tampilbarang]);
    }

    // NOTE: Menampilkan form edit
    public function edit($id)
    {
        $editBarang = DB::table('barang')->where('id', $id)->get();
        return view('produk.edit', ['barang' => $editBarang]);
    }

    // NOTE: Validasi dan menyimpan perubahan data ke database
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama_barang' => 'required|string|max:50',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'tgl_kadaluarsa' => 'required|string|max:10',
        ]);
        $updateBarang = DB::table('barang')->where('id', $id)->update([
            'nama_barang' => $request->input('nama_barang'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'tgl_kadaluarsa' => $request->input('tgl_kadaluarsa'),
        ]);
        return redirect('produk')->with('status', 'Data berhasil diubah');
    }

    // NOTE: Menghapus data
    public function destroy($id)
    {
        $hapusBarang = DB::table('barang')->where('id', $id)->delete();
        return redirect('produk')->with('status', 'Data berhasil dihapus');
    }
}
