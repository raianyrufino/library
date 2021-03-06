@extends('layout')

@section('cabecalho')
    Create Book
@endsection

@section('conteudo')
    <form method="POST"  action="{{ $book ? '/library/books/update' :'/library/books/save' }}">
        @csrf
        <div class="form-group">

            @if (!is_null($id))
                @method('PUT')
                <input type="hidden" value="{{ $id }}" name="id">
            @endif

            <label for="nome">Title</label>
            <input type="text" class="form-control" value="{{$book ? $book->title : '' }}" name="title" id="book">


            <label for="nome">About</label>
            <input type="text" class="form-control" value="{{$book ? $book->about : '' }}" name="about" id="about">

            <label for="nome">Edition</label>
            <input type="text" class="form-control" value="{{$book ? $book->edition : '' }}" name="edition" id="edition">
            
            <label for="genre">Genres</label>
            <select multiple name="generos[]" id="">
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
            
            <label for="author">Authors</label>
            <select name="author_id" id="">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>

        </div>
        
        <a class="btn btn-primary" href="{{ route('show_books') }}"> Back</a>
        <button class="btn btn-primary">Create</button>
    </form>

    
@endsection