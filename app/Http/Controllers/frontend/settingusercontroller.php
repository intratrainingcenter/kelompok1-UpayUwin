<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\channel_message;
use App\transaksi_penjualan;
use App\detail_transaksi;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class settingusercontroller extends Controller
{
    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $check = Hash::check($request->password, Auth::User()->password);
        if (!$check) {
            return redirect()->route('setting')->with('warning','wrong password');
        } else {
            $user->name = $request->get('username');
            $user->email = $request->get('email');
            $user->save();
            return redirect()->route('setting')->with('success','Your Profile has been changed');
        }

    }
    public function updatepass(Request $request)
    {
        $user = User::find(Auth::id());
        $oldpassword = $user->password;

        $user->password = $request->get('password');

        $user->save();
        return redirect()->route('setting')->with('success','Your Profile has been changed');
    }
    public function historytransaction()
    {
        $data = detail_transaksi::join('transaksi_penjualans', 'detail_transaksis.kode_transaksi','=','transaksi_penjualans.kode_transaksi')
        ->where('id_user','=', Auth::id())
        ->orderBy('transaksi_penjualans.created_at','desc')
        ->get();
        return view('interface_frontend.frontend_user.history_user',compact('data'));
    }
    public function showfeed()
    {
        $data =  channel_message::where('room','=',Auth::id())->where('channels','=','customer_service')->get();
        return response()->json(array('success' => true, 'msg' => $data));
    }
    public function feedback(Request $request)
    {
        $data = new channel_message;
        $data->channels = 'customer_service';
        $data->messages = $request->messages;
        $data->room = '1';
        $data->from = 'user';
        $data->receive = 'admin';
        $data->created_at = Carbon::now()->setTime(23,59,59)->format('Y-m-d H:i:s');
        $data->updated_at = Carbon::now()->setTime(23,59,59)->format('Y-m-d H:i:s');
        $data->save();
        return response()->json(array('success' => true, 'message' => $data));
    }
    public function feeds()
    {
        $data =  channel_message::where('room','=',Auth::id())->where('channels','=','Upay-Uwin')->get();
        return response()->json(array('success' => true, 'msg' => $data));
    }
    public function replyfeed(Request $request, $id)
    {
        $data = new channel_message;
        return response()->json(array('success' => true, 'message' => $data));
    }
    public function servicefeed($id)
    {

    }
    public function feedsuser()
    {
        $data =  User::where('level','=','user')->get();
        return response()->json(array('success' => true, 'user' => $data));
    }
}
