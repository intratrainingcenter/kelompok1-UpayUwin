<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
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

    function login(request $request)
    {
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:4'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('dashboard.index')->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $credentials = [
                'email' => Input::get('email'),
                'password' => Hash::make($request->password),
            ];
            
            dd(Auth::attempt($credentials));

            if (Auth::attempt($userdata)) {
                dd('sukses', $request->all());
                // validation successful
                // do whatever you want on success

            } else {
                dd('gagal auth', $request->all());

                    // validation not successful, send back to form

                // return redirect()->route('dashboard.index');
            }
        }
    }

    public function logout(Request $request)
    {
      // dd($request->name);
        $ids = auth::user()->lock;
        if ($ids == 'login') {
        // dd('salah');
            $data = User::where('id', auth::user()->id)->first();
            $data->lock = 'logout';
            $data->save();

        // dd(auth::user()->name);
        // dd($data);
            $this->guard()->logout();

            $request->session()->flush();

            $request->session()->regenerate();

            return redirect('/login')
                ->withSuccess('Terimakasih, selamat datang kembali!');
        } else {

            $this->guard()->logout();

            $request->session()->flush();

            $request->session()->regenerate();

            return redirect('/login')
                ->withSuccess('Terimakasih, selamat datang kembali!');
        }
    }
}