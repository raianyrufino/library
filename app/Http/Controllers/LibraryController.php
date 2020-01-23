<?php

namespace App\Http\Controllers;
use App\Author;
use App\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller{

    public function index(){
        $authors = Author::all()->sortBy('name');
        $books = Book::all()->sortBy('title');
        return view('library', compact('authors', 'books'));
    }

}