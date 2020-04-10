<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\AuthController@login')->name('login');
Route::post('register', 'API\AuthController@register')->name('register');


Route::get('/useraddresses', 'API\UserAddressController@index')->name('useraddresses.index');
Route::get('/useraddresses/{useraddress}', 'API\UserAddressController@show')->name('useraddresses.show');


Route::post('/useraddresses', 'API\UserAddressController@store')->name('useraddresses.store');
Route::post('/useraddresses/{useraddress}/update', 'API\UserAddressController@update')->name('useraddresses.update');
Route::delete('/useraddresses/{useraddress}/destroy', 'API\UserAddressController@destroy')->name('useraddresses.destroy');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('profile', 'API\UserController@show')->name('user.profile.show');
    Route::put('profile', 'API\UserController@update')->name('user.profile.update');
    Route::resource('orders', 'API\OrderController')->only(['index','show','store']);

});
