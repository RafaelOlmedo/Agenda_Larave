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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contatos', 'ContatosController@index');
// Route::get('/contatos/add', 'ContatosController@create');
// Route::post('/contatos/store', 'ContatosController@store');



// Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
// Route::group('middlware')

// Auth::routes();
// Route::get('/', 'HomeController@index')->name('home');
// Route::group(['middleware'=>'auth', 'prefix'=>'contatos'], function() {
//     Route::get('/', 'ContatoController@index');
//     Route::get('/add', 'ContatoController@create');
//     Route::post('/', 'ContatoController@store');
//     Route::get('{id}', 'ContatoController@show');
//     Route::get('/edit/{id}', 'ContatoController@edit');
//     Route::put('{id}', 'ContatoController@update');
//     Route::delete('{id}', 'ContatoController@destroy');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth', 'prefix'=>'contatos'], function(){
    Route::get('/', 'ContatoController@index');
    Route::get('/add', 'ContatoController@create');
    Route::post('/', 'ContatoController@store');
    Route::get('{id}', 'ContatoController@show');
    Route::get('/edit/{id}', 'ContatoController@edit');
    Route::put('{id}', 'ContatoController@update');
    Route::delete('{id}', 'ContatoController@destroy');

});
