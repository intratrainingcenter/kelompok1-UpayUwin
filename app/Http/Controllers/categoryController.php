<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = kategori::get();
        return view('/CATEGORY/category', compact('data'));
    }
    public function show($id)
    {
        $nilai = 'rifaldi rima danti'.$id;
        $user = '';

        return view('/CATEGORY/category2', compact('nilai','user'));
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
        // dd($request);
        $data = new kategori();
        $data->kode_kategori = $request->kode_category;
        $data->nama_kategori = $request->name_category;
        // dd($data);
        $data->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = kategori::find($id);
        return view('/CATEGORY/category2', compact('data', 'id'));
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
        $data = kategori::find($id);
        
        $data->kode_kategori = $request->kode_category;
        $data->nama_kategori = $request->name_category;
        $data->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = kategori::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('category.index');
    }
}
