<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\User;
use Input;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('checkLogin');
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        dd('asda');
        $status = auth::User()->status;
        if($status == 'login'){
            $data = User::where('id', auth::user()->id)->first();
            $data->status = 'logout' ; 
            $data->save();

            $this->guard()->logout();
            $request->session()->flush();
            $request->session()->regenerate();

            return redirect()->route('awal');
        }else{

            $this->guard()->logout();
            $request->session()->flush();
            $request->session()->regenerate();

            return redirect('')->route('awal');
        }


    } 

}