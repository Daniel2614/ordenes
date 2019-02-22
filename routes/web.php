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

Route::GET('/',  [ 'uses' => 'HomeController@root' ]);

//Route::get('/orden/{id}','OrdenesDePagoController@orden')->name('ordenpago');

//Route::get('/ordenesTable', 'OrdenesDePagoController@ordenes')->name('ordenes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Catalogos/editCT/{id}','CentroTrabController@edit')->name('ct.edit');
Route::put('/Catalogos/updateCT/{id}','CentroTrabController@update')->name('ct.update');
Route::get('/ordenes/getProgramaPresupuestal/{id}','OrdenesDePagoController@get_pp')->name('ordenes.get_pp');
Route::get('/ordenes/getObjetoGasto/{id}','OrdenesDePagoController@get_og')->name('ordenes.get_og');
Route::get('/departamentos', 'CentroTrabController@index')->name('departamentos');
Route::resource('ordenes','OrdenesDePagoController');