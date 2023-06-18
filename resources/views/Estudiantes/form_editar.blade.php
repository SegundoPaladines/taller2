@extends('adminlte::page')

@section('title', 'Registrar Estudiante')

@section('content_header')
    <h1>Registrar un Estudiante</h1>
@stop

@section('content')
    <form action="{{route('edit_est', $id)}}" method= "POST">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $id }}">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $nom }}">
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad" value="{{ $edad }}">
        </div>
        <div class="mb-3">
            <label for="f_nac" class="form-label">Fecha Nacimiento</label>
            <input type="text" class="form-control" id="f_nac" name="f_nac" value="{{ $fecha }}">
        </div>
        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-control" name="sexo">
                <option value="M" {{ $sex == 'M'? 'selected' : '' }}>M</option> 
                <option value="F" {{ $sex == 'F'? 'selected' : '' }}>F</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <select class="form-control" name="ciudad">
                @foreach($ciudades as $c)
                    <option value="{{$c->codciudad}}" {{ $c->codciudad == $ciu? 'selected' : '' }}>{{$c->nomcuidad}}</option>   
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="barrio" class="form-label">Barrio</label>
            <select class="form-control" name="barrio">
                @foreach($barrios as $b)
                    <option value="{{$b->codbarrio}}" {{ $b->codbarrio == $bar? 'selected' : '' }}>{{$b->nombarrio}}</option>   
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="programa" class="form-label">Programa</label>
            <select class="form-control" name="programa">
                @foreach($programas as $p)
                    <option value="{{$p->codprograma}}" {{ $p->codprograma == $prog? 'selected' : '' }}>{{$p->nomprograma}}</option>   
                @endforeach
            </select>
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