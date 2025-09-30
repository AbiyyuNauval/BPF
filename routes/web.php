<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;

Route::get('/home', [HomeController::class, 'show']);

Route::get('/pcr', function() {
    return 'Selamat datang di PCR!';
});

Route::get('/nim/{param1?}', function($param1 = '') {
    return 'NIM kamu: ' . $param1;
});

Route::get('/mahasiswa/{param1?}', [MahasiswaController::class, 'show']);
//     return 'Halo mahasiswa';
// });

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/{param1?}', [MatakuliahController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/home/signup', function() {
    return view('simple-home');
});
Route::post('/home/signup', [HomeController::class, 'signup']);

Route::get('/auth', function(){
    return view('login-form');
});

Route::post('/auth/login', [AuthController::class, 'login']);
