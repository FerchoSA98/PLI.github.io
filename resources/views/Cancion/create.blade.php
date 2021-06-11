@extends('adminlte::page')

@section('title', 'Nueva Cancion')

@section('content_header')
    <h1>Nueva Cancion</h1>
@stop

@section('content')

    <form action="/cancions" method="POST">
        @csrf
    <div class="mb-3">
        <label for="" class="form-label">Cancion</label>
        <input type="text" class="form-control" id="cancion" name="cancion" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Artista</label>
        <input type="text" class="form-control" id="artista" name="artista" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Album</label>
        <input type="text" class="form-control" id="album" name="album" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Link</label>
        <input type="text" class="form-control" id="link" name="link" tabindex="4">
    </div>
        <a href="/cancions" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
