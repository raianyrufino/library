@extends('layout')

@section('cabecalho')
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">       
                <h2>Details</h2>
            </div>
        </div>
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $genre->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $genre->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Authors Number:</strong>
                {{ $genre->authors->count() }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Books Number:</strong>
                {{ $genre->books->count() }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('show_genres') }}"> Back</a>
        </div>
    </div>
@endsection