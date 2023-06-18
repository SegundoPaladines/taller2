@extends('adminlte::page')

@section('title', 'Registrar Profesor')

@section('content_header')
    <h1>Registrar una Profesor</h1>
@stop

@section('content')
    <form action="{{route('reg_prof')}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="catedra" class="form-label">Catedra</label>
            <input type="text" class="form-control" id="catedra" name="catedra">
        </div>
        <button type="submit" class="btn btn-success">Agregar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop