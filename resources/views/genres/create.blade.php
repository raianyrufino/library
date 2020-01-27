@extends('layout')

@section('cabecalho')
    Create Genre
@endsection

@section('conteudo')
    <form method="POST"  action="{{ $genre ? '/library/genres/update' :'/library/genres/save' }}">
        @csrf
        <div class="form-group">

            @if (!is_null($id))
                @method('PUT')
                <input type="hidden" value="{{ $id }}" name="id">
            @endif

            <label for="nome">Name</label>
            <input type="text" class="form-control" value="{{$genre ? $genre->name : '' }}" name="name" id="genre">

        
        </div>
        
        <a class="btn btn-primary" href="{{ route('show_genres') }}"> Back</a>
        <button class="btn btn-primary">Create</button>
    </form>

    
@endsection