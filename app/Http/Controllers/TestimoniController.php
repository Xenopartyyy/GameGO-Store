<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Http\Requests\StoreTestimoniRequest;
use App\Http\Requests\UpdateTestimoniRequest;
use Illuminate\Support\Facades\File;


class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view("testimoni.testimoni", compact('testimoni'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimoniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimoniRequest $request)
    {
        $validatedData = $request->validate([
            'profesi' => 'required',
            'nama' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'testi' => 'required|min:30',
            'status' => 'required',
        ]);

        $testimoni = new Testimoni();
        $testimoni->nama = $validatedData['nama'];
        $testimoni->profesi = $validatedData['profesi'];
        $testimoni->testi = $validatedData['testi'];
        $testimoni->status = $validatedData['status'];
    
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/avatartesti'), $filename);
            $testimoni->avatar = $filename;
        }
    
        $testimoni->save();
    
        return redirect('/testimoni');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimoni = Testimoni::find($id);
        return view('testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimoniRequest  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimoniRequest $request, $id)
    {
        $validatedData = $request->validate([
            'profesi' => 'required',
            'nama' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'testi' => 'required|min:30',
            'status' => 'required',
        ]);

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->nama = $validatedData['nama'];
        $testimoni->profesi = $validatedData['profesi'];
        $testimoni->testi = $validatedData['testi'];
        $testimoni->status = $validatedData['status'];
    
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/avatartesti'), $filename);
            $testimoni->avatar = $filename;
        }
    
        $testimoni->save();
    
        return redirect('/testimoni'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
    
        // Hapus foto dari folder storage
        $filePath = public_path('storage/avatartesti/' . $testimoni->avatar);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    
        $testimoni->delete();
    
        return redirect('/testimoni');
    }
}
