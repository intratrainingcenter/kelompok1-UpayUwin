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
    return redirect()->route('dashboard.index');
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
//Route Untuk Backend
Route::prefix('backend')->group(function () { 
	
	//Route Dashboard
	Route::resource('dashboard','backend\DashboardController');
	//Route Dashboard
	Route::resource('voucher','backend\VoucherController');
	//Route User
	Route::prefix('User')->group(function () {

	});
});




//Route Untuk Frontend
Route::prefix('frontend')->group(function () {
	//Route wallet
	Route::prefix('wallet')->group(function () {
	});
    
});