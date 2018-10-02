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
Route::get('/pay','PaymentController@payWithpaypal');


//Route Untuk Backend
Route::prefix('backend')->group(function () { 
	
	//Route Dashboard
	Route::resource('dashboard','backend\DashboardController');
	//Route User
	Route::resource('User','backend\UserController');
});




//Route Untuk Frontend
Route::prefix('frontend')->group(function () {
	//Route wallet
	Route::prefix('wallet')->group(function () {
	});
    
});