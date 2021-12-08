@extends('layout')
@section('content')
        <hr>
        <h1>Hola {{$nombre ?? 'invitado'}} </h1>
        <ul>
                @isset($proyectos)
                        @if ($proyectos)
                                @foreach ( $proyectos as $proyecto)
                                        <li>{{$proyecto['title']}}</li>
                                @endforeach
                        @else
                        @endif
                         @else
                        <li>No existe la variables</li>
                @endisset         
               
                
        </ul>
@endsection