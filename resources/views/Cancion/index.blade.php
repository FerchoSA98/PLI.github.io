@extends('adminlte::page')

@section('title', 'Playlist')

@section('content_header')
    <h1>Playlist</h1>
@stop

@section('content')
<a href="cancions/create" class="btn btn-primary mb-3">Crear</a>

<table id="canciones" class="table table-dark table-striped shadow-lg mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cancion</th>
            <th scope="col">Artista</th>
            <th scope="col">Album</th>
            <th scope="col">Link</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($canciones as $cancion)
        <tr>    
            <td>{{ $cancion->id}}</td>
            <td>{{ $cancion->Cancion}}</td>
            <td>{{ $cancion->Artista}}</td>
            <td>{{ $cancion->Album}}</td>
            <td>{{ $cancion->Link}}</td>
            <td>
            <form action="{{route ('cancions.destroy', $cancion->id)}}" method="POST">
            <a href="/cancions/{{$cancion->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#canciones').DataTable();
    } );
    </script>
@stop