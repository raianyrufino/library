<?php

namespace App\Http\Controllers;
use App\{Author, Book};
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    
    public function index(){
        $authors = Author::all()->sortBy('name');
        return view('authors.index', compact('authors'));
    } 

    public function create($id=null){
        if(!is_null($id)){
            $author = Author::findOrFail($id);
            return view('authors.create', compact('id', 'author'));
        }
        $author = null;
        return view('authors.create', compact('id', 'author'));
    }

    public function store(Request $request){
        $author = Author::create($request->all());
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
        $author->update($request->all());
        return redirect()->route('show_authors')->with('message', 'Author updated sucessfully');
    }

    public function delete($id){
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('show_authors')->with('alert-success','Author hasbeen deleted!');
    }

    public function books($id){
        $author = Author::findOrFail($id);
        $books = $author->books;

        return view('authors.readBooks', compact('id', 'author','books'));
    }
}
