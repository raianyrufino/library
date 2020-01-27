@extends('layout')

@section('cabecalho')
    Authors
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a class="btn btn-primary mb-2" href="{{ route('show_genres') }}"> Back</a>
<a href="{{ route('form_create_author') }}" class="btn btn-dark mb-2">Create author</a>


<ul class="list-group">
    
    @foreach($authors as $author)
    <li class="list-group-item d-flex justify-content-between align-items-center">
       <b> {{ $author->name }} </b>
        <form method="post" action="/Library/authorsGenre/{{ $genre->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($author->name) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"> Delete
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
        <a href="{{ route('form_create_author', $author->id)  }}" class="btn btn-warning">Update</a>
        <a href="{{ route('show_author', $author->id)  }}" class="btn btn-primary">View</a>
    </li>
    @endforeach
</ul>
@endsection