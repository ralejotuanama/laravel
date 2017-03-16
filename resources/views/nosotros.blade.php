@extends('master')
@section('titulo','paginade nostros')


@section('contenido')
<h2>vista nosotros</h2>

<h2>mi nombre es {{$nombreenviado}} y el nombre de la empresa donde trabajo es {{$empresa}}</h2>

@if($nombreenviado == 'ronald')
<p>es mi nombre correcto</p>
@else 
<p>no soy yo</p>
@endif
 
@endsection


