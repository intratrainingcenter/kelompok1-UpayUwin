<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\voucher_game;
use App\kategori;
use App\cart;
use Session;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVoucher()
    {
        $product = 'voucher';
        $count = kategori::count();
        $categori = kategori::get();
        return view('interface_frontend/frontend_shop/category/categori', compact('count','categori','product'));
    }

    public function indexItem()
    {
        $product = 'item';
        $count = kategori::count();
        $categori = kategori::all();
        return view('interface_frontend/frontend_shop/category/categori', compact('count','categori','product'));
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
        
        Session::flash('message', 'Voucher telah Ditambahkan Ke Cart'); 
        return redirect()->back();
    }

    public function addto_cart_item(Request $request)
    {  
        $idUser = Auth::user()->id;
        $total = $request->harga * $request->qty;

        $cart = new cart;
        $cart->id_user = $idUser;
        $cart->voucher_code = $request->kode;
        $cart->type = 'item';
        $cart->qty = $request->qty;
        $cart->nominal = $total;
        $cart->save();

        Session::flash('message', 'Item telah Ditambahkan Ke Cart'); 
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

    public function showCategoryItem($category)
    {   
        return view('interface_frontend/frontend_shop/item/item', compact('category'));
    }

    public function showItem($category, $id)
    {
        return view('interface_frontend/frontend_shop/item/item_detail', compact('category','id'));
    }

    public function sortProduct(Request $request){

        $product = $request->product;
        if($request->sort == 'new'){
            $categori = kategori::orderBy('created_at', 'DESC')->get();
        }else{
            $categori = kategori::orderBy('created_at', 'ASC')->get();
        }
        return view('interface_frontend/frontend_shop/category/sort', compact('categori','product'));
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
