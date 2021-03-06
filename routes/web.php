<?php

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

Route::model('Retailer', App\Retailer::class);
Route::model('PurchaseCoin', App\PurchaseCoin::class);

Route::get('/', function () {
    return view('welcome4');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('supplier');
Route::get('/tokensale', 'TokensaleController@index')->name('token_sale');
Route::get('/wallet', 'WalletController@index')->name('wallet')->middleware('auth');
Route::get('/account', 'AccountController@index')->name('account');
Route::get('/support', 'SupportController@index')->name('support');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('register/ref/{from_affiliate_id}', 'Auth\RegisterController@referredUser');

Route::get('/download/{language}', 'DownloadController@download');
Route::post('/getkey', 'GetkeyController@getkey');

Route::post('/email_contact', 'Emailcontactcontroller@store')->name('contact_email');

Route::resource('Retailers', 'RetailerController');
Route::resource('PurchaseCoins', 'PurchaseCoinController');

Route::post('/wallet/send-token/', 'WalletController@sendToken')->name('send-token');
Route::get('/product/barcode', 'ProductController@getProductInfoByBarcode')->name('getProductInfoByBarcode');
Route::resource('Suppliers', 'SuppliersController');

Route::get('/PurchaseCoins/admin', 'PurchaseCoinController@admin')->name('PurchaseCoin.admin');
Route::post('/PurchaseCoins/approve', 'PurchaseCoinController@approve')->name('PurchaseCoin.approve');

Route::get('/Retailers.member', 'RetailerController@member')->name('Retailers.member');
Route::post('/Retailers.member', 'RetailerMemberController@register')->name('RetailerMembers.register');

Route::get('/retailer/product_summanry', 'ProductController@getProductListByRetailer')->name('Retailer.products');
Route::get('/invoices/{invoice_no}', 'PurchaseCoinController@download');