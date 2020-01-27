<?php

namespace App\Http\Controllers;
use App\{Author, Book, Genre};
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    
    public function index(){
        $authors = Author::all()->sortBy('name');
        return view('authors.index', compact('authors'));
    } 

    public function create($id=null){
        $genres = Genre::all();
        if(!is_null($id)){
            $author = Author::findOrFail($id);
            return view('authors.create', compact('id', 'author', 'genres'));
        }
        $author = null;
        return view('authors.create', compact('id', 'author', 'genres'));
    }

    public function store(Request $request){
        $generos = $request->generos;
        
        $author = Author::create($request->except('generos'));

        foreach ($generos as $genero) {
            $author->genres()->attach($genero);
        }
        $request->session()
            ->flash(
                'mensage',
                "Author {$author->id} successfully created {$author->name}"
            );
        return redirect()->route('show_authors');
    }

    public function read($id){
        $author = Author::findOrFail($id);
        return view('authors.read', compact('id', 'author'));
    }

    public function update(Request $request){
        $id = $request->id;
        $author = Author::findOrFail($id);
        $generos = $request->generos;
        
        foreach ($generos as $genero) {
            $author->genres()->attach($genero);
        }
        
        $author->update($request->all());
        return redirect()->route('show_authors')->with('message', 'Author updated sucessfully');
    }

    public function delete($id){
        $author = Author::findOrFail($id);
        $author->books->each(function (Book $book){
            $book->delete();
        });
        
        $author->delete();
        return redirect()->route('show_authors')->with('alert-success','Author hasbeen deleted!');
    }

    public function books($id){
        $author = Author::findOrFail($id);
        $books = $author->books;

        return view('authors.readBooks', compact('id', 'author','books'));
    }
}
