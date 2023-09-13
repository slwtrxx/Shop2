<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/category/{cat}', 'App\Http\Controllers\ProductController@showCategory')->name('showCategory');

Route::get('/{category}/{product_id}', 'App\Http\Controllers\ProductController@show')->name('showProduct');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cartIndex');
Route::post('/add-to-cart', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');
