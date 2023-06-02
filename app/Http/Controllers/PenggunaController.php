<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Http\Requests\StorePenggunaRequest;
use App\Http\Requests\UpdatePenggunaRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna.pengguna', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenggunaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenggunaRequest $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns|min:7',
            'nama' => 'required',
            'role' => 'required',
            'avatar' => 'nullable|file',
            'phone' => 'required|numeric|size:11',
            'address' => 'required|min:5',
            'password' => 'required',
        ]);

        $pengguna = Pengguna::create($request->except(['_token', 'submit']));

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/avatar'), $filename);

            $pengguna->avatar = $filename;
            $pengguna->save();
        }

        return redirect('/pengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenggunaRequest  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenggunaRequest $request, $id)
    {   

        $request->validate([
            'email' => 'required|email:rfc,dns|min:7',
            'nama' => 'required',
            'role' => 'required',
            'avatar' => 'nullable|file',
            'phone' => 'required|numeric|size:11',
            'address' => 'required|min:5',
            'password' => 'required',
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->update($request->except(['_token', 'submit']));

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/avatar'), $filename);

            $pengguna->avatar = $filename;
            $pengguna->save();
        }

        return redirect('/pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        Storage::delete('storage/avatar/' . $pengguna->avatar);
        
        $pengguna->delete();
        return redirect('/pengguna');
    }
}
