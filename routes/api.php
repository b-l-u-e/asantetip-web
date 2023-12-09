<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')
    ->get('pusher/user-auth', 
    function (Request $request) {
        Log::debug("Hitting auth");
        $request->all();
        return $request->user();
    });

Route::group([
    'namespace'=>'Api',
    'middleware'=>  'mpesa-whitelist'
],
    function ($router) {
    Route::any('/validate', 'MpesaWebhookController@validateMpesa');
    Route::any('/confirm', 'MpesaWebhookController@confirmMpesa');

    Route::any('/b2c/timeout', 'MpesaWebhookController@b2cTimeout');
    Route::any('/b2c/result', 'MpesaWebhookController@b2cResult');

    Route::any('/bal/timeout', 'MpesaWebhookController@balanceTimeout');
    Route::any('/bal/result', 'MpesaWebhookController@balanceResult');

    Route::any('/reverse/timeout', 'MpesaWebhookController@reverseTimeout');
    Route::any('/reverse/result', 'MpesaWebhookController@reverseResult');
});

Route::group([
    'prefix' => 'v1',
    'as' => 'v1.',
    'namespace'=>'Api'],
    function ($router) {

    // Route::post('login', 'AuthenticationController@updateUser');
    Route::post('user', 'AuthenticationController@getUser');

    Route::group(['middleware' => 'auth:api'], function ($router) {
        Route::post('auth/phone/otp', 'AuthenticationController@sendOTP');
        Route::post('auth/phone/verify', 'AuthenticationController@verifyPhone');

        Route::post('user/update', 'AuthenticationController@updateUser');
        // Route::post('fcm/update', 'TokenController@update');
        Route::get('me', 'AuthenticationController@me');
        Route::get('logout', 'AuthenticationController@logout');
    });

    Route::group([
        'middleware' => 'auth:api'
    ], function ($router) {         
        Route::get('settings', 'SettingsController@index');
        Route::get('deposits', 'DepositsController@index');
        Route::post('deposits', 'DepositsController@store');
        Route::get('withdrawals', 'WithdrawalsController@index');
        Route::post('withdrawals', 'WithdrawalsController@store');
        Route::get('transactions', 'TransactionsController@index');
        Route::get('balances', 'BalancesController@index');

        // Route::post('test-deposit', 'TestDerivController@deposit');
        // Route::post('test-verify', 'TestDerivController@verify');
        // Route::post('test-withdraw', 'TestDerivController@withdraw');
        // Route::post('test-balance', 'TestMpesaController@index');
    });

    Route::post('test-authorize', 'TestDerivController@authorizeIt');
});

