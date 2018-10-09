<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\voucher_game;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = voucher_game::all();
        return view('backend.voucher.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new voucher_game;
        $data->kode_voucher = $request->code_voucher;
        $data->nama_voucher = $request->name_voucher;
        $data->kode_kategori = $request->category;
        $data->harga_voucher = $request->price;
        $data->masa_aktif = $request->active_period;
        $data->status = $request->status;
        $data->save();

        return redirect()->route('voucher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
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
        $data = voucher_game::find($id);
        $data->kode_voucher=$request->code_voucher;
        $data->nama_voucher=$request->name_voucher;
        $data->kode_kategori=$request->category;
        $data->harga_voucher=$request->price;
        $data->masa_aktif=$request->active_period;
        $data->status=$request->status;
        $data->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = voucher_game::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function cek_kode()
    {
        $data = voucher_game::all('kode_voucher');
        return Response()->json($data);
    }
}
