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

Route::get('/livechat', function () {
    return view('backend.customer_service.livechat');
})->name('livechat');

Route::get('/setting', function () {
    return view('interface_frontend.frontend_user.setting_user');
})->name('setting');

Route::get('/404', function () {
    return view('interface_frontend.frontend_user.404');
});

Route::get('/', 'frontend\productController@index');
Route::get('/voucher/{id}', 'frontend\productController@showVoucher');

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
	return view('backend.User.login')->middleware('admin');
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
	Route::get('register', function(){
		return view('interface_frontend.frontend_signup.signup');
	});
	Route::post('signup','frontend\signupcontroller@store')->name('signup');
	Route::get('checkout', 'frontend\cartcontroller@index')->name('checkout');
	Route::get('index', function(){
		return view('interface_frontend.frontend.index');
	})->name('index');
	Route::get('topup', function(){
		return view('frontend.topup');
	})->name('topup');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backend/formLogin', 'Auth\LoginController@showLoginForm')->name('formLogin');
Route::get('/formLogin', 'Auth\LoginController@showLoginFormUser')->name('LoginUser');
Route::get('registeradmin',function(){
  return view('backend.User.register');
})->name('register.admin');
