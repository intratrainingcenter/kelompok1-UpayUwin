<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\voucher_game;
use App\kategori;

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
        //
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

    public function showItem($id)
    {
        return view('interface_frontend/frontend_shop/item/item_detail', compact('id'));
    }

    public function sortProduct(Request $request){

        if($request->sort == 'new'){
            $categori = kategori::orderBy('created_at', 'DESC')->get();
        }else{
            $categori = kategori::orderBy('created_at', 'ASC')->get();
        }
        return view('interface_frontend/frontend_shop/category/sort', compact('categori'));
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
