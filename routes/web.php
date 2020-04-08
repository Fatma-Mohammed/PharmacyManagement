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
Route::get('/medicines', 'MedicineController@index')->name('medicine.index');
Route::get('/medicines/create', 'MedicineController@create')->name('medicine.create');
Route::post('/medicines', 'MedicineController@store')-> name('medicine.store');
Route::get('/medicines/{medicine}', 'MedicineController@show')-> name('medicine.show');
Route::get('/medicines/edit/{medicine}', 'MedicineController@edit')-> name('medicine.edit');
Route::put('/medicines/{medicine}' , 'MedicineController@update')-> name('medicine.update');
Route::get('/medicines/delete/{medicine}', 'MedicineController@destroy')-> name('medicine.delete');







