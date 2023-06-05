<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
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

        return view("landing", compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
