<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use App\Http\Requests\StorePenggunaRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function indexRegister()
    {
        return view('auth.register');
    }

    public function registerproses(StorePenggunaRequest $request){
        Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect('login')->with('success', 'Registrasi Berhasil!');

    }

}
