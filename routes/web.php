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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::middleware(['publications'])->group(function () {
	Route::get('/publications', 'PublicationController@index'); // listado de publicaciones
	Route::get('/publications/create', 'PublicationController@create'); // formulario
	Route::post('/publications/', 'PublicationController@store'); // registrar
	Route::get('/publications/{id}/edit', 'PublicationController@edit'); // formulario edición
	Route::post('/publications/{id}/edit', 'PublicationController@update'); // actualizar
	Route::post('/publications/{id}/delete', 'PublicationController@destroy'); // formulario eliminar


	//Route::get('/publications/{id}/profile', 'PublicationController@profile')->name('publications.profile'); // formulario
	Route::get('/publications/profile', 'PublicationController@profile')->name('publications.profile'); // formulario
//});	