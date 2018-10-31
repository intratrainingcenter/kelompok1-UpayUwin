<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use Input;

use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use App\cart;
use App\transaksi_penjualan;
use App\detail_transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{	
    public function __construct()
    {
    	/** PayPal api context **/
		$paypal_conf = \Config::get('paypal');

		$this->_api_context = new ApiContext(new OAuthTokenCredential(
			$paypal_conf['client_id'],
			$paypal_conf['secret'])
		);

		$this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithpaypal(Request $request)
    {	
    	//kode transaksi
    	$max_id = DB::table('transaksi_penjualans')->max('id');
	    $for_code_1 = $max_id + 1;
	    $for_code_2 = date("YmdHis");
	    $user_id = Auth::user()->id;
	    $transaction_code = 'TR-'.$for_code_1.$for_code_2.$user_id;
	    Session::put('transaction_code', $transaction_code);

    	$items = cart::whereIn('voucher_code', $request->voucher_code)
    					->join('voucher_games','voucher_games.kode_voucher','=','cart.voucher_code')
    					->select('cart.*','voucher_games.nama_voucher')
    					->get();

		$payer = new Payer();
		        $payer->setPaymentMethod('paypal');

		$all_item = array();
		$grand_total = array();
		$bought_vouchers = array();
		foreach ($items as $key => $value) {

    		${'item_$key'.$key} = new Item();
			${'item_$key'.$key}->setName($value->nama_voucher) 
				               ->setCurrency('USD')
				               ->setQuantity($value->qty)
				               ->setPrice($value->nominal); 

		 	//untuk detail transaksi
    		$bought_vouchers[]=[
				'kode_transaksi' => $transaction_code,
				'kode_voucher' => $value->voucher_code,
				'jumlah' => $value->qty,
				'harga' => $value->nominal
			];

    		$grand_total[] = $value->qty*$value->nominal;
    		$all_item[]=${'item_$key'.$key};
    	}	
    	Session::put('grand_total', array_sum($grand_total));
    	Session::put('bought_vouchers', $bought_vouchers);
		$item_list = new ItemList();
		        $item_list->setItems($all_item);

		$amount = new Amount();
		        $amount->setCurrency('USD')
		            ->setTotal(array_sum($grand_total));

		$transaction = new Transaction();
		        $transaction->setAmount($amount)
		            ->setItemList($item_list)
		            ->setDescription('Pembelian Pada Website Resmi UpayUwin');

		$redirect_urls = new RedirectUrls();
		        $redirect_urls->setReturnUrl(URL::route('payment.status')) /** Specify return URL **/
		            ->setCancelUrl(URL::route('payment.status'));

		$payment = new Payment();
		        $payment->setIntent('Sale')
		            ->setPayer($payer)
		            ->setRedirectUrls($redirect_urls)
		            ->setTransactions(array($transaction));
		        /** dd($payment->create($this->_api_context));exit; **/

		try {
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PPConnectionException $ex) {
			if (\Config::get('app.debug')) {

					\Session::put('error', 'Connection timeout');
			        return Redirect::route('paywithpaypal');
			} else {
					\Session::put('error', 'Some error occur, sorry for inconvenient');
			        return Redirect::route('paywithpaypal');
			}
		}


		foreach ($payment->getLinks() as $link) {
			if ($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
			    break;
			}
		}
		/** add payment ID to session **/
		Session::put('paypal_payment_id', $payment->getId());
		if (isset($redirect_url)) {
		/** redirect to paypal **/
		    return Redirect::away($redirect_url);
		}
		\Session::put('error', 'Unknown error occurred');
		return Redirect::route('paywithpaypal');
	}

	public function getPaymentStatus()
    {
    	date_default_timezone_set('asia/jakarta');

        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');

        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::to('/frontend/checkout');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
            \Session::put('success', 'Payment success');
           
            $transaction = new transaksi_penjualan;
			$transaction->kode_transaksi = Session::get('transaction_code');
            $transaction->id_user = Auth::id();
			$transaction->tanggal_transaksi = date("Y-m-d");  
			$transaction->total = Session::get('grand_total');;
			$transaction->save();
			detail_transaksi::insert(Session::get('bought_vouchers')); 
			Session::forget('transaction_code');
			Session::forget('grand_total');
			Session::forget('bought_vouchers');  
            return Redirect::to('/');
        }
        \Session::put('error', 'Payment failed');
        	
        return Redirect::to('/frontend/checkout');
    	
    }

}
