<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Notification;
use App\Notifications\SendReceiptEmail;
use App\Notifications\SendReceiptCopyEmail;

use App\Models\Customer;
use App\Models\Transaction;

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function(){
	return view("welcome");
});

Route::get("/about", function(){
	return view("about.index");
});

Route::get("/contact", function(){
	return view("contact.index");
});

Route::post("/contact", function(Request $request){
	$data = $request->all();
	return redirect()->back()->with("status","We recieved your message. We will respond back with in the next few hours.");
})->name('contact');

Route::get("/terms-and-conditions", function(){
	return view("terms-and-conditions");
});

Route::get("/privacy-policy", function(){
	return view("privacy-policy");
});

Route::get('/redirect', 'Oauth2Controller@index')->name("oauth2.redirect");
Route::get('/redirect/complete', 'Oauth2Controller@complete')->name("oauth2.complete");
Route::get('/redirect/payment/complete', 'Oauth2Controller@completePayment')->name("oauth2.payment.complete");


// Route::get('/debug/events', function () {
//     event(new App\Events\BalanceUpdated([
// 		"edew" => "ewdcew"
// 	]));

// 	return "sent";
// });
