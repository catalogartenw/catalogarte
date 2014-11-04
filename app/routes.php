<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/','LoginController@inicio');

Route::resource('/login','LoginController');

Route::resource('/logout','LoginController@logout');

Route::resource('admin/museos', 'MuseosController');

Route::resource('admin/museos/cargaImagen', 'MuseosController@cargaImagen');

Route::resource('admin/exposiciones', 'ExposicionesController');

Route::get('muestra/exposiciones', 'MuestraExposicionesController@index');

Route::get('muestra/exposiciones/hojalegal', 'MuestraExposicionesController@hojaLegal');

Route::get('muestra/exposiciones/indice', 'MuestraExposicionesController@indice');

Route::get('muestra/exposiciones/notas', 'MuestraExposicionesController@notas');

Route::get('muestra/exposiciones/articulos', 'MuestraExposicionesController@articulos');

Route::get('muestra/exposiciones/galeria', 'MuestraExposicionesController@galeria');

Route::get('muestra/exposiciones/contraportada', 'MuestraExposicionesController@contraPortada');
