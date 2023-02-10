<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('tovari', [App\Http\Controllers\TovarController::class, 'index'])->name('tovari');
Route::get('addtovar', [App\Http\Controllers\TovarController::class, 'addTovar'])->name('addtovar');
Route::post('/add', [App\Http\Controllers\TovarController::class, 'submit'])->name('add');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/basket/index', [App\Http\Controllers\BasketController::class, 'index'])->name('basket.index');
Route::get('/basket/checkout', [App\Http\Controllers\BasketController::class, 'checkout'])->name('basket.checkout');
Route::post('/basket/add/{id}', [App\Http\Controllers\BasketController::class, 'add'])->where('id','[0-9]+')->name('basket.add');


