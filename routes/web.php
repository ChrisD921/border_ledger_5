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

//Route::get('/borderLedger/login', 'PersonnelController@login');

Route::get('/management', 'PersonnelController@index');

Route::post('/management' , 'PersonnelController@store' );

Route::delete('/management/{id}', 'PersonnelController@destroy');

Route::get('/ledger', 'PasserbyController@index');
Route::post('/ledger', 'PasserbyController@store');
//ajax:
Route::get('/ledger-ajax', 'PasserbyController@dataAjax');

Route::get('/profile', 'PersonnelController@profile');

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
