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
                {{ $author->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $author->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Surname:</strong>
                {{ $author->surname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genre:</strong>
                {{ $author->genre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Books Number:</strong>
                {{ $author->books->count() }} 
            </div>
        </div>
    </div>

    


    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary mb-2" href="{{ route('show_authors') }}"> Back</a>
        </div>
    </div>
@endsection