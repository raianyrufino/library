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
                <strong>Title:</strong>
                {{ $book->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genre:</strong>
                {{ $book->genre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>About:</strong>
                {{ $book->about }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Edition:</strong>
                {{ $book->edition }} 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                {{ $book->author->name }} 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('show_books') }}"> Back</a>
        </div>
    </div>
@endsection