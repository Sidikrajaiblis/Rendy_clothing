<?php

use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\StrukturalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesanController;


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
    return view('welcome');
});

Route::resource('/', frontController::class);

Auth::routes([
    $register = false,
    $reset = false,
    $verify = false,
]);

Route::prefix('admin')->middleware('auth', isAdmin::class)->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

    route::resource('pekerja',PekerjaController::class);
    route::resource('struktural',StrukturalController::class);
    route::resource('produk',ProdukController::class);
    route::resource('kategori',KategoriController::class);
    route::resource('pesan',PesanController::class);
});
