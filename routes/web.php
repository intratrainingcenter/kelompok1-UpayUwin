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
Route::get('/', function () {
    return redirect()->route('dashboard.index');
});

Route::get('UpayUwin/User', function(){
	return view('frontend.user');
});

Route::get('UpayUwin', function(){
<<<<<<< Updated upstream
    return view('frontend.index');
})->name('awal');

Route::get('UpayUwin/cart', function(){
    return view('frontend.cart');
});

Route::get('UpayUwin/product', function(){
    return view('frontend.product');
=======
	return view('index_frontend');	
});

Route::get('/', function(){
	return view('welcome');	
>>>>>>> Stashed changes
});

Route::get('UpayUwin/payment', function(){
    return view('frontend.payment');
});

Route::get('/pay','PaymentController@payWithpaypal');

<<<<<<< Updated upstream
Route::get('/backend/login',function(){
	return view('backend.User.login');
});
//Route Untuk Backend
Route::prefix('backend')->middleware('admin')->group(function () {

=======
Route::resource('category','categoryController');

//Route Untuk Backend
Route::prefix('backend')->group(function () { 
	
	//Route Dashboard
>>>>>>> Stashed changes
	Route::resource('dashboard','backend\DashboardController');
	//Rsoute Dashboard
	Route::resource('voucher','backend\VoucherController');
	//Route User
<<<<<<< Updated upstream
	Route::resource('user','backend\UserController');
	//Route setting
	Route::resource('setting2','backend\SettingController');
  Route::get('/settingweb', 'backend\SettingController@setting_web')->name('settingweb');
  	//Route setting
  	Route::resource('setting','backend\SettingController');
=======
	Route::prefix('User')->group(function () {
		

	});
>>>>>>> Stashed changes
});



//Route Untuk Frontend
Route::prefix('frontend')->group(function () {
	//Route wallet
	Route::prefix('wallet')->group(function () {
	});
    
});

<<<<<<< Updated upstream
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formLogin', 'Auth\LoginController@showLoginForm')->name('formLogin');
=======
Route::resource('category','categoryController');
>>>>>>> Stashed changes
