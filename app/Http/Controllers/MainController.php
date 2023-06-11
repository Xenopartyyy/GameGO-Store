<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Produk;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $produk = Produk::all();
        $slide = Slider::all();
        return view("landing", compact('produk', 'slide'));
    }
    
    

    public function show($id)
    {
        $produk = Produk::find($id);
        return view("detail", compact('produk'));
    }

    public function allproduk(Request $request)
    {
        $nama = $request->input('nama');
        $harga_min = $request->input('harga_min');
        $harga_max = $request->input('harga_max');
    
        $produk = Produk::query();
    
        if ($nama) {
            $produk->whereRaw("LOWER(nama) LIKE ?", ['%' . strtolower($nama) . '%']);
        }
    
        if ($harga_min) {
            $produk->whereRaw("CAST(harga AS UNSIGNED) >= ?", [$harga_min]);
        }
    
        if ($harga_max) {
            $produk->whereRaw("CAST(harga AS UNSIGNED) <= ?", [$harga_max]);
        }
    
        $produk = $produk->get();
    
        return view('allproduk', compact('produk'));
    }
    


    

}
