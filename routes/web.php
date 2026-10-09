<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/hello', function () {
    return view ('pages.hello');
});

Route::get('/profilx', function () {
    return view ('pages.profil');
});

Route::get('/profil2', function () {
    return view('pages.profil2', [
        'nama'  => 'Mafazahra',
        'nim'   => '0123456789',
        'kelas' => 'TRM-04',
        'prodi' => 'Teknologi Rekayasa Multimedia',
    ]);
});

Route::get('home', function () {
    return view('pages.home');
});