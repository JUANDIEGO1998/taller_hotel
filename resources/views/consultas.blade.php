@extends('layouts.master')
@section('content')
<h1>CONSULTA D</h1>
     @foreach($datos as $p)
     <h5>Tipo-->{{$p->Tipo}}</h5>
     @endforeach
     <h1>cantidad habitaciones</h1>
     <h5>individual-->{{$total}}</h5>
     <h5>doble de uso individual-->{{$total2}}</h5>
     <h5>doble-->{{$total3}}</h5>
     <h5>triple-->{{$total4}}</h5>
    <h5>cuadruple-->{{$total5}}</h5>
    <h1>CONSULTA A</h1>
    @foreach($total6 as $p)
    <h4>habitaciones ocupadas en la actualidad</h4>
    <h5>Numero de habitacion-->{{$p->Numero}}</h5>
    <h5>Tipo de habitacion-->{{$p->Tipo}}</h5>
    <h5>Precio Habitacion-->{{$p->precio_total}}</h5>
     @endforeach
@stop