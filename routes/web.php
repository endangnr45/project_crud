<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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


Route::get('/', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/create', [ProductController::class, 'create'])->name('create');
Route::post('/product', [ProductController::class, 'store'])->name('store');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('destroy');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('update');

