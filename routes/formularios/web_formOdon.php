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

Route::match(['get', 'post'], 'getDiagnosticosPacientePreDef/{paciente_id}', 'formularios\FromOdontController@getDiagnosticosPacientePreDef')->name('fromOdonts.diagnosticos.predef.paciente'); 
Route::match(['get', 'post'], 'diagosticopredefxId/{id}', 'formularios\FromOdontController@diagosticopredefxId')->name('fromOdonts.diagnosticos.predef.xid'); 
Route::match(['get', 'post'], 'guardarDiagnostico/', 'formularios\FromOdontController@guardarDiagnostico')->name('fromOdonts.guardardiagnostico'); 
Route::match(['get', 'post'], 'autocompletarCie10/', 'formularios\FromOdontController@autocompletarCie10')->name('fromOdonts.autocompletar.cie10'); 
Route::match(['get', 'post'], 'actualizarDiagnosticoPreDef/', 'formularios\FromOdontController@actualizarDiagnosticoPreDef')->name('fromOdonts.actualizardiagnosticopredef'); 
