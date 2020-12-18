<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function showClientes(){
        $cliente =DB::table('cliente')
        ->orderBy('nombres','asc')
        ->get();
        return view('clientes.cliente',['clientes'=>$cliente]);
    }
}
