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
use App\voucher_game;
use App\cart;

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
    	$items = cart::whereIn('voucher_code', $request->voucher_code)
    					->join('voucher_games','voucher_games.kode_voucher','=','cart.voucher_code')
    					->select('cart.*','voucher_games.nama_voucher')
    					->get();

		$payer = new Payer();
		        $payer->setPaymentMethod('paypal');

		$all_item = array();
		$grand_total = array();
		foreach ($items as $key => $value) {

    		${'item_$key'.$key} = new Item();
			${'item_$key'.$key}->setName($value->nama_voucher) 
				               ->setCurrency('USD')
				               ->setQuantity($value->qty)
				               ->setPrice($value->nominal); 
    		
    		$grand_total[] = $value->qty*$value->nominal;
    		$all_item[]=${'item_$key'.$key};
    	}	

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
           
            return Redirect::to('/');
        }
        \Session::put('error', 'Payment failed');
        	
        return Redirect::to('/frontend/checkout');
    	
    }

}
