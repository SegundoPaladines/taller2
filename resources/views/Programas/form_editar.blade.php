@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Editar Programa</h1>
@stop

@section('content')
    <form action="{{route('edit_prog', $id)}}" method= "POST">
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
            <label for="facultades" class="form-label">Facultad</label>
            <select class="form-control" name="facultades">
                @foreach($facultades as $f)
                    <option value="{{$f->codfacultad}}" {{ $f->codfacultad == $fac? 'selected' : '' }}>{{$f->nomfacultad}}</option>   
                @endforeach
            </select>
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