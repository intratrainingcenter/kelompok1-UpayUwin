<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\voucher_game;
use App\kategori;
use App\cart;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categori = kategori::all();
        return view('interface_frontend/frontend_shop/category/grid', compact('categori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $idUser = Auth::user()->id;
        $voucher = voucher_game::find($request->voucher);
        $total = $voucher->harga_voucher * $request->qty;

        $cart = new cart;
        $cart->id_user = $idUser;
        $cart->voucher_code = $voucher->kode_voucher;
        $cart->type = 'voucher';
        $cart->qty = $request->qty;
        $cart->nominal = $total;
        $cart->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showVoucher($id)
    {
        $category = kategori::find($id);
        $voucher = voucher_game::where('kode_kategori',$id)->get();

        return view('interface_frontend/frontend_shop/voucher/voucher', compact('voucher' , 'category'));
    }

    public function showItem($id)
    {
        $categori = kategori::find($id);
        $voucher = voucher_game::where('kode_kategori',$id)->get();

        return view('interface_frontend/frontend_shop/voucher/voucher', compact('voucher' , 'categori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
