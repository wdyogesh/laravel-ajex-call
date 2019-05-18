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

Route::resource('ajax-crud', 'AjexCrudController');

Route::post('ajax-crud/update', 'AjexCrudController@update')->name('ajax-crud.update');

Route::get('ajax-crud/destroy/{id}', 'AjexCrudController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/threads', 'ThreadController@index');
Route::get('/thread/{thread}', 'ThreadController@show');

Route::post('/thread/{thread}/replies', 'ReplyController@store');