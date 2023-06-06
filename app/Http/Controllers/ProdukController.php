<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view ('produk.produk', compact("produk"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('produk.create', compact('kategoris'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukRequest $request)
    {
    $request->validate([
        'nama' => 'required|min:5|max:100',
        'deskripsi' => 'required',
        'harga' => 'required|numeric',
        'kategori_id' => 'required|exists:kategoris,id', // validasi eksistensi kategori_id
    ]);

    $produk = new Produk();
    $produk->nama = $request->input('nama');
    $produk->deskripsi = $request->input('deskripsi');
    $produk->harga = $request->input('harga');
    $produk->kategori_id = $request->input('kategori_id'); // menyimpan kategori_id

    $produk->save();

    return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategoris = Kategori::all();
        return view('produk.edit', compact('produk', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukRequest  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdukRequest $request, $id)
{
    $request->validate([
        'nama' => 'required|min:5|max:100',
        'deskripsi' => 'required',
        'harga' => 'required|numeric',
        'kategori_id' => 'required|exists:kategoris,id', // validasi eksistensi kategori_id
    ]);

    $produk = Produk::findOrFail($id);
    $produk->nama = $request->input('nama');
    $produk->deskripsi = $request->input('deskripsi');
    $produk->harga = $request->input('harga');
    $produk->kategori_id = $request->input('kategori_id'); // menyimpan kategori_id

    $produk->save();

    return redirect('/produk');
}
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect('/produk');
    }
}
