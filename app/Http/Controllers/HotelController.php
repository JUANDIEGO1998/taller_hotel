<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //inicio
    public function getIndex(){
        return view('principal');
    }
    //hotel historia
    public function showHistoria(){
        return view('hotel.historia');
    }
    //mision
    public function showMision(){
        return view('hotel.vision');
    }
    //ubicacion
    public function showUbicacion(){
        return view('hotel.ubicacion');
    }
    //contactos
    public function showContactos(){
        return view('contactos');
    }
   
}
