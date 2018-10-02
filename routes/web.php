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

Route::get('/', function () {
    return view('master_backend.content');
});
Route::get('UpayUwin', function(){
    return view('index_frontend');
});
Route::get('UpayUwin/cart', function(){
    return view('frontend.cart');
});

Route::get('UpayUwin/product', function(){
    return view('frontend.product');
});

Route::get('/pay','PaymentController@payWithpaypal');
Route::get('/backend/login',function(){
	return view('backend.User.login');
});