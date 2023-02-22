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


Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/Products/create', 'create');
    Route::get('/Products/{id}', 'show');
    Route::get('/Products/{id}/edit', 'edit');
    Route::post('/Products', 'store');
    Route::patch('/Products/{id}', 'update');
    Route::get('/Products/{id}/delete', 'destroy');
   });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
