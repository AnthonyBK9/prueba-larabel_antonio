@extends('layout')
@section('title','Grupo')
@section('content')
        <h1>Grupos </h1>
        <hr>
        <form action="{{route('grupos.store')}}" method="post">
            @csrf   
            <label for="periodo_id">Periodo</label><br>
            <input type="text" name="periodo_id" id="periodo_id"><br>
            <label for="materia_id">Materia</label><br>
            <input type="text" name="materia_id" id="materia_id"><br>
            <label for="clave_curso">Curso</label><br>
            <input type="text" name="clave_curso" id="clave_curso"><br>
            <label for="observaciones">Observaciones</label><br>
            <textarea type="text" name="observaciones" id="observaciones" cols="30" rows="10"></textarea><br>
            <button type="submit" name="">Agregar</button><br>
        </form>
        <ul>
            @foreach ($grupos as $grupo )
                <li>Periodo: {{$grupo->periodo_id}} Grupo: {{$grupo->materia_id}} curso: {{$grupo->clave_curso}}</li>
            @endforeach
        </ul>
@endsection