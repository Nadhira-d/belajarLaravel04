<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Nadhira R.S';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }

}
