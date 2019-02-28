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
    return view('auth/login');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('administracion/usuarios', 'UsuariosController');

	Route::get('/documentos/plantillas/area/{id}', 'PlantillasController@index')->name('plantillasAreas');
	Route::get('/documentos/plantillas/create/{id}', 'PlantillasController@create');
	Route::resource('/documentos/plantillas', 'PlantillasController');
    Route::get('/fileplantillas/download/{id}','PlantillasController@file')->name('downloadfilePlantillas');

	Route::get('documentos/procedimientos/area/{id}', 'ProcedimientosController@index')->name('procedimientosAreas');
	Route::get('documentos/procedimientos/create/{id}', 'ProcedimientosController@create');
    Route::resource('documentos/procedimientos', 'ProcedimientosController');
    Route::get('/fileprocedimientos/download/{id}','ProcedimientosController@file')->name('downloadfileProcedimientos');

	Route::get('documentos/miscelaneos/area/{id}', 'MiscelaneosController@index')->name('miscelaneosAreas');
	Route::get('documentos/miscelaneos/create/{id}', 'MiscelaneosController@create');
	Route::resource('documentos/miscelaneos', 'MiscelaneosController');
	Route::get('/filemiscelaneos/download/{id}','MiscelaneosController@file')->name('downloadfileMiscelaneos');

	Route::resource('proyectos', 'ProyectosController');
    Route::get('/fileproyectos/download/{id}','ProyectosController@file')->name('downloadfileProyectos');
    
	Route::resource('actividades', 'ActividadesController');


});



