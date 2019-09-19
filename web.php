<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// REST
Route::get('mensaje',['as' => 'mensaje.index' , 'uses' => 'MensajeContoller@index']);
Route::get('mensaje/create',['as' => 'mensaje.create' , 'uses' => 'MensajeContoller@create']);
Route::post('mensaje',['as' => 'mensaje.store' , 'uses' => 'MensajeContoller@store']);
Route::get('mensaje/{id}',['as' => 'mensaje.show' , 'uses' => 'MensajeContoller@show']);
Route::get('mensaje/{id}/edit',['as' => 'mensaje.edit' , 'uses' => 'MensajeContoller@edit']);
Route::put('mensaje/{id}',['as' => 'mensaje.update' , 'uses' => 'MensajeContoller@update']);
Route::delete('mensaje/{id}',['as' => 'mensaje.destroy' , 'uses' => 'MensajeContoller@destroy']);
