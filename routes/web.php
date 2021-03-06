<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('transaksi', [App\Http\Controllers\TransaksiProduksiController::class, 'index'])->name('transaksi');

Route::post('/transaksi/create', [App\Http\Controllers\TransaksiProduksiController::class, 'create'])->name('create.transaksi');
Route::post('/transaksi/update', [App\Http\Controllers\TransaksiProduksiController::class, 'update'])->name('update.transaksi');
Route::get('/transaksi/delete/{id}', [App\Http\Controllers\TransaksiProduksiController::class, 'destroy'])->name('delete.transaksi');