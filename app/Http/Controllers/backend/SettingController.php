<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\setting;
use Response;
use Image;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = setting::first();
        return view('backend.setting.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.setting.setup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      $update = setting::find($id);
      $file = $request->file('logo');
      $fileName   = $file->getClientOriginalName();
      $request->file('logo')->move('backend/img', $fileName);
      $update->logo = $fileName;
      $update->nama_ecommerce = $request->name_ecommerce;
      $update->alamat = $request->address;
      $update->telp = $request->phone;
      $update->save();

      return redirect()->route('setting2.index');
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

    public function setting_web()
    {
      $setting = setting::first();
      return Response::json([ 'tittle' => $setting->nama_ecommerce, 'address' => $setting->alamat, 'phone' => $setting->telp,'logo' => $setting->logo,], 201);
    }
    public function storeSetup(request $request){

        $this->validate($request, array(
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ));

        $setting = new setting;
        $setting->nama_ecommerce = $request->web_name;
        $setting->alamat = $request->company_address;
        $setting->telp = $request->phone_number;
        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('backend/img'),$filename);
          $setting->logo = $filename;
          $setting->save();
        };

        return redirect()->route('register.admin');
    }
}
