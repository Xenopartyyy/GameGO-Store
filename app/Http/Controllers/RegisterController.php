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
        $request->validate([
            'email' => 'required|email:rfc,dns|min:7',
            'nama' => 'required',
            'avatar' => 'nullable|file',
            'phone' => 'required|numeric',
            'address' => 'required|min:5',
            'password' => 'required',
        ]);

        $pengguna = Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'avatar' => $request->avatar,
        ]);

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/avatar'), $filename);

            $pengguna->avatar = $filename;
            $pengguna->save();
        }

        return redirect('login')->with('success', 'Registrasi Berhasil!');

    }

}
