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
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('backend/User/login');
    }

    protected function authenticated(Request $request, $user)
    {
        $email = Auth::user()->email;
        $level = Auth::user()->level;

        $data = User::where('email', $email)->first();
        $data->status = 'login';
        $data->save();

        if ($level == 'admin') {// do your margic here
            return redirect()->route('dashboard.index');
        }else{
            return redirect()->route('awal');
        }

    }

    public function logout(Request $request)
    {
        $email  = Auth::user()->email;
        $data   = User::where('email', $email)->first();
        $data->status = 'logout';
        $data->save();
        
        if($data->save()){
            Auth::logout();
            return view('backend/User/login');
        }else{
            return redirect()->route('dashboard.index');
        }

    }

}