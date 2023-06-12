<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Support\Facades\File;


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
        $kategori = Kategori::all();
        return view('produk.produk', compact("produk", "kategori"));
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
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:100',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable' 
        ]);
    
        $produk = new Produk();
        $produk->nama = $validatedData['nama'];
        $produk->deskripsi = $validatedData['deskripsi'];
        $produk->harga = $validatedData['harga'];
        $produk->kategori_id = $validatedData['kategori_id'];
        $produk->status = $validatedData['status'];
    
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/avatarproduk'), $filename);
            $produk->avatar = $filename;
        }
    
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
        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:100',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategoris,id',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable' 
        ]);
    
        $produk = Produk::findOrFail($id);
        $produk->nama = $validatedData['nama'];
        $produk->deskripsi = $validatedData['deskripsi'];
        $produk->harga = $validatedData['harga'];
        $produk->kategori_id = $validatedData['kategori_id'];
        $produk->status = $validatedData['status'];
    
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/avatarproduk'), $filename);
            $produk->avatar = $filename;
        }
    
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
    
        // Hapus foto dari folder storage
        $filePath = public_path('storage/avatarproduk/' . $produk->avatar);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    
        $produk->delete();
    
        return redirect('/produk');
    }
    
    
    
    
    
}
