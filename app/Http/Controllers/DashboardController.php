<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $judul = "Arkatama Store";
        $produk = [
            [
            
            'nama' => 'Produk 1',
            'deskripsi' => 'Deskripsi produk 1' 
        
            ],

            [
            
                'nama' => 'Produk 2',
                'deskripsi' => 'Deskripsi produk 2' 
            
            ],

            [
            
                'nama' => 'Produk 3',
                'deskripsi' => 'Deskripsi produk 3' 
            
            ],

            [
            
                'nama' => 'Produk 4',
                'deskripsi' => 'Deskripsi produk 4' 
            
            ],

            [
            
                'nama' => 'Produk 5',
                'deskripsi' => 'Deskripsi produk 5' 
            
            ],

            [
            
                'nama' => 'Produk 6',
                'deskripsi' => 'Deskripsi produk 6' 
            
            ]
                

            ];

        return view("dashboard.index", compact('judul', 'produk'));
    }
}
