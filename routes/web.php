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


//admin Pages
// Route::get('/borderLedger/index', function(){
//     return view('/borderLedger/management');
// })->middleware('checkadmin');

// Route::get('/borderLedger/management' , 'PersonnelController@view' );
// // Route::post('/borderLedger/management' , 'PersonnelController@store' )->middleware('checkadmin');;
// // Route::delete('/borderLedger/management/{id}', 'PersonnelController@destroy')->middleware('checkadmin');;


//Personnel Pages
Route::get('/borderLedger/ledger', 'PasserbyController@index');
Route::post('/borderLedger/ledger', 'PasserbyController@store');

Route::get('/borderLedger/profile', 'PersonnelController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');



