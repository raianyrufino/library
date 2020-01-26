<?php

namespace App\Http\Controllers;
use App\{Author, Book, Genre};
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index(){
        $genres = Genre::all()->sortBy('name');
        //return view('genres.index', compact('genres'));
    }
}
