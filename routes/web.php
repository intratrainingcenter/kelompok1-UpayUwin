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

Route::resource('signup','frontend\signupcontroller');

Route::get('/backend', function () {
    return redirect()->route('dashboard.index');
});

Route::get('/', 'frontend\productController@index');
Route::get('/game/{id}', 'frontend\productController@show');

Route::get('/product', function(){
	return view('frontend.user');
});

Route::get('UpayUwin/User', function(){
	return view('frontend.user');
});


Route::get('UpayUwin/cart', function(){
    return view('frontend.cart');
});

Route::get('UpayUwin/cart', function () {
	return view('frontend.cart');
});
// Route::get('UpayUwin/product', 'frontend\productController@index');

Route::get('UpayUwin/payment', function(){
    return view('frontend.payment');
});

Route::get('/pay','PaymentController@payWithpaypal');

Route::get('/backend/login',function(){
	return view('backend.User.login');
});

//Route Untuk Backend
Route::prefix('backend')->middleware('admin')->group(function () {

	Route::resource('dashboard','backend\DashboardController');
	//Route Voucher
	Route::get('voucher/kode','backend\VoucherController@cek_kode')->name('cek.kode');
	Route::resource('voucher','backend\VoucherController');
	//Route User
	Route::resource('user','backend\UserController');
	//Route setting
	Route::resource('setting2','backend\SettingController');
  Route::get('/settingweb', 'backend\SettingController@setting_web')->name('settingweb');
  	//Route setting
  	Route::resource('setting','backend\SettingController');
});



//Route Untuk Frontend
Route::prefix('frontend')->group(function () {
	//Route wallet
	Route::prefix('wallet')->group(function () {
	});

});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backend/formLogin', 'Auth\LoginController@showLoginForm')->name('formLogin');
