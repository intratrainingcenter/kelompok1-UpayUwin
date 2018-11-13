<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportTransactionController extends Controller
{
    public function index(){
    	$minutes = now()->addMinutes(1);
    	$transaction = \Cache::remember('transaksi', $minutes, function () {
		    return DB::table('transaksi_penjualans')->get();
		});
		$detail_transaction = \Cache::remember('detail_transaksi', $minutes, function () {
		    return DB::table('detail_transaksis')->get();
		});
		return view('backend.report.index', compact('transaction','detail_transaction'));
    }
}
