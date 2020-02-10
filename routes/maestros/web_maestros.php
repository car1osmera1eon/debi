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

Route::resource('products', 'ProductController');
//Route::post('/products/consulta', 'ProductController@consulta');
//Route::post('/products/store', 'ProductController@store');
//Route::post('/products/remove', 'ProductController@remove'); 

Route::resource('mTipoIdentificacions', 'M_tipo_identificacionController');

Route::resource('mPais', 'M_paisController');Route::resource('mProvincias', 'M_provinciaController');

Route::resource('mCantons', 'M_cantonController');

Route::resource('mParroquias', 'M_parroquiaController');

Route::resource('mPacientes', 'M_pacienteController');

Route::get('mPacientes/cantones/{id}', 'M_pacienteController@getCantones'); 

Route::get('mPacientes/parroquias/{id}', 'M_pacienteController@getParroquias'); 

Route::resource('mClinicas', 'M_clinicaController');