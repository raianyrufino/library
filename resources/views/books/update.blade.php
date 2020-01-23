@extends('layout')

@section('cabecalho')
    Update Book
@endsection

@section('conteudo')
    <form action="{{ route('books/update',$book->id) }}" method="POST">
    @csrf
    @method('PUT')

 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" value="{{ $book->title }}" class="form-control" placeholder="title">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Genre:</strong>
            <textarea class="form-control" style="height:150px" name="genre" placeholder="genre">{{ $book->genre }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection