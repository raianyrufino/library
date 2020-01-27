@extends('layout')

@section('cabecalho')
    Library
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<!--
<div>
<a href="{{ route('form_create_author') }}" class="btn btn-dark mb-2">Create Author</a>
<a href="{{ route('form_create_book') }}" class="btn btn-dark mb-2">Create Book</a>
</div>
-->

<div>
<a href="{{ route('show_authors') }}" class="btn btn-dark mb-2">Show Authors</a>
<a href="{{ route('show_books') }}" class="btn btn-dark mb-2">Show Books</a>
<a href="{{ route('show_genres') }}" class="btn btn-dark mb-2">Show Genres</a>
</div>

@endsection