<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\HelloInformatikaController;

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing');
});

/*
|--------------------------------------------------------------------------
| Belajar View
|--------------------------------------------------------------------------
*/

Route::get('/informatikaviews', function () {
    return view('informatikaviews', [
        'nama' => 'Informatika B'
    ]);
});

Route::get('/helloinformatika', [HelloInformatikaController::class, 'HelloInformatika']);

Route::redirect('/testredirect', '/informatikaviews');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

Route::get('/daftar', [AuthController::class, 'showRegister']);
Route::post('/daftar', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| Mahasiswa
|--------------------------------------------------------------------------
*/

Route::get('/mahasiswa', [MahasiswaController::class, 'dashboard']);

/*
|--------------------------------------------------------------------------
| Aspirasi
|--------------------------------------------------------------------------
*/

Route::get('/aspirasi', [AspirasiController::class, 'index']);
Route::post('/aspirasi', [AspirasiController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Fallback
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/aspirasi', [AdminController::class, 'aspirasi']);

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/admin/tambah', [AdminController::class, 'create']);

Route::post('/admin/tambah', [AdminController::class, 'store']);

Route::get('/admin/hapus/{id}', [AdminController::class, 'destroy']);


Route::fallback(function () {
    return view('fallback');
});



