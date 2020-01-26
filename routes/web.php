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
Route::get('/library/authors', 'AuthorsController@index')->name('show_authors');
Route::get('/library/authors/form/{id?}', 'AuthorsController@create')->name('form_create_author');
Route::post('/library/authors/save', 'AuthorsController@store')->name('save_author');
Route::put('/library/authors/update', 'AuthorsController@update')->name('update_author');
Route::get('/library/authors/read/{id?}', 'AuthorsController@read')->name('show_author');
Route::delete('/library/authors/{id?}', 'AuthorsController@delete')->name('delete_author');

Route::get('/library/booksAuthor/{id?}', 'AuthorsController@books')->name('show_books_author');
Route::get('/library/booksAuthor/{id?}', 'AuthorsController@genres')->name('show_genres_author');

//Books routers
Route::get('/library/books', 'BooksController@index')->name('show_books');
Route::get('/library/books/form/{id?}', 'BooksController@create')->name('form_create_book');
Route::post('/library/books/save', 'BooksController@store')->name('save_book');
Route::put('/library/books/update', 'BooksController@update')->name('update_book');
Route::get('/library/books/read/{id?}', 'BooksController@read')->name('show_book');
Route::delete('/library/books/{id?}', 'BooksController@delete')->name('delete_book');

Route::get('/library/genresBook/{id?}', 'BooksController@genres')->name('show_genres_books');

//Genres routers
Route::get('/library/genres', 'GenresController@index')->name('show_genres');
Route::get('/library/genres/form/{id?}', 'GenresController@create')->name('form_create_genre');
Route::post('/library/genres/save', 'GenresController@store')->name('save_genre');
Route::put('/library/genres/update', 'GenresController@update')->name('update_genre');
Route::get('/library/genres/read/{id?}', 'GenresController@read')->name('show_genre');
Route::delete('/library/genres/{id?}', 'GenresController@delete')->name('delete_genre');

Route::get('/library/booksGenre/{id?}', 'GenresController@books')->name('show_books_genres');
Route::get('/library/authorsGenre/{id?}', 'GenresController@authors')->name('show_authors_genres');


