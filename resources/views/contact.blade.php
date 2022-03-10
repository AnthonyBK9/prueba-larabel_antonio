@extends('layout')
@section('content')
        <h1>Contactanos </h1>
        <hr>
        <form class="form" action="{{route('contacto.send')}}" method="POST">
                @csrf
                <input type="text" name="nombre" placeholder="Nombre..." value="{{old('nombre')}}"><br><br>
                <input type="email" name="email" placeholder="Correo..." value="{{old('email')}}"><br><br>
                <input type="text" name="asunto" placeholder="Asunto" value="{{old('asunto')}}" ><br><br>
                <input type="text" name="mensaje" placeholder="Mensaje..." value="{{old('mensaje')}}" ><br><br>
                <button class="button button-primary">Enviar</button>
                <br>
                @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <li class="error">{{$error}}</li>
                                
                        @endforeach                        
                @endif
        </form>
@endsection
      