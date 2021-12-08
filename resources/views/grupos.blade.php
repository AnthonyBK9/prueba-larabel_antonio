@extends('layout')
@section('title','Grupo')
@section('content')
        <h1>Grupos </h1>
        <hr>
        <ul>
            @foreach ($grupos as $grupo )
                <li>Periodo: {{$grupo['periodo']}} Grupo: {{$grupo['grupo']}}</li>
            @endforeach
        </ul>
@endsection