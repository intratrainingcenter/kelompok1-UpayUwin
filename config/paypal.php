<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','Af41NdAHqLJkZGbcfH1Z5RgZ6XinBp810tPwvFX-YlMl1wh1lBvRBUn6wf_6BGcyulXjTIoZ-4DhRFJZ'),
    'secret' => env('PAYPAL_SECRET','EJ53BlH7Vdsye-RbGMUrauhgrB5cyk-F5gOrnx_2H3IBVE2wiMMRAbCXtafFZtIsYv4w1fn8GOMBMcZv'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];