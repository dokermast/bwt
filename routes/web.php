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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'MainController@main')->name('main');
Route::get('/users', 'MainController@users')->name('users');
Route::get('/companies', 'MainController@companies')->name('companies');
Route::get('/countries', 'MainController@countries')->name('countries');
Route::post('/user_country', 'MainController@userCountry')->name('user_country');

