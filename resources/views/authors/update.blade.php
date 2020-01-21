@extends('layout')

@section('cabecalho')
    Update Author
@endsection

@section('conteudo')
    <form action="{{ route('authors/update',$author->id) }}" method="POST">
    @csrf
    @method('PUT')

 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $author->name }}" class="form-control" placeholder="name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Surname:</strong>
            <textarea class="form-control" style="height:150px" name="surname" placeholder="surname">{{ $author->surname }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection