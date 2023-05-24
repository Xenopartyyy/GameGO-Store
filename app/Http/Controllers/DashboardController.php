<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $judul = "Arkatama Store";

        return view("dashboard", compact('judul'));
    }
}
