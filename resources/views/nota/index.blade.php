@extends('layouts.plantilla')



@section('contenido')
    <a href="{{ route('nota.crear') }}">Crear nota</a>

    <ul>
        @forelse($notas as $nota)
                <li>
                      <a href="{{ route('nota.mostrar',['nota_id' => $nota->id]) }}">  {{$nota->titulo}}  </a> 

                      | <a href="{{ route('nota.editar',['nota_id' => $nota->id]) }}">Editar</a>



                      
                      <form action="{{ route('nota.eliminar' , [ 'nota_id' => $nota->id]  )  }}" method="POST">
                        @method('DELETE')
                        @csrf
                      | <input type="submit" value="eliminar">

                      </form>




                </li>
            @empty

                <h2>no hay datos</h2>
        
        @endforelse




    </ul>




@endsection
