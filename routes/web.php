<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PersonnelController@indexhome');
Route::get('/borderLedger/management', 'PersonnelController@view')->middleware('checkadmin');
Route::post('/borderLedger/management' , 'PersonnelController@store' )->middleware('checkadmin');
Route::delete('/borderLedger/management/{id}', 'PersonnelController@destroy')->middleware('checkadmin');


Route::get('/management', 'PersonnelController@index');

Route::post('/management' , 'PersonnelController@store' );

Route::delete('/management/{id}', 'PersonnelController@destroy');

Route::get('/ledger', 'PasserbyController@index');
Route::post('/ledger', 'PasserbyController@store');
//ajax:
Route::get('/ledger-ajax', 'PasserbyController@dataAjax');

Route::get('/profile', 'PersonnelController@profile');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');



