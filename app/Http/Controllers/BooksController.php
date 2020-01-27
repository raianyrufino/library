<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Book, Author, Genre};

class BooksController extends Controller
{
    
    public function index(){
        $books = Book::all()->sortBy('title');
        return view('books.index', compact('books'));
    } 

    public function create($id=null){
        $genres = Genre::all();
        $authors = Author::all();
        if(!is_null($id)){
            $book = Book::findOrFail($id);
            return view('books.create', compact('id', 'book', 'authors', 'genres'));
        }
        $book = null;
        return view('books.create', compact('id', 'book', 'authors', 'genres'));
    }

    public function store(Request $request){
        $generos = $request->generos;        
        $book = Book::create($request->except('generos'));
       
        if ($generos) {
            foreach ($generos as $genero) {
                $book->genres()->attach($genero);
            }
        }
        
        $request->session()
            ->flash(
                'mensage',
                "Book {$book->id} successfully created {$book->title}"
            );
            $id = $book->id;
        return view('books.read', compact('id', 'book')); 
        # aqui seria melhor mandar pra view de lista, pode ser 1 redirect mesmo
        #return redirect()->route('show_book',['id' => $book->id]);
    }
    
    public function read($id){
        $book = Book::findOrFail($id);
        return view('books.read', compact('id', 'book'));
    }

    public function update(Request $request) 
    {
        $id = $request->id;
        $book = Book::findOrFail($id);
        $generos = $request->generos;
        
        if ($generos) {
            $book->genres()->detach();
            
            foreach ($generos as $genero) {
                $book->genres()->attach($genero);
            }
        }

        $book->update($request->all());
        # aqui preferia mandar pro view de lsitagem de livros, com a mensagem, algo assim
        return redirect()->route('show_books')->with('message', "Book: $book->name was updated sucessfully");
    }

    public function delete($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('show_books')->with('alert-success','Book hasbeen deleted!');
    }
}
