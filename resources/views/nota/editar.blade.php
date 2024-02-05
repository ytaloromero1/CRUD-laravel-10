@extends('layouts.plantilla')




@section('contenido')

<a href="{{ route('nota.index') }}">indexx</a>

  <form action="{{ route('nota.actualizar' , [ 'nota_id' => $nota->id]  )  }}" method="POST">


    @method('PUT')
     @csrf
      <label>titulo</label>
      <input type="text" name ="titulo"value ="{{ $nota->titulo }}">

      <label>descripcion</label>
      <input type="text" name ="descripcion" value ="{{ $nota->descripcion}}">


      <input type="submit" value="actualizar">


      
  </form>



@endsection



