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

// Authentication Routes...
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('UpayUwin/product', function(){
    return view('frontend.product');
});

Route::get('UpayUwin/payment', function(){
    return view('frontend.payment');
});

Route::get('/pay','PaymentController@payWithpaypal');

Route::get('/backend/login',function(){
	return view('backend.User.login');
});

//Route Untuk Backend
Route::prefix('backend')->middleware('user')->group(function () {

	//Route Dashboard
	Route::resource('dashboard','backend\DashboardController');
	//Route Voucher
	Route::get('voucher/kode','backend\VoucherController@cek_kode')->name('cek.kode');
	Route::resource('voucher','backend\VoucherController');
	//Route User
	Route::prefix('User')->group(function () {

	});
  //Route setting
  Route::resource('setting','backend\SettingController');
});

//Route Untuk Frontend
Route::prefix('frontend')->group(function () {
	//Route wallet
	Route::prefix('wallet')->group(function () {
	});
	Route::post('signup','frontend\signupcontroller@store')->name('signup');
	Route::get('checkout', 'frontend\cartcontroller@index')->name('checkout');
	Route::get('index', function(){
		return view('frontend.index');
	})->name('index');
	
	Route::get('user', function(){
		return view('frontend.user');
	})->name('user');

	ROute::get('livechat', 'frontend\livechatcontroller@index')->name('livechat');
	Route::get('topup', function(){
		return view('frontend.topup');
	})->name('topup');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
