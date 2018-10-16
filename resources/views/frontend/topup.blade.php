@extends('index_frontend')
@section('content')
    <div class="content">
<div class="container">
	 <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Top Up Wallet</h3>
                        <div class="plan-selection">
                            <div class="plan-data">
                                
                            <label for="question1">Select Your Top Up Nominal</label>
                                <select class="form-control input-lg" name="category">
                                        <option value="20.000">Rp 20.000 ,-</option>
                                        <option value="50.000">Rp 50.000 ,-</option>
                                        <option value="100.000">Rp 100.000 ,-</option>
                                        <option value="300.000">Rp 300.000 ,-</option>
                                        <option value="500.000">Rp 500.000 ,-</option>
                                        <option value="1.000.000">Rp 1.000.000 ,-</option>
                                </select>
                            </div>
                        </div>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <label for="question1">Payment Method</label>  
                                <div class="paymentWrap">
                                    <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                                        <label class="btn paymentMethod active">
                                            <div class="method visa"></div>
                                            <input type="radio" name="options" checked> 
                                        </label>
                                        
                                    </div>        
						        </div>


                            </div>
                        </div>
                        
                    </div>
                    
                    
                    
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="widget" >
                        <h7 class="widget-title"><img src="{{asset('images/wallet.png')}}"> Hi, You Have :</h7><br>
                        <div class="summary-block">
                            <div class="summary-content">
                                <div class="summary-head"><h5 class="summary-title">RP</h5></div>
                                <div class="summary-price">
                                    <p class="summary-text"> 10.000.000 ,-</p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="widget">
                        <h4 class="widget-title">Order Summary</h4>
                        <div class="summary-block">
                            <div class="summary-content">
                                <div class="summary-head"><h5 class="summary-title">Sub Total</h5></div>
                                <div class="summary-price">
                                    <p class="summary-text">$29 / mo</p>
                                </div>
                            </div>
                        </div>
                        <div class="summary-block">
                            <div class="summary-content">
                               <div class="summary-head"> <h5 class="summary-title">Admin Fee</h5></div>
                                <div class="summary-price">
                                    <p class="summary-text">$229 / mo</p>
                                </div>
                            </div>
                        </div>
                        <div class="summary-block">
                            <div class="summary-content">
                               <div class="summary-head"> <h5 class="summary-title">Estimated Payment</h5></div>
                                <div class="summary-price">
                                    <p class="summary-text">$258 / mo</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-lg mb30">Top Up</a>
                    </div>
                   
                </div>
            </div>
	<div class="row">
           </div>
	
	
	
	
	
</div>
</div>
<style>
    body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Noto Sans', sans-serif; letter-spacing: 0px; font-size: 14px; color: #2e3139; font-weight: 400; line-height: 26px; }
