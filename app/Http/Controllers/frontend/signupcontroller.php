<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class signupcontroller extends Controller
{
    public function store(Request $request)
    {
        
        $check = User::where('email','=',$request->get('Email'))->first();
        //dd($check);
        if ($check = null ) {
            dd('email telah terpakai');
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
            return redirect()->route('LoginUser')->with('success', 'Data Telah Ditambahkan'); 
        }
        
    }
}
