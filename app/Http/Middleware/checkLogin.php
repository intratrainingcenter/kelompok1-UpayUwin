<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\ValidationException;
use App\User;
use Closure;

class checkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $email = $request->email;
        $password = $request->password;

        $data = user::where('email',$email)->first();

        if(!is_null($data)){
            if(Hash::check($password, $data->password)){
                if($data->status == 'logout'){
                    $data->status = 'login';
                    $data->save();
                    return $next($request);
                }else{
                    return back()->with('block', 'Email Dsudah digunakan');
                }
            }else{
                return back()->with('password', 'Password Salah');
            }
        }else{
            return back()->with('email', 'Email Salah');
        }
    }
}
