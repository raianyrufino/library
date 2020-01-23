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

// Library routers
Route::get('/library', 'LibraryController@index')->name('show_library');

//Author routers
Route::get('/authors', 'AuthorsController@index')->name('show_authors');
Route::get('/authors/form/{id?}', 'AuthorsController@create')->name('form_create_author');
Route::post('/authors/save', 'AuthorsController@store')->name('save_author');
Route::put('/authors/update', 'AuthorsController@update')->name('update_author');
Route::get('/authors/read/{id?}', 'AuthorsController@read')->name('show_author');
Route::delete('/authors/{id?}', 'AuthorsController@delete')->name('delete_author');

Route::get('/booksAuthor/{id?}', 'AuthorsController@books')->name('show_books_author');

//Books routers
Route::get('/books', 'BooksController@index')->name('show_books');
Route::get('/books/form/{id?}', 'BooksController@create')->name('form_create_book');
Route::post('/books/save', 'BooksController@store')->name('save_book');
Route::put('/books/update', 'BooksController@update')->name('update_book');
Route::get('/books/read/{id?}', 'BooksController@read')->name('show_book');
Route::delete('/books/{id?}', 'BooksController@delete')->name('delete_book');