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
//Route::resource('products', 'ProductController');
//Route::post('/products/consulta', 'ProductController@consulta');
//Route::post('/products/store', 'ProductController@store');
//Route::post('/products/remove', 'ProductController@remove');
 

// Route::get('/home', 'HomeController@index')->name('home'); 

Route::resource('agendas', 'agenda\AgendaController'); 

Route::get('agendaDelDia/{user_id}', 'agenda\AgendaController@agendaDelDia')->name('agendaDelDia');
// Route::get('agendaMedico/{medico_id}', 'agenda\AgendaController@agendaDelDia')->name('agendaMedico');
Route::match(['get', 'post'], 'agendaMedico/{medico_id}', 'agenda\AgendaController@agendaMedico')->name('agendaMedico'); 
Route::match(['get', 'post'], 'actualizarAgenda', 'agenda\AgendaController@actualizarAgenda')->name('actualizarAgenda'); 

// Route::get('perfilaccions/submodulos2/{id}', 'Perfiles\PerfilaccionController@getSubModulos2');