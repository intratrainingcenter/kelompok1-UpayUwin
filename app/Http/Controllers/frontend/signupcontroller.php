<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\User;

class signupcontroller extends Controller
{
    public function store(Request $request)
    {

        $check = User::where('email','=',$request->get('Email'))->first();
        if ($check = null ) {
            return redirect()->route('signup')->with('failed', 'Email telah terpakai');
        }
        else {
            $data = new User([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'level' => 'user',
                'status' => 'logout',
            ]);
            $data->save();
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('index')->with('success', 'Data Telah Ditambahkan');
        }

    }
}
