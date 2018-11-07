<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\voucher_game;
use App\kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = voucher_game::all();
        $data = DB::table('voucher_games')
                    ->join('kategoris','voucher_games.kode_kategori','=','kategoris.id')
                    ->select('voucher_games.*','kategoris.nama_kategori')->get();
        $category = kategori::all();
        return view('backend.voucher.index',['data'=>$data,'category'=>$category]);
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
        $this->validate($request, array(
            'image' => 'image|mimes:jpeg,png,jpg|max:4048',
        ));

        $data = new voucher_game;
        $data->kode_voucher = $request->code_voucher;
        $data->nama_voucher = $request->name_voucher;
        $data->kode_kategori = $request->category;
        $data->harga_voucher = $request->price;
        $data->masa_aktif = $request->active_period;
        $data->status = $request->status;

        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('/img/voucher'),$filename);
          $data->foto = $filename;
          $data->save();

          $this->OneSignal($request->name_voucher,$request->category,$request->price);
        };
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
        $this->validate($request, array(
            'image' => 'image|mimes:jpeg,png,jpg|max:4048',
        ));
        
        $data = voucher_game::find($id);
        $data->kode_voucher=$request->code_voucher;
        $data->nama_voucher=$request->name_voucher;
        $data->kode_kategori=$request->category;
        $data->harga_voucher=$request->price;
        $data->masa_aktif=$request->active_period;
        $data->status=$request->status;

        if($request->hasFile('image')){
            $file_path = public_path().'/img/voucher/'.$data->foto;
            unlink($file_path);

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/img/voucher'),$filename);
            $data->foto = $filename;
            $data->save();

            return redirect()->back();
        }else{
            $data->save();
            return redirect()->back();
        };

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
        $file_path = public_path().'/img/voucher/'.$data->foto;
        unlink($file_path);
        $data->delete();
        return redirect()->back();
    }
    public function cek_kode()
    {
        $data = voucher_game::all('kode_voucher');
        return Response()->json($data);
    }
    public function OneSignal($name,$category,$price){
        $content = array(
            "en" => 'Hi There ! We Have a New Product Visit Our Site Click here now
            Name : '.$name.'
            Category : '.$category.'
            Price : $'.$price
            );
        $fields = array(
                            'app_id' => "2a16b621-58e7-4a72-9a4e-37bba2deea96",
                            'included_segments' => array('Active Users'),
                            'url' => route('index'),
                            'contents' => $content,
                       );

        $fields = json_encode($fields);


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                                                   'Authorization: Basic MDYzNjk2ZWEtY2I0MC00OWU5LThjYzgtNzQ0NDQ4YmFkMzNm'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

    }
}
