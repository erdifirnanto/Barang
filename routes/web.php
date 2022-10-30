<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\Backend\BarangController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout',[adminController::class, 'logout'])->name('admin.logout');

//route untuk semua user
Route::prefix('users')->group(function(){
    Route::get('/user/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/user/add',[UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/user/store',[UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');
});

//route Untuk Barang
Route::prefix('barang')->group(function(){
    Route::get('/barang/view',[BarangController::class, 'BarangView'])->name('barang.view');
    Route::get('/deskripsi/{id}',[BarangController::class, 'BarangViewDeskripsi'])->name('barang.deskripsi');
});

//webform
Route::get('/request/post-data', [App\Http\Controllers\RequestController::class, 'viewPostData']);
Route::post('/request/post-data', [App\Http\Controllers\RequestController::class, 'processPostData']);

//route web baru
Route::get('/cv', function (){
    return view('/cv/mastercv');
});

//route artikel
Route::get('/artikel',[App\Http\Controllers\ArtikelController::class, 'berita']);