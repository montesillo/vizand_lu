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

Route::get('newclient', function () {
    return view('clients/new_client');
});

Route::get('newstylits', function () {
    return view('stylists/new_stylist');
});

Route::get('newcategories', function () {
    return view('categories/new_categories');
});

Route::get('calendar', function () {
    return view('calendar/calendar');
});

Route::resource('evento','EventoController');
Route::get('api','EventoController@api'); //ruta que nos devuelve los eventos en formato json
Route::get('eliminar','EventoController@api');

Route::resource('clients', 'ClientsController');
Route::resource('stylists', 'StylistsController');
Route::resource('services', 'ServicesController');
Route::resource('view', 'ViewController');

Route::resource('citations', 'CitationsController');
Route::resource('impromptu', 'ImpromptuController');
Route::resource('eliminar', 'EliminarController');