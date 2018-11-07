<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LaporanTransaksiController extends Controller
{
    public function index(){
    	$minutes = 60;
    	$transaksi = \Cache::remember('transaksi', $minutes, function () {
		    return DB::table('transaksi_penjualans')->get();
		});
		$detail_transaksi = \Cache::remember('detail_transaksi', $minutes, function () {
		    return DB::table('detail_transaksis')->get();
		});
		dd($transaksi,$detail_transaksi);
		return view('backend.laporan.index', compact('transaksi','detail_transaksi'));
    }
}
