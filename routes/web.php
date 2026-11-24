<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SapaController;
use Illuminate\Support\Facades\Route;

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::resource('/category', CategoryController::class);

Route::get('/sapa', [SapaController::class, 'index']);

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