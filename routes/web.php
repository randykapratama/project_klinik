<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PasienController;
use Illuminate\Auth\Middleware\Authenticate;


Route::middleware(['auth'])->group(function () {
Route::resource('pasien', PasienController::class);
Route::resource('daftar', DaftarController::class);
});



Route::get('logout', function () {
    auth::logout();
    return redirect('login');
});

Route::get('profil', [ProfilController::class, 'index']);
Route::get('profil/create', [ProfilController::class, 'create']) ->name('profil.create');
Route::get('profil/{nama}/{id}/edit', [ProfilController::class, 'edit']);

// Route::get('profil', function () {
//     return 'Hallo saya belajar laravel';
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
