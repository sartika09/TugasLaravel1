<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PetugasController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// })-> name('welcome');

// Route::get('/form', function () {
//     return view('form');
// })-> name('form');

Route::get('/', [MasterController::class, 'master'])->name('separate.master');
Route::get('/buku', [BukuController::class, 'create'])->name('buku');
Route::resource('/anggota', AnggotaController::class);
Route::resource('/petugas', PetugasController::class);