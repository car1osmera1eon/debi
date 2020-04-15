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

Route::resource('agendas', 'agenda\AgendaController'); 

Route::get('agendaDelDia/{user_id}', 'agenda\AgendaController@agendaDelDia')->name('agendaDelDia');
// Route::get('agendaMedico/{medico_id}', 'agenda\AgendaController@agendaDelDia')->name('agendaMedico');
Route::match(['get', 'post'], 'agendaMedico/{medico_id}', 'agenda\AgendaController@agendaMedico')->name('agendaMedico'); 
Route::match(['get', 'post'], 'actualizarAgenda', 'agenda\AgendaController@actualizarAgenda')->name('actualizarAgenda'); 
Route::match(['get', 'post'], 'crearAgenda/{fechaini}/{fechafin}', 'agenda\AgendaController@crearAgenda')->name('crearAgenda');


Route::resource('horarioMedicos', 'Agenda\HorarioMedicoController');

Route::match(['get', 'post'], 'horarioMedico/{medico_id}', 'agenda\HorarioMedicoController@horarioMedico')->name('horarioMedico'); 
Route::match(['get', 'post'], 'getHorarioMedico/{medico_id}', 'agenda\HorarioMedicoController@getHorarioMedico')->name('getHorarioMedico'); 
Route::match(['get', 'post'], 'crearHorario/{ndia}/{horaini}', 'agenda\HorarioMedicoController@crearHorario')->name('crearHorario');
Route::match(['get', 'post'], 'actualizarHorarioMedico', 'agenda\HorarioMedicoController@actualizarHorarioMedico')->name('actualizarHorarioMedico');