<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Mobil;
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

Route::get('/', [Dashboard::class, 'dashboard'])->name('dashboard');

Route::get('/cars', [Mobil::class, 'input'])->name('mobil.input');
Route::get('/cars/pinjam', [Mobil::class, 'pinjam'])->name('mobil.pinjam');
Route::get('/cars/pinjam/{id}', [Mobil::class, 'proses'])->name('mobil.proses');
Route::post('/cars/pinjam/{id}', [Mobil::class, 'peminjaman'])->name('mobil.finish');
Route::post('/cars', [Mobil::class, 'add'])->name('mobil.add');

// Route::get('/daftar', [Authentication::class, 'daftar']);
// Route::post('/daftar', [Authentication::class, 'register'])->name('daftar');

Route::get('/login', [Authentication::class, 'login']);
Route::post('/login', [Authentication::class, 'signin'])->name('login');

Route::get('/logout', [Authentication::class, 'logout'])->name('logout');