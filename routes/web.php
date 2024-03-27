<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home', [

    ]);
});

//tabel user route
Route::get('users', [App\http\Controllers\UserController::class, 'index']);
Route::get('users/create', [App\http\Controllers\UserController::class, 'create']);
Route::post('users/create', [App\http\Controllers\UserController::class, 'store']);
Route::get('users/{user_id}/edit', [App\http\Controllers\UserController::class, 'edit']);
Route::put('users/{user_id}/edit', [App\http\Controllers\UserController::class, 'update']);
Route::get('users/{user_id}/delete', [App\http\Controllers\UserController::class, 'destroy']);

//tabel kategori route
Route::get('kategoris', [App\http\Controllers\KategoriController::class, 'index']);
Route::get('kategoris/create', [App\http\Controllers\KategoriController::class, 'create']);
Route::post('kategoris/create', [App\http\Controllers\KategoriController::class, 'store']);
Route::get('kategoris/{kat_id}/edit', [App\http\Controllers\KategoriController::class, 'edit']);
Route::put('kategoris/{kat_id}/edit', [App\http\Controllers\KategoriController::class, 'update']);
Route::get('kategoris/{kat_id}/delete', [App\http\Controllers\KategoriController::class, 'destroy']);


//tabel order route
Route::get('orders', [App\http\Controllers\OrderController::class, 'index']);
Route::get('orders/create', [App\http\Controllers\OrderController::class, 'create']);
Route::post('orders/create', [App\http\Controllers\OrderController::class, 'store']);
Route::get('orders/{order_id}/edit', [App\http\Controllers\OrderController::class, 'edit']);
Route::put('orders/{order_id}/edit', [App\http\Controllers\OrderController::class, 'update']);
Route::get('orders/{order_id}/delete', [App\http\Controllers\OrderController::class, 'destroy']);


//tabel produk route
Route::get('produks', [App\http\Controllers\ProdukController::class, 'index']);
Route::get('produks/create', [App\http\Controllers\ProdukController::class, 'create']);
Route::post('produks/create', [App\http\Controllers\ProdukController::class, 'store']);
Route::get('produks/{produk_id}/edit', [App\http\Controllers\ProdukController::class, 'edit']);
Route::put('produks/{produk_id}/edit', [App\http\Controllers\ProdukController::class, 'update']);
Route::get('produks/{produk_id}/delete', [App\http\Controllers\ProdukController::class, 'destroy']);

//tabel keranjang route
Route::get('keranjangs', [App\http\Controllers\KeranjangController::class, 'index']);
Route::get('keranjangs/create', [App\http\Controllers\KeranjangController::class, 'create']);
Route::post('keranjangs/create', [App\http\Controllers\KeranjangController::class, 'store']);
Route::get('keranjangs/{ker_id}/edit', [App\http\Controllers\KeranjangController::class, 'edit']);
Route::put('keranjangs/{ker_id}/edit', [App\http\Controllers\KeranjangController::class, 'update']);
Route::get('keranjangs/{ker_id}/delete', [App\http\Controllers\KeranjangController::class, 'destroy']);

//tabel Order Detail route
Route::get('details', [App\http\Controllers\OrderDetailController::class, 'index']);
Route::get('details/create', [App\http\Controllers\OrderDetailController::class, 'create']);
Route::post('details/create', [App\http\Controllers\OrderDetailController::class, 'store']);
