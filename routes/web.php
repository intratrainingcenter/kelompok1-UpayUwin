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

Route::get('signup',function(){
	return view('interface_frontend/frontend_signup/signup');
})->name('signup');

Route::get('/admin', function () {
    return redirect()->route('dashboard.index');
});

Route::get('/setting', function () {
    return view('interface_frontend.frontend_user.setting_user');
})->name('setting');

Route::get('/404', function () {
    return view('interface_frontend.frontend_user.404');
});
Route::get('/', function () {
	return view('interface_frontend.frontend.index');
})->name('index')->middleware('setup');

Route::get('/backend/login', function () {
	return view('backend.User.login')->middleware('admin');
});
route::get('/setup',function(){
	return view('backend.setting.setup');
});

Route::get('/item', 'frontend\productController@indexItem')->name('item');
Route::get('/voucher', 'frontend\productController@indexVoucher')->name('voucher');
Route::get('/settingweb', 'backend\SettingController@setting_web')->name('settingweb');
Route::get('/payment/status','PaymentController@getPaymentStatus')->name('payment.status');

Route::get('/voucher/{id}', 'frontend\productController@showVoucher');
Route::get('/item/{id}', 'frontend\productController@showCategoryItem');
Route::get('/item/{category}/{id}', 'frontend\productController@showItem');

Route::post('/voucher/store', 'frontend\productController@store');
Route::post('/item/store', 'frontend\productController@addto_cart_item');
Route::post('/pay', 'PaymentController@payWithpaypal')->name('paymentpaypal');

Route::post('/storesetup', 'backend\SettingController@storeSetup')->name('store.setup');
//Route Untuk Backend
Route::prefix('backend')->middleware('admin')->group(function () {
	Route::resource('dashboard','backend\DashboardController');
	//Route Voucher
	Route::get('voucher/kode','backend\VoucherController@cek_kode')->name('cek.kode');
	Route::resource('voucher','backend\VoucherController');
	//Route CS
	Route::get('/customer', function () {
		return view('backend.customer_service.index');
	})->name('customer');
	//Route User
	Route::resource('user','backend\UserController');
  	//Route item
  	Route::resource('item','backend\ItemController');
	//Route setting
	Route::resource('setting2','backend\SettingController');
  	//Route setting
	Route::resource('setting','backend\SettingController');
	//   Category
	Route::resource('category','backend\CategoryController');
	// Laporan Transaksi
	Route::get('reporttransaksi','backend\ReportTransactionController@index')->name('laporan');
});

//Route Untuk Frontend
Route::prefix('frontend')->group(function () {
	//Route wallet
	Route::get('/voucher/sort', 'frontend\productController@sortProduct')->name('voucher.sort');
	Route::post('regis','frontend\signupcontroller@store')->name('regis');
	Route::post('setting', 'frontend\settingusercontroller@update')->name('settinguser');
	Route::post('settingpassword', 'frontend\settingusercontroller@updatepass')->name('settingpassword');
	Route::get('history', 'frontend\settingusercontroller@historytransaction')->name('history');
	Route::get('checkout', 'frontend\cartcontroller@index')->middleware('user')->name('checkout');
	Route::get('showcart', 'frontend\cartcontroller@showcart')->name('showcart');
	Route::get('/detach/{id}', 'frontend\cartcontroller@deaddQty');
	Route::get('/attach/{id}', 'frontend\cartcontroller@addQty');
	Route::get('/cancel/{id}', 'frontend\cartcontroller@cancel');
	// livechat
	Route::get('feedsuser', 'frontend\settingusercontroller@feedsuser')->name('feedsuser');
	Route::get('servicefeed/{id}', 'frontend\settingusercontroller@servicefeed')->name('servicefeed');
	Route::post('/replyfeed/{id}', 'frontend\settingusercontroller@replyfeed')->name('replyfeed');
	// Front Chat
	Route::get('feeds', 'frontend\settingusercontroller@feeds')->name('feeds');
	Route::get('showfeed', 'frontend\settingusercontroller@showfeed')->name('showfeed');
	Route::post('/feedback', 'frontend\settingusercontroller@feedback')->name('feedback');

	Route::get('topup', function(){
		return view('frontend.topup');
	})->name('topup');

	Route::get('chat', function(){
		return view('interface_frontend.frontend_user.chat');
	})->name('chat');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backend/formLogin', 'Auth\LoginController@showLoginForm')->name('formLogin');
Route::get('/Login', 'Auth\LoginController@showLoginFormUser')->name('LoginUser');
Route::get('registeradmin',function(){
  return view('backend.User.register');
})->name('register.admin');
