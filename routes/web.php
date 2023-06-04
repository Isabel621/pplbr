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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/proyekdana', [App\Http\Controllers\ProyekDanaController::class, 'index']);

Route::get('/proyekdana-mitra', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'index']);
Route::get('/tambah-proyekdana-mitra', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'create']);
Route::post('/tambah-proyekdana-mitra', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'store']);
Route::get('/edit-proyekdana-mitra{proyek_dana_id}', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'edit']);
Route::put('/update-proyekdana-mitra{proyek_dana_id}', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'update']);
Route::get('/hapus-proyekdana-mitra{proyek_dana_id}', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'destroy']);

Route::get('/proyekdana', [App\Http\Controllers\Customer\ProyekDanaController::class, 'index']);
Route::get('/detailProyek{id}', [App\Http\Controllers\Customer\ProyekDanaController::class, 'detail'])->name('ProyekDana.detail');
Route::get('/tambahkan-kontrak-proyek-dana{id}', [App\Http\Controllers\Customer\ProyekDanaController::class, 'tambahproyek'])->name('ProyekDana.tambahproyek');

Route::get('/proyekdana-admin', [App\Http\Controllers\Admin\ProyekDanaController::class, 'index']);

Route::get('/sewalahan-mitra', [App\Http\Controllers\Mitra\SewaLahanController::class, 'index']);
Route::get('/tambah-sewalahan-mitra', [App\Http\Controllers\Mitra\SewaLahanController::class, 'create']);
Route::post('/tambah-sewalahan-mitra', [App\Http\Controllers\Mitra\SewaLahanController::class, 'store']);
Route::get('/edit-sewalahan-mitra{sewalahan_id}', [App\Http\Controllers\Mitra\SewaLahanController::class, 'edit']);
Route::put('/update-sewalahan-mitra{sewalahan_id}', [App\Http\Controllers\Mitra\SewaLahanController::class, 'update']);
Route::get('/hapus-sewalahan-mitra{sewalahan_id}', [App\Http\Controllers\Mitra\SewaLahanController::class, 'destroy']);

Route::get('/edukasi-mitra', [App\Http\Controllers\Mitra\EdukasiController::class, 'index']);
Route::get('/tambah-edukasi-mitra', [App\Http\Controllers\Mitra\EdukasiController::class, 'create']);
