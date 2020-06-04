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

Route::get('/management', 'PersonnelController@index')->middleware('checkadmin');
Route::post('/management' , 'PersonnelController@store' )->middleware('checkadmin');

Route::delete('/management/{id}', 'PersonnelController@destroy')->middleware('checkadmin');

Route::get('/ledger', 'PasserbyController@index');
Route::post('/ledger', 'PasserbyController@store');
Route::post('/ledger/getBorderNames','PasserbyController@getBorderNames')->name('borderLedger.getBorderNames');

Route::get('/profile', 'PersonnelController@profile');
Route::get('/profile/store', 'PersonnelController@validator');
Route::post('/profile/store', 'PersonnelController@profileStore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');