h1, h2, h3, h4, h5, h6 { letter-spacing: 0px; font-weight: 400; color: #1c1e22; margin: 0px 0px 15px 0px; font-family: 'Noto Sans', sans-serif; }
h1 { font-size: 42px; line-height: 50px; }
h2 { font-size: 36px; line-height: 42px; }
h3 { font-size: 20px; line-height: 32px; }
h4 { font-size: 18px; line-height: 32px; }
h5 { font-size: 14px; line-height: 20px; }
h6 { font-size: 12px; line-height: 18px; }
p { margin: 0 0 20px; line-height: 1.8; }
p:last-child { margin: 0px; }
ul, ol { }
a { text-decoration: none; color: #2e3139; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
a:focus, a:hover { text-decoration: none; color: #0943c6; }
.content{padding-top:80px; padding-bottom:80px};


/*------------------------
Radio & Checkbox CSS
-------------------------*/
.form-control { border-radius: 4px; font-size: 14px; font-weight: 500; width: 100%; height: 70px; padding: 14px 18px; line-height: 1.42857143; border: 1px solid #dfe2e7; background-color: #dfe2e7; text-transform: capitalize; letter-spacing: 0px; margin-bottom: 16px; -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075); -webkit-appearance: none; }

input[type=radio].with-font, input[type=checkbox].with-font { border: 0; clip: rect(0 0 0 0); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute; width: 1px; }
input[type=radio].with-font~label:before, input[type=checkbox].with-font~label:before { font-family: FontAwesome; display: inline-block; content: "\f1db"; letter-spacing: 10px; font-size: 1.2em; color: #dfe2e7; width: 1.4em; }
input[type=radio].with-font:checked~label:before, input[type=checkbox].with-font:checked~label:before { content: "\f00c"; font-size: 1.2em; color: #0943c6; letter-spacing: 5px; }
input[type=checkbox].with-font~label:before { content: "\f096"; }
input[type=checkbox].with-font:checked~label:before { content: "\f046"; color: #0943c6; }
input[type=radio].with-font:focus~label:before, input[type=checkbox].with-font:focus~label:before, input[type=radio].with-font:focus~label, input[type=checkbox].with-font:focus~label { }

.box { background-color: #fff; border-radius: 8px; border: 2px solid #e9ebef; padding: 50px; margin-bottom: 40px; }
.box-title { margin-bottom: 30px; text-transform: uppercase; font-size: 16px; font-weight: 700; color: #094bde; letter-spacing: 2px; }
.plan-selection { border-bottom: 2px solid #e9ebef; padding-bottom: 25px; margin-bottom: 35px; }
.plan-selection:last-child { border-bottom: 0px; margin-bottom: 0px; padding-bottom: 0px; }
.plan-data { position: relative; }
.plan-data label { font-size: 20px; margin-bottom: 15px; font-weight: 400; }
.plan-text { padding-left: 35px; }
.plan-price { position: absolute; right: 0px; color: #094bde; font-size: 20px; font-weight: 700; letter-spacing: -1px; line-height: 1.5; bottom: 43px; }
.term-price { bottom: 18px; }
.secure-price { bottom: 68px; }
.summary-block { border-bottom: 2px solid #d7d9de; }
.summary-block:last-child { border-bottom: 0px; }
.summary-content { padding: 28px 0px; }
.summary-price { color: #094bde; font-size: 20px; font-weight: 400; letter-spacing: -1px; margin-bottom: 0px; display: inline-block; float: right; }
.summary-small-text { font-weight: 700; font-size: 12px; color: #8f929a; }
.summary-text { margin-bottom: -10px; }
.summary-title { font-weight: 700; font-size: 14px; color: #1c1e22; }
.summary-head { display: inline-block; width: 120px; }

.widget { margin-bottom: 20px; background-color: #e9ebef; padding: 50px; border-radius: 6px; }
.widget:last-child { border-bottom: 0px; }
.widget-title { color: #094bde; font-size: 16px; font-weight: 700; text-transform: uppercase; margin-bottom: 15px; letter-spacing: 1px; display: table; line-height: 1; }

.btn { font-family: 'Noto Sans', sans-serif; font-size: 16px; text-transform: capitalize; font-weight: 700; padding: 12px 36px; border-radius: 4px; line-height: 2; letter-spacing: 0px; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; word-wrap: break-word; white-space: normal !important; }
.btn-default { background-color: #0943c6; color: #fff; border: 1px solid #0943c6; }
.btn-default:hover { background-color: #063bb3; color: #fff; border: 1px solid #063bb3; }
.btn-default.focus, .btn-default:focus { background-color: #063bb3; color: #fff; border: 1px solid #063bb3; }

.paymentWrap {
	padding: 50px;
}

.paymentWrap .paymentBtnGroup {
	max-width: 800px;
	margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
	padding: 40px;
	box-shadow: none;
	position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
	outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
	border-color: #4cd264;
	outline: none !important;
	box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
	position: absolute;
	right: 3px;
	top: 3px;
	bottom: 3px;
	left: 3px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	border: 2px solid transparent;
	transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
	background-image: url("https://www.paypalobjects.com/webstatic/mktg/logo-center/PP_Acceptance_Marks_for_LogoCenter_266x142.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
	background-image: url("data:image/png;base64,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");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
	background-image: url("http://www.paymentscardsandmobile.com/wp-content/uploads/2015/08/Amex-icon.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
	background-image: url("http://i.imgur.com/VkiM7PL.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
	background-image: url("http://www.busbooking.lk/img/carousel/BusBooking.lk_ezCash_offer.png");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
	border-color: #4cd264;
	outline: none !important;
}
</style>
@endsection