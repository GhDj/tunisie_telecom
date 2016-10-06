<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function () {

    Route::resource('client', 'ClientController');

    Route::resource('materiel', 'MaterielController');

    Route::get('/supp', 'ClientController@supprimer')->name('client.supp');

    Route::post('client/delete', 'ClientController@delete')->name('client.delete');

    Route::resource('order', 'OrderController');

});