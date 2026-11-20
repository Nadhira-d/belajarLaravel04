<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;

Route::post('/product', [ProductController::class, 'store']);
Route::get('/sapa', [SapaController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']); // <-- Diubah dari getProduct menjadi index
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

// Rute Beranda
Route::get('/', function () {
    return view('pages.beranda');
});

// Rute About (Mengirim variabel nama, kelas, dan nim)
Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Nadhira Rahma Salsabila',
        'kelas' => 'D4SM-48-04',
        'nim' => '707082430009',
    ]);
});

// Rute Latihan Baru
Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah]);
});


// Rute latihan sebelumnya
Route::get('/hello', function () {
    return view('pages.hello');
});

Route::get('/profilx', function () {
    return view('pages.profil');
});

Route::get('/profil2', function () {
    return view('pages.profil2', [
        'nama' => 'Mafazahra',
        'nim' => '0123456789',
        'kelas' => 'TRM-04',
        'prodi' => 'Teknologi Rekayasa Multimedia',
    ]);
});

Route::get('/home', function () {
    return view('pages.home');
});

// Rute Tambahan (Contact)
Route::view('/contact', 'pages.contact');