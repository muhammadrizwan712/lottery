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

 Route::get('shareandinvite/{id}', 'Auth\RegisterController@share');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//packages
Route::get('createPackage','PackageController@create')->name('package.create');
Route::get('viewPackage','PackageController@view')->name('package.view');
Route::get('postiPackage','PackageController@store')->name('package.store');
Route::post('editPackage','PackageController@edit')->name('edit.package');
Route::get('deletePackage/{id}','PackageController@delete')->name('delete.package');
//transection0000

Route::post('createtransection','TransectionController@store')->name('transection.store');
Route::get('createtransection/view','TransectionController@view')->name('transection.view');
Route::get('gettransection/page','TransectionController@create')->name('transection.create');
//account
Route::post('shiftmoney','AccountController@Store')->name('store.money.in.account');

//withdraw
Route::post('withdrawrequest','WithdrawController@withdrawPost')->name('get.withdraw');
Route::get('withdrawrequest','WithdrawController@withdraw')->name('get.withdraw');
Route::get('withdrawrequest/view','WithdrawController@view')->name('withdraw.view');
Route::Post('sendpayment/ok','WithdrawController@statusPayment')->name('send.payment.back');
Route::post('semdtmoney','WithdrawController@store')->name('send.money.to.account');

Route::get('createPackage/lotry','LotteryController@create')->name('lottery.create');
Route::post('postiPackage/lotery','LotteryController@store')->name('lottery.store');
Route::get('deletePackage/lotery/{id}','LotteryController@delete')->name('lottery.delete');
Route::get('get/Package/lotery/{id}','LotteryController@getLottery')->name('lottery.get');
//get prize
Route::get('getprize/lotry/{id}','TransectionController@getPrize')->name('get.prize');
//users list
Route::get('getalluser','UserController@getUser')->name('get.users');

Route::get('withdrawinfo','UserController@infoWithdraw')->name('info.withdraw');