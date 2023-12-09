<?php

use Illuminate\Support\Facades\Route;

//Admin Users

//Users

//Permissions & Roles

//P2P Transfers

//Mpesa Transactions


Route::group(['namespace' => "Admin"], function () {

    Route::group(['namespace' => "Auth"], function () {

        Route::get('login', 'LoginController@login')->name('login');
        Route::post('login', 'LoginController@authenticate')->name('login.authenticate');
        Route::get('logout', 'LoginController@logout')->name('logout');
       
        // Route::get('forgot-password', 'ForgotPasswordController@getEmail')->name('forgot-password');
        // Route::post('forgot-password', 'ForgotPasswordController@postEmail')->name('forgot-password');
        // Route::get('password/reset', 'ResetPasswordController@showResetForm')->name('password.request');
        // Route::post('password/reset', 'ResetPasswordController@postReset')->name('password.reset');
        // Route::get('password/reset/after', 'ResetPasswordController@afterReset')->name('password.reset.after');


        Route::group(['prefix'=>'2fa'], function(){

            // https://dev.to/roxie/how-to-add-google-s-two-factor-authentication-to-a-laravel-8-application-4jjp
            // https://github.com/mdobydullah/laravel-2fa-with-google-authenticator/
            // https://guidelines.wecreate.digital/laravel/laravel-2fa
            Route::get('/','LoginSecurityController@index');
            Route::post('/generateSecret','LoginSecurityController@generate2faSecret')->name('generate2faSecret');

            Route::post('/enable2fa','LoginSecurityController@enable2fa')->name('enable2fa');
            Route::post('/disable2fa','LoginSecurityController@disable2fa')->name('disable2fa');


            // 2fa middleware
            Route::any('/2fa', function () {
                return redirect(URL()->previous());
            })
            ->name('2fa.verify')
            ->middleware('2fa');
        });


    });




    Route::group([
    	'middleware' => [
    		'admin', 
    		'2fa',
    	],
	], function () {
		Route::get('/', 'DashboardController@index')->name('dashboard.index');

    	// Route::prefix('permissions')->name('permissions.')->group(static function() {
     //        Route::get('/','PermissionsController@index')->name('index');
     //        Route::get('/create','PermissionsController@create')->name('create');
     //        Route::post('/store','PermissionsController@store')->name('store');
     //        Route::get('/{permission}/show','PermissionsController@show')->name('show');
     //        Route::get('/{permission}/edit','PermissionsController@edit')->name('edit');
     //        Route::post('/{permission}/update','PermissionsController@update')->name('update');
     //        Route::delete('/{permission}/destroy','PermissionsController@destroy')->name('destroy');
     //    });


     //    Route::prefix('roles')->name('roles.')->group(static function() {
     //        Route::get('/','PermissionsController@index')->name('index');
     //        Route::get('/create','PermissionsController@create')->name('create');
     //        Route::post('/store','PermissionsController@store')->name('store');
     //        Route::get('/{role}/show','PermissionsController@show')->name('show');
     //        Route::get('/{role}/edit','PermissionsController@edit')->name('edit');
     //        Route::post('/{role}/update','PermissionsController@update')->name('update');
     //        Route::delete('/{role}/destroy','PermissionsController@destroy')->name('destroy');
     //    });



        


        Route::prefix('profile')->name('profile.')->group(static function() {
            Route::get('/','ProfileController@index')->name('index');
        });


        Route::prefix('settings')->name('settings.')->group(static function() {
            Route::get('/','SettingsController@index')->name('index');
            Route::post('/update','SettingsController@update')->name('update');
        });


        Route::prefix('customers/pay')->name('customers.pay.')->group(static function() {
            Route::get('/','BulkPaymentController@index')->name('index');
            Route::post('/store','BulkPaymentController@store')->name('store');
            Route::get('/waiting','BulkPaymentController@waiting')->name('waiting');
        });

        Route::prefix('withdrawals')->name('withdrawals.')->group(static function() {
            Route::get('/','WithdrawalsController@index')->name('index');
        });

        Route::prefix('deposits')->name('deposits.')->group(static function() {
            Route::get('/','DepositsController@index')->name('index');
        });

        Route::prefix('transactions')->name('transactions.')->group(static function() {
            Route::get('/','TransactionsController@index')->name('index');
            Route::get('/{transaction}/receipt','TransactionsController@receipt')->name('receipt');
            Route::get('/{transaction}/reverse/','TransactionsController@reverse')->name('reverse');
        });


        Route::prefix('customers')->name('customers.')->group(static function() {
            Route::get('/','CustomersController@index')->name('index');
            Route::get('/data','CustomersController@getData')->name('data');
            Route::get('/create','CustomersController@create')->name('create');
            Route::post('/store','CustomersController@store')->name('store');
            Route::get('/{customer}/show','CustomersController@show')->name('show');
            Route::get('/{customer}/edit','CustomersController@edit')->name('edit');
            Route::post('/{customer}/update','CustomersController@update')->name('update');
            Route::delete('/{customer}/destroy','CustomersController@destroy')->name('destroy');
        });


        Route::prefix('admin-users')->name('admin-users.')->group(static function() {
            Route::get('/','AdminUsersController@index')->name('index');
            Route::get('/data','AdminUsersController@getData')->name('data');
            Route::get('/create','AdminUsersController@create')->name('create');
            Route::post('/store','AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/show','AdminUsersController@show')->name('show');
            Route::get('/{adminUser}/edit','AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}/update','AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}/destroy','AdminUsersController@destroy')->name('destroy');
        });


	});
});
