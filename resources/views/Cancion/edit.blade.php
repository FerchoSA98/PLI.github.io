@extends('adminlte::page')

@section('title', 'Editar Cancion')

@section('content_header')
    <h1>Editar cancion {{$cancion->id}}</h1>
@stop

@section('content')
    <form action="/cancions/{{$cancion->id}}" method="POST">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Cancion</label>
        <input type="text" class="form-control" id="cancion" name="cancion" value="{{$cancion->Cancion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Artista</label>
        <input type="text" class="form-control" id="artista" name="artista" value="{{$cancion->Artista}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Album</label>
        <input type="text" class="form-control" id="album" name="album" value="{{$cancion->Album}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Link</label>
        <input type="text" class="form-control" id="link" name="link" value="{{$cancion->Link}}">
    </div>
        <a href="/cancions" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
