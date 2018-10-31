<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cart;
use Illuminate\Support\Facades\Auth;

class cartcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data =  cart::where('id_user','=',Auth::id())->get();
        return view('interface_frontend.frontend.checkout');
    }
    public function showcart()
    {
        $data =  cart::where('id_user','=',Auth::id())->get();
        return response()->json(array('success' => true, 'cart' => $data));
        // return view('interface_frontend.frontend.checkout', compact('data'));
    }
    public function deaddQty($id)
    {
        $data =  cart::where('id_user','=',Auth::id())->find($id);
        //dd($data->qty);
        if ($data->qty == 1) {
            $data->qty = 1;
            $data->save();
        } else {
        $data->qty = $data->qty - 1;
        $data->save();
        }
        return response()->json(array('success' => true, 'cart' => $data));
    }
    public function addQty($id)
    {
        $data =  cart::where('id_user','=',Auth::id())->find($id);
        //dd($data->qty);
        $data->qty = $data->qty + 1;
        $data->save();
        return response()->json(array('success' => true, 'cart' => $data));
    }
    public function cancel($id)
    {
        $data =  cart::where('id_user','=',Auth::id())->find($id);
        $data->delete();
        return response()->json(array('success' => true, 'cart' => $data));
    }
}
