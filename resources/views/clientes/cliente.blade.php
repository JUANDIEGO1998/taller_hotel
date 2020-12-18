@extends('layouts.master')
@section('content')
<div class='container'>
  <div class ='row'>
      @foreach($clientes as $p)
      <div class ="col-md-4">
        <div class="card" style="width: 15rem;">
        <img src='{{url("/img/$p->foto")}}'' class="card-img-top" alt="10px">
           <div class="card-body">
           <h5 class="card-title">DNI-->{{$p->DNI}}</h5>
           <p class="card-text" aling ="justify">Nombres-->{{$p->nombres}}</p>
           <p class="card-text" aling ="justify">Genero-->{{$p->genero}}</p>
           <p class="card-text" aling ="justify">Domicilio-->{{$p->domicilio}}</p>
           <p class="card-text" aling ="justify">Telefono-->{{$p->telefono}}</p>

            </div>
         </div>
    </div>
       @endforeach
    </div>
</div>
@stop