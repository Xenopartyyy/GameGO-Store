<?php

namespace App\Http\Controllers;

use App\Models\Gruppengguna;
use App\Http\Requests\StoreGruppenggunaRequest;
use App\Http\Requests\UpdateGruppenggunaRequest;

class GruppenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gruppengguna = Gruppengguna::all();
        return view('gruppengguna.gruppengguna', compact('gruppengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gruppengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGruppenggunaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGruppenggunaRequest $request)
    {
        Gruppengguna::create($request->except(['_token', 'submit']));
        return redirect('/gruppengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gruppengguna  $gruppengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Gruppengguna $gruppengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gruppengguna  $gruppengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gruppengguna = Gruppengguna::findOrFail($id);
        return view('gruppengguna.edit', compact('gruppengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGruppenggunaRequest  $request
     * @param  \App\Models\Gruppengguna  $gruppengguna
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGruppenggunaRequest $request, $id)
    {
        $gruppengguna = Gruppengguna::findOrFail($id);
        $gruppengguna->update($request->except(['_token', 'submit']));
        return redirect('/gruppengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gruppengguna  $gruppengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gruppengguna = Gruppengguna::findOrFail($id);
        $gruppengguna->delete();
        return redirect('/gruppengguna');

    }
}
