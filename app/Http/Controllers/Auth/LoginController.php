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

    public function showLoginFormUser()
    {
        return view('interface_frontend/frontend_signin/signin');
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
            return redirect('/');
        }

    }

    public function logout(Request $request)
    {
        $data   = User::where('email', Auth::user()->email)->first();
        $data->status = 'logout';
        $data->save();
        
        if (Auth::user()->level == 'admin') {
            Auth::logout();
            return redirect('/backend/formLogin');
        } else {
            Auth::logout();
            return redirect('/');
        }

    }

}