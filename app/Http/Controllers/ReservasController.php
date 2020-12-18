<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function getReservas(){
        return view('reservas.reservas');
    }
    public function showConsultas(){
        $datos=DB::table('habitacion')
        ->join('precio','precio','=','precio.id')
        ->select('precio.id','Tipo')
        ->get();
        $total=DB::table('precio')
        ->where('Tipo','=','individual')
        ->count();
        $total2=DB::table('precio')
        ->where('Tipo','=','doble-sola')
        ->count();
        $total3=DB::table('precio')
        ->where('Tipo','=','doble')
        ->count();
        $total4=DB::table('precio')
        ->where('Tipo','=','triple')
        ->count();
        $total5=DB::table('precio')
        ->where('Tipo','=','cuadruple')
        ->count();
        $total6=DB::table('reserva')
        ->where('Salida','=','0000-00-00')
        ->join('habitacion', 'reserva.numero', '=', 'habitacion.Numero')
       ->join('precio', 'precio', '=', 'precio.id')
        ->get();
       
        return view('consultas',['datos'=>$datos,'total'=>$total,'total2'=>$total2,'total3'=>$total3,'total4'=>$total4,'total5'=>$total5,'total6'=>$total6]);
    }
   
}
