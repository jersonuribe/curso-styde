
@extends('layout')

    
@section('content')

 
@section('title', "Listado de usuarios")

  
     @unless(empty($users))

    <ul>

        @foreach($users as $user)

            <li>{{$user}}</li>

        @endforeach

    </ul> 

    @else

        <p>No hay usuarios registrados.</p>

    @endif 

@endsection


@section('sidebar')

    @parent
    
    <h2>Barra lateral personalizada</h2>

@endsection
