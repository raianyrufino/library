@extends('layout')

@section('cabecalho')
    Create Author
@endsection

@section('conteudo')
    <form method="POST"  action="{{ $author ? '/library/authors/update' :'/library/authors/save' }}">
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

            <label for="genre">Genres</label>
            <select multiple name="generos[]" id="">
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

        <a class="btn btn-primary" href="{{ route('show_authors') }}"> Back</a>
        <button class="btn btn-primary">Create</button>
    </form>

    
@endsection