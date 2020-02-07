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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');
//Route::post('/products/consulta', 'ProductController@consulta');
//Route::post('/products/store', 'ProductController@store');
//Route::post('/products/remove', 'ProductController@remove');
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('usuarios', 'UsuarioController');
Route::resource('especialidads', 'EspecialidadController');

Route::get('usuarios/ver/{id}', 'UsuarioController@ver')->name('usuarios.ver');
Route::get('usuarios/editar/{id}', 'UsuarioController@editar')->name('usuarios.editar');
Route::match(['get', 'post'], 'usuarios/actualizar/{id}', 'UsuarioController@actualizar')->name('usuarios.actualizar'); 

Route::resource('perfils', 'PerfilController');

Route::resource('permisos', 'PermisosController');

Route::resource('perfilaccions', 'PerfilaccionController');
Route::get('perfilaccions/submodulos/{id}', 'PerfilaccionController@getSubModulos');
Route::get('perfilaccions/submodulos2/{id}', 'PerfilaccionController@getSubModulos2');