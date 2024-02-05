@extends('layouts.plantilla')


@section('contenido')

<a href="{{ route('nota.index') }}">indexx</a>

  <form action="{{ route('nota.guardar') }}" method="POST">
     @csrf
      <label>titulo</label>
      <input type="text" name ="titulo">

      <label>descripcion</label>
      <input type="text" name ="descripcion">
   <input type="submit" value="crear">

  </form>





@endsection








