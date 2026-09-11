<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckMemberStatus;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile/{name?}', function ($name = 'Tamu') {
    return "Nama: " . $name;
});

Route::get('/product/{id}', function ($id) {
    return "ID Produk: " . $id;
})->whereNumber('id');

Route::get('/admin/dashboard', function () {
    return "Halaman Dashboard Admin";
})->name('dashboard');

Route::prefix('member')->middleware(CheckMemberStatus::class)->
group(function () {

    Route::get('/profile', function () {
        return "Profil Member";
    });

    Route::get('/settings', function () {
        return "Pengaturan Member";
    });

});