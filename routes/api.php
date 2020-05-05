<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/product', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show');
Route::post('/product', 'ProductController@store');
Route::put('/product/{product}', 'ProductController@update');

Route::get('/client', 'ClientController@index');
Route::get('/client/{client}', 'ClientController@show');
Route::post('/client', 'ClientController@store');
Route::put('/client/{client}', 'ClientController@update');

Route::get('/order', 'OrderController@index');
Route::get('/order/{order}', 'OrderController@show');
Route::post('/order', 'OrderController@store');
Route::put('/order/{order}', 'OrderController@update');

Route::get('/cart', 'CartController@index');
Route::get('/cart/{cart}', 'CartController@show');
Route::post('/cart', 'CartController@store');
Route::put('/cart/{cart}', 'CartController@update');

Route::get('/cart_detail', 'CartDetailController@index');
Route::get('/cart_detail/{cart_Detail}', 'CartDetailController@show');
Route::post('/cart_detail', 'CartDetailController@store');
Route::put('/cart_detail/{cart_Detail}', 'CartDetailController@update');
Route::get('/cart_detail/list/{cart}', 'CartDetailController@carts_details');


Route::get('/order_detail', 'OrderDetailController@index');
Route::get('/order_detail/{order_Detail}', 'OrderDetailController@show');
Route::post('/order_detail', 'OrderDetailController@store');
Route::put('/order_detail/{order_Detail}', 'OrderDetailController@update');