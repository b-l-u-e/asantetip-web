<?php

use Illuminate\Support\Facades\Route;

use App\Facades\Mpesa;


//MPESA BALANCE

//B2C

//B2B

//MPESA REFUND

//P2P

//P2P Refund


Route::get('/', function () {
    
    return true;
});




// Route::get('/', function () {
//     try {
//         $response = Mpesa::STKPush([
//             'amount' => 1,//intval($request->amount),
//             'phoneNumber' => "254795112075",
//             'accountReference' => '12',
//             'transactionDesc' => "Test Transaction",
//             'CallBackURL' =>'https://ecfdb1ac.ngrok.io/confirm/',
//         ]);

//     } catch(\Exception $e){
//         $response = json_decode($e->getMessage());
//         dd($response);
//     }
//     return view('welcome');
// });

