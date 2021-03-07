<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');

// Route::resource('guru', [GuruController::class]);
// Route::get('guru', [GuruController::class, 'index'])->name('guru');
Route::resource('guru', GuruController::class);
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa');
