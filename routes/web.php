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
Route::get('/authors', 'AuthorsController@index')->name('show_authors');
Route::get('/authors/form/{id?}', 'AuthorsController@create')->name('form_create_author');
Route::post('/authors/save', 'AuthorsController@store')->name('save_author');
Route::put('/authors/update', 'AuthorsController@update')->name('update_author');
Route::get('/authors/read/{id?}', 'AuthorsController@read')->name('show_author');
Route::delete('/authors/{id?}', 'AuthorsController@delete')->name('delete_author');

