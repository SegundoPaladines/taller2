@extends('adminlte::page')

@section('title', 'Editar Profesor')

@section('content_header')
    <h1>Editar Profesor</h1>
@stop

@section('content')
    <form action="{{route('edit_prof', $id)}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $id }}">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $nombre }}">
        </div>
        <div class="mb-3">
            <label for="catedra" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="catedra" name="catedra" value="{{ $cat }}">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop