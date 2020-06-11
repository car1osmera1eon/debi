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
    $empresa            = \App\Models\maestros\M_clinica::find(1);
    $procedimientos     = \App\Models\maestros\M_procedimiento::limit(4)->get();
    $allprocedimientos  = \App\Models\maestros\M_procedimiento::limit(6)->get();

    return view('sitio/index', compact('empresa','procedimientos','allprocedimientos'));
})->name('index');

//Route::resource('products', 'ProductController');
//Route::post('/products/consulta', 'ProductController@consulta');
//Route::post('/products/store', 'ProductController@store');
//Route::post('/products/remove', 'ProductController@remove');
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UsuarioController');

Route::get('usuarios/ver/{id}', 'UsuarioController@ver')->name('usuarios.ver');

Route::get('usuarios/editar/{id}', 'UsuarioController@editar')->name('usuarios.editar');

Route::match(['get', 'post'], 'usuarios/actualizar/{id}', 'UsuarioController@actualizar')->name('usuarios.actualizar'); 

Route::resource('perfils', 'Perfiles\PerfilController');

Route::resource('permisos', 'Perfiles\PermisosController');

Route::resource('perfilaccions', 'Perfiles\PerfilaccionController');

Route::get('perfilaccions/submodulos/{id}', 'Perfiles\PerfilaccionController@getSubModulos');

Route::get('perfilaccions/submodulos2/{id}', 'Perfiles\PerfilaccionController@getSubModulos2');