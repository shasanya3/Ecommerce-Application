<?php

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
Route::get('/shoplist', 'ShopController@index')->name('shop.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/', 'LandingController@index');
Route::get('admin/product/create', 'AdminsController@create');
Route::post('admin/product/create', 'AdminsController@store')->name('admin.create');

Route::get('/shop/{name}', 'ShopController@show')->name('shop.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
