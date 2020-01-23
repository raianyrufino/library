@extends('layout')

@section('cabecalho')
    Create Author
@endsection

@section('conteudo')
    <form method="POST"  action="{{ $author ? '/authors/update' :'/authors/save' }}">
        @csrf
        <div class="form-group">

            @if (!is_null($id))
                @method('PUT')
                <input type="hidden" value="{{ $id }}" name="id">
            @endif

            <label for="nome">Name</label>
            <input type="text" class="form-control" value="{{$author ? $author->name : '' }}" name="name" id="name">

            <label for="nome">Surname</label>
            <input type="text" class="form-control" value="{{$author ? $author->surname : '' }}" name="surname" id="surname">

            <label for="nome">Genre</label>
            <input type="text" class="form-control" value="{{$author ? $author->genre : '' }}" name="genre" id="genre">
        </div>

        <a class="btn btn-primary" href="{{ route('show_books') }}"> Back</a>
        <button class="btn btn-primary">Create</button>
    </form>

    
@endsection