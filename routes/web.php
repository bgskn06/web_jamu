<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::resource('post', PostController::class)->middleware('auth');
Route::resource('produk', ProdukController::class)->middleware('auth');
Route::resource('kategori', KategoriController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware(['auth','admin']);
Route::get('/dashboard', function () {
    $data = Post::all();
    return view('index', compact('data'));
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
