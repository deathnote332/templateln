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


Route::match(array('GET','POST'),'/'        ,   'MainController@mainPage');

Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::get('/billing', 'BillController@billPage');
Route::post('/cartDetails', 'BillController@cartDetails');
Route::get('/addCustomerPage', 'CustomerController@addCustomerPage');

