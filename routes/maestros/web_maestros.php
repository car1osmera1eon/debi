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
Route::resource('especialidads', 'maestros\EspecialidadController');

//Route::resource('products', 'maestros\ProductController'); 

Route::resource('mTipoIdentificacions', 'maestros\M_tipo_identificacionController');

Route::resource('mPais', 'maestros\M_paisController');

Route::resource('mProvincias', 'maestros\M_provinciaController');

Route::resource('mCantons', 'maestros\M_cantonController');

Route::resource('mParroquias', 'maestros\M_parroquiaController');

Route::resource('mPacientes', 'maestros\M_pacienteController');

Route::get('mPacientes/cantones/{id}', 'maestros\M_pacienteController@getCantones'); 

Route::get('mPacientes/parroquias/{id}', 'maestros\M_pacienteController@getParroquias'); 

Route::resource('mClinicas', 'maestros\M_clinicaController');

Route::resource('mMedicos', 'maestros\M_medicoController');

Route::resource('mProcedimientos', 'maestros\M_procedimientoController');

Route::resource('mConsultorios', 'maestros\M_consultorioController');

Route::resource('mCategorias', 'maestros\M_categoriaController');

Route::resource('formOdonDiagPacis', 'Maestros\FormOdonDiagPaciController');