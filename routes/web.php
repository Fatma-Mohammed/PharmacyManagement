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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/useraddresses', 'UserAddressController@index')->name('useraddresses.index');
Route::get('/useraddresses/create', 'UserAddressController@create')->name('useraddresses.create');
Route::post('/useraddresses', 'UserAddressController@store')->name('useraddresses.store');
Route::get('/useraddresses/{address}', 'UserAddressController@show')->name('useraddresses.show');
Route::get('/useraddresses/{address}/destroy', 'UserAddressController@destroy')->name('useraddresses.destroy');
Route::get('/useraddresses/{address}/edit', 'UserAddressController@edit')->name('useraddresses.edit');
Route::get('/useraddresses/{address}/update', 'UserAddressController@update')->name('useraddresses.update');
