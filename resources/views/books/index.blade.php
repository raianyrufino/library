@extends('layout')

@section('cabecalho')
    Books
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a class="btn btn-primary mb-2" href="{{ route('show_library') }}"> Back Library</a>
<a href="{{ route('form_create_book') }}" class="btn btn-dark mb-2">Create Book</a>


<ul class="list-group">
    
    @foreach($books as $book)
    <li class="list-group-item d-flex justify-content-between align-items-center">
       <b> {{ $book->title }} </b>
        <form method="post" action="/library/books/{{ $book->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($book->title) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"> Delete
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
        <a href="{{ route('form_create_book', $book->id)  }}" class="btn btn-warning">Update</a>
        <a href="{{ route('show_book', $book->id) }}" class="btn btn-primary">View</a>
    </li>
    @endforeach
</ul>
@endsection