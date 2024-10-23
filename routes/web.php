<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/buku', [\App\Http\Controllers\BukuController::class, 'index']);
Route::get('/buku/create', [\App\Http\Controllers\BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [\App\Http\Controllers\BukuController::class, 'store'])->name('buku.store');
Route::delete('/buku/{id}', [\App\Http\Controllers\BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/ubah/{id}', [\App\Http\Controllers\BukuController::class,'edit'])->name('buku.edit');
Route::post('/buku/simpan/{id}', [\App\Http\Controllers\BukuController::class,'update'])->name('buku.update');
Route::get('/buku/search', [\App\Http\Controllers\BukuController::class, 'search'])->name('buku.search');

