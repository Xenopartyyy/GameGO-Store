<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use App\Http\Requests\StorePenggunaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function indexlogin()
    {
        return view('auth.login');
    }


    public function loginproses(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('succes', 'berhasil logout');
    }
};
