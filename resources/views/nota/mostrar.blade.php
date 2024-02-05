@extends('layouts.plantilla')




@section('contenido')

<a href="{{ route('nota.index') }}">indexx</a>

<h1>{{$nota->titulo}}</h1>
<h2>{{$nota->descripcion}}</h2>

@endsection