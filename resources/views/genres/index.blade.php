@extends('layout')

@section('cabecalho')
    Genres
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a class="btn btn-primary mb-2" href="{{ route('show_library') }}"> Back Library</a>
<a href="{{ route('form_create_genre') }}" class="btn btn-dark mb-2">Create Genre</a>


<ul class="list-group">
    
    @foreach($genres as $genre)
    <li class="list-group-item d-flex justify-content-between align-items-center">
       <b> {{ $genre->name }} </b>
        <form method="post" action="/library/genres/{{ $genre->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($genre->name) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"> Delete
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
        <a href="{{ route('form_create_genre', $genre->id)  }}" class="btn btn-warning">Update</a>
        <a href="{{ route('show_genre', $genre->id) }}" class="btn btn-primary">View</a>
        <a href="{{ route('show_books_genre', $genre->id) }}" class="btn btn-primary">View Books</a>
        <a href="{{ route('show_authors_genre', $genre->id) }}" class="btn btn-primary">View Authors</a>
        
    </li>
    @endforeach
</ul>
@endsection