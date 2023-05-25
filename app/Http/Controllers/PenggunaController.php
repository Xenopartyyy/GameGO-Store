<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {

        $pengguna = [
            [
                'Email'=>'willy@yahoo.com',
                'Name'=>'Willy',
                'Role'=>'Admin',
                'Phone'=>'085454565258',
                'Address'=>'Tangerang',
            ],
            [
                'Email'=>'dita@yahoo.com',
                'Name'=>'dita',
                'Role'=>'Staff',
                'Phone'=>'085454565253',
                'Address'=>'Jakarta',
            ],
            [
                'Email'=>'Wawan@yahoo.com',
                'Name'=>'Wawan',
                'Role'=>'Admin',
                'Phone'=>'085454565123',
                'Address'=>'Jakarta',
            ]
        ];
        
        return view('pengguna.daftarpengguna', compact('pengguna'));

    }

    public function indexdua()
    {

        $gruppengguna = [
            [
                'Role'=>'Admin',
            ],
            [

                'Role'=>'Staff',

            ],
        ];
        
        return view('pengguna.gruppengguna', compact('gruppengguna'));

    }
}
