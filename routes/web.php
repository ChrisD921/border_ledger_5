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

Route::get('/borderLedger/index', 'PersonnelController@index');

Route::get('/borderLedger/login', 'PersonnelController@login');

Route::post('/borderLedger/management' , 'PersonnelController@store' );

Route::get('/borderLedger/management', 'PersonnelController@show');


Route::get('/borderLedger/ledger', 'PersonnelController@ledger');

Route::get('/borderLedger/profile', 'PersonnelController@profile');

// Route::get('/admin', function () {
//     return view('management');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/ledger', function () {
//     return view('ledger');
// });

