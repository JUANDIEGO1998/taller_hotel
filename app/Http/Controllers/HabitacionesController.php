<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitacionesController extends Controller
{
    public function showHabitaciones(){
        $habitacion =DB::table('habitacion')
        ->join('precio','precio','=','precio.id')
        ->orderBy('numero','asc')
        ->get();
        return view('servicios.habitaciones',['habitaciones'=>$habitacion]);
    }
   
}
