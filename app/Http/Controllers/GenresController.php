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

    public function create($id=null){
        if(!is_null($id)){
            $genre = Genre::findOrFail($id);
            return view('genres.create', compact('id', 'genre'));
        }
        $genre = null;
        //return view('genres.create', compact('id', 'genre'));
    }

    public function store(Request $request){
        $genre = Genre::create($request->all());
        $request->session()
            ->flash(
                'message',
                "Genre {$genre->id} successfully created {$genre->name}"
            );
        //return redirect()->route('show_genres');
    }

    public function read($id){
        $genre = Genre::findOrFail($id);
        return view('genres.read', compact('id', 'genre'));
    }

    
}
