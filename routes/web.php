<?php

use App\Http\Controllers\AuthController;
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

    return view('page.dasboard');
})->name('dashboard');

Route::post('/logout', function () {
    Auth::logout();

    return redirect('/');
})->name('logout');

Route::view('/login', 'login')->name('login');
Route::view('/register', 'daftar')->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::get('/proyekdana-mitra', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'index'])->name('mitra.proyekdana');
Route::get('/tambah-proyekdana-mitra', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'create']);
Route::post('/tambah-proyekdana-mitra', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'store']);
Route::get('/edit-proyekdana-mitra{proyek_dana_id}', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'edit']);
Route::put('/update-proyekdana-mitra{proyek_dana_id}', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'update']);
Route::get('/hapus-proyekdana-mitra{proyek_dana_id}', [App\Http\Controllers\Mitra\ProyekDanaController::class, 'destroy']);

Route::get('/proyekdana', [App\Http\Controllers\Customer\ProyekDanaController::class, 'index']);
Route::get('/detailProyek/{id}', [App\Http\Controllers\Customer\ProyekDanaController::class, 'detail'])->name('ProyekDana.detail');
Route::get('/tambahkan-kontrak-proyek-dana/{id}', [App\Http\Controllers\Customer\ProyekDanaController::class, 'tambahproyek'])->name('ProyekDana.tambahproyek');

Route::get('/proyekdana-admin', [App\Http\Controllers\Admin\ProyekDanaController::class, 'index']);

Route::get('/sewalahan-mitra', [App\Http\Controllers\Mitra\SewaLahanController::class, 'index']);
Route::get('/tambah-sewalahan-mitra', [App\Http\Controllers\Mitra\SewaLahanController::class, 'create']);
Route::post('/tambah-sewalahan-mitra', [App\Http\Controllers\Mitra\SewaLahanController::class, 'store']);
Route::get('/edit-sewalahan-mitra{sewalahan_id}', [App\Http\Controllers\Mitra\SewaLahanController::class, 'edit']);
Route::put('/update-sewalahan-mitra{sewalahan_id}', [App\Http\Controllers\Mitra\SewaLahanController::class, 'update']);
Route::get('/hapus-sewalahan-mitra{sewalahan_id}', [App\Http\Controllers\Mitra\SewaLahanController::class, 'destroy']);

Route::get('/sewalahan', [App\Http\Controllers\Customer\SewaLahanController::class, 'index']);
Route::get('/detailSewalahan{id}', [App\Http\Controllers\Customer\SewaLahanController::class, 'detail'])->name('SewaLahan.detail');
Route::get('/tambahkan-kontrak-sewalahan{id}', [App\Http\Controllers\Customer\SewaLahanController::class, 'tambahsewa'])->name('SewaLahan.tambahsewa');

Route::get('/sewalahan-admin', [App\Http\Controllers\Admin\SewaLahanController::class, 'index']);

Route::get('/edukasi-mitra', [App\Http\Controllers\Mitra\EdukasiController::class, 'index']);
Route::get('/tambah-edukasi-mitra', [App\Http\Controllers\Mitra\EdukasiController::class, 'create']);
Route::post('/tambah-edukasi-mitra', [App\Http\Controllers\Mitra\EdukasiController::class, 'store']);
Route::get('/edit-edukasi-mitra{edukasi_id}', [App\Http\Controllers\Mitra\EdukasiController::class, 'edit']);
Route::put('/update-edukasi-mitra{edukasi_id}', [App\Http\Controllers\Mitra\EdukasiController::class, 'update']);
Route::get('/hapus-edukasi-mitra{edukasi_id}', [App\Http\Controllers\Mitra\EdukasiController::class, 'destroy']);

// Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginView']);
// Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);


// Capaian Customer
Route::group(['prefix' => '/customer/capaian'], function () {
    Route::get('', [App\Http\Controllers\CapaianController::class, 'index']);

    Route::group(['prefix' => '/kontrak-proyek-dana'], function () {
        Route::get('/{id}/upload-bukti', [App\Http\Controllers\CapaianController::class, 'viewUploadBuktiKontrakProyekDanaCustomer']);
        Route::post('/{id}/upload-bukti', [App\Http\Controllers\CapaianController::class, 'uploadBuktiKontrakProyekDanaCustomer']);
        Route::delete('/{id}', [App\Http\Controllers\CapaianController::class, 'batalkanKontrakProyekDanaCustomer']);
    });

    Route::group(['prefix' => '/kontrak-sewa-lahan'], function () {
        Route::get('/{id}/upload-bukti', [App\Http\Controllers\CapaianController::class, 'viewUploadBuktiKontrakSewaLahanCustomer']);
        Route::post('/{id}/upload-bukti', [App\Http\Controllers\CapaianController::class, 'uploadBuktiKontrakSewaLahanCustomer']);
        Route::delete('/{id}', [App\Http\Controllers\CapaianController::class, 'batalkanKontrakSewaLahanCustomer']);
    });
});

//capaian Mitra
// Route::group(['prefix' => '/mitra/capaian'], function () {
//     Route::get('', [App\Http\Controllers\CapaianController::class, 'indexx']);

//     Route::group(['prefix' => /])
// });


// newest update
Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::view('/register', 'Customer.daftar')->name('daftar');
    Route::post('/register', [AuthController::class, 'registerCustomer'])->name('daftar.store');
});

Route::group(['prefix' => 'mitra', 'as' => 'mitra.'], function () {
    Route::view('/register', 'Mitra.daftar')->name('daftar');
    Route::post('/register', [AuthController::class, 'registerMitra'])->name('daftar.store');
});
