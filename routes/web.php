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

Route::get('/borderLedger/index', 'PersonnelController@indexhome');

Route::get('/borderLedger/login', 'PersonnelController@login');

Route::get('/borderLedger/management', 'PersonnelController@index');

Route::post('/borderLedger/management' , 'PersonnelController@store' );

Route::delete('/borderLedger/management/{id}', 'PersonnelController@destroy');

Route::get('/borderLedger/ledger', 'PasserbyController@index');
Route::post('/borderLedger/ledger', 'PasserbyController@store');

Route::get('/borderLedger/profile', 'PersonnelController@profile');



//dd(request()->all());
// Route::get('/admin', function () {
//     return view('management');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/ledger', function () {
//     return view('ledger');
// });

