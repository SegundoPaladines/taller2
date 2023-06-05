@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Registrar una Facultad</h1>
@stop

@section('content')
    <form>
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop