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

Route::resource('fromOdonts', 'formularios\FromOdontController');
Route::match(['get', 'post'], 'formOdontPaciente/{paciente_id}', 'formularios\FromOdontController@formOdontPaciente')->name('fromOdonts.paciente'); 