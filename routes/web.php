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
Route::get('/useraddresses/{useraddress}', 'UserAddressController@show')->name('useraddresses.show');
Route::get('/useraddresses/{useraddress}/destroy', 'UserAddressController@destroy')->name('useraddresses.destroy');
Route::get('/useraddresses/{useraddress}/edit', 'UserAddressController@edit')->name('useraddresses.edit');
Route::get('/useraddresses/{useraddress}/update', 'UserAddressController@update')->name('useraddresses.update');
Route::get('/medicines', 'MedicineController@index')->name('medicine.index');
Route::get('/medicines/create', 'MedicineController@create')->name('medicine.create');
Route::post('/medicines', 'MedicineController@store')-> name('medicine.store');
Route::get('/medicines/{medicine}', 'MedicineController@show')-> name('medicine.show');
Route::get('/medicines/edit/{medicine}', 'MedicineController@edit')-> name('medicine.edit');
Route::put('/medicines/{medicine}' , 'MedicineController@update')-> name('medicine.update');
Route::get('/medicines/delete/{medicine}', 'MedicineController@destroy')-> name('medicine.delete');




Route::get('/orders', 'OrderController@index')->name('orders.index');

Route::get('/orders/create','OrderController@create')->name('orders.create');
Route::post('/orders','OrderController@store')->name('orders.store');
Route::get('/orders/{order}/destroy','OrderController@destroy')->name('orders.destroy');
Route::get('/orders/{order}/edit','OrderController@edit')->name('orders.edit');
Route::get('/orders/{order}/update','OrderController@update')->name('orders.update');
Route::get('/orders/{order}/{user}','OrderController@show')->name('orders.show');



// Route::get('/orders/create', 'OrderController@create')->name('orders.create');
// Route::post('/orders', 'OrderController@store')->name('orders.store');
// Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
// Route::get('/orders/{order}/destroy', 'OrderController@destroy')->name('orders.destroy');
// Route::get('/orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
// Route::get('/orders/{order}/update', 'OrderController@update')->name('orders.update');



Route::resource('pharmacies', 'PharmacyController');
Route::resource('doctors', 'DoctorController');
