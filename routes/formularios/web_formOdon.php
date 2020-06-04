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
Route::match(['get', 'post'], 'getDiagnosticosPaciente/{paciente_id}', 'formularios\FromOdontController@getDiagnosticosPaciente')->name('fromOdonts.diagnosticos.paciente'); 
Route::match(['get', 'post'], 'diagosticoxId/{id}', 'formularios\FromOdontController@diagosticoxId')->name('fromOdonts.diagnosticos.xid'); 
Route::match(['get', 'post'], 'actualizarDiagnostico/', 'formularios\FromOdontController@actualizarDiagnostico')->name('fromOdonts.actualizardiagnostico'); 
Route::match(['get', 'post'], 'eliminarDiagnostico/', 'formularios\FromOdontController@eliminarDiagnostico')->name('fromOdonts.eliminardiagnostico'); 
