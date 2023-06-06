<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(10);

        return response()->json([
            'data' => $produk
        ]);
    }

    public function store(StoreProdukRequest $request)
    {
        $request->validate([
            'nama' => 'required|min:5|max:100',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required'
        ]);

        $produk = Produk::create($request->except(['_token','submit']));

        return response()->json([
            'data' => $produk
        ]);
    }
    
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return response()->json([
            'data' => $produk
        ]);
    }

    public function update(UpdateProdukRequest $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:5|max:100',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->except(['_token','submit']));

        return response()->json([
            'data' => $produk
        ]);
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return response()->json([
            'message' => 'produk terhapus'
        ], 204);
    }
}
