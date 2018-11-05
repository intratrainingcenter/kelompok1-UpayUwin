<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\transaksi_penjualan;
use App\detail_transaksi;
use Illuminate\Support\Facades\Auth;

class settingusercontroller extends Controller
{
    public function update(Request $request)
    {
        // dd($request);
        $user = User::find(Auth::id());
        $user->name = $request->get('username');
        $user->email = $request->get('email');
        $user->save();
        return redirect()->route('setting')->with('success','Your Profile has been changed');
    }
    public function updatepass(Request $request)
    {
        // dd($request);
        $user = User::find(Auth::id());
        $user->password = $request->get('password');
        $user->save();
        return redirect()->route('setting')->with('success','Your Profile has been changed');
    }
    public function historytransaction()
    {
        $data = detail_transaksi::join('transaksi_penjualans', 'detail_transaksis.kode_transaksi','=','transaksi_penjualans.kode_transaksi')
        ->where('id_user','=', Auth::id())
        ->get();
        return view('interface_frontend.frontend_user.history_user',compact('data'));
    }
}
