<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Routes Web
|--------------------------------------------------------------------------
*/

Route::get('/', [ArsipController::class, 'index']);
Route::get('/arsipadmin', [ArsipController::class, 'index'])->name('arsipadmin');
Route::resource('arsip', ArsipController::class)->except(['index']);
Route::get('/arsip/{id}/download', [ArsipController::class, 'download'])->name('arsip.download');
Route::resource('kategori', KategoriController::class);
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');


Route::get('/about', function () {
    return view('arsip.about');
})->name('about');
