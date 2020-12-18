@extends('layouts.master')
@section('content')
<div class='container'>
  <div class ='row'>
      @foreach($habitaciones as $p)
      <div class ="col-md-4">
        <div class="card" style="width: 15rem;">
        <img src='{{url("/img/$p->foto")}}'' class="card-img-top" alt="...">
           <div class="card-body">
           <h5 class="card-title">Numero-->{{$p->Numero}}</h5>
           <p class="card-text" aling ="justify">{{$p->descripcion}}</p>
           <p class="card-text" aling ="justify">Numero de camas-->{{$p->numCamas}}</p>
           <p class="card-text" aling ="justify">Tipo-->{{$p->Tipo}}</p>
           <p class="card-text" aling ="justify">Precio-->{{$p->precio_total}}</p>

            </div>
         </div>
    </div>
       @endforeach
    </div>
</div>
@stop