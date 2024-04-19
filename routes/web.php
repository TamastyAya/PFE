<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServeurController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified' , 'standard'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified' , 'admin'])->name('admin');

Route::get('/configserver', function () {
    return view('admin.configserver');
})->middleware(['auth', 'verified' , 'admin'])->name('configserver');

Route::get('/superadmin', function () {
    return view('superadmin.superadmin');
})->middleware(['auth', 'verified' , 'superadmin'])->name('superadmin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/deploiment' , [ServeurController::class , 'choisirServeur'])->name('deploiment.serveur');


Route::group(['prefix' => 'serveurs', 'as' => 'serveurs.', 'middleware' => 'auth'], function () {
    Route::get('/', [ServeurController::class, 'index'])->name('index');
    Route::delete('/{id}', [ServeurController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit', [ServeurController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [ServeurController::class, 'update'])->name('update');
    Route::get('/search', [ServeurController::class, 'search'])->name('search');
});


require __DIR__.'/auth.php';
