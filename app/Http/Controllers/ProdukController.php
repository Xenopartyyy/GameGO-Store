<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = [
            [
                'Nama' => 'Acer Predator X51',
                'Deskripsi' => 'Laptop Gaming',
                'Harga' => '15.000.000',
                'Status' => 'Accepted'
            ],
            [
                'Nama' => 'Laptop Asus ROG',
                'Deskripsi' => 'Laptop Gaming',
                'Harga' => '16.000.000',
                'Status' => 'Accepted'
            ],
            [
                'Nama' => 'PlayStation 5',
                'Deskripsi' => 'PlayStation 5 Bagus',
                'Harga' => '7.000.000',
                'Status' => 'Accepted'
            ],
            [
                'Nama' => 'PlayStation 4',
                'Deskripsi' => 'PlayStation 4 Bagus',
                'Harga' => '3.500.000',
                'Status' => 'Accepted'
            ],

            [
                'Nama' => 'Xiaomi BlackShark',
                'Deskripsi' => 'Smartphone Gaming',
                'Harga' => '8.000.000',
                'Status' => 'Accepted'
            ],

            [
                'Nama' => 'Asus ROG Phone 4',
                'Deskripsi' => 'Smartphone Gaming',
                'Harga' => '10.000.000',
                'Status' => 'Accepted'
            ]
            ];

        return view('produk.daftarproduk', compact('produk'));
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
