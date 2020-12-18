<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ruta /
    Route::get('/', [HotelController::class, 'getIndex']);
//ruta hotel/historia
    Route::get('hotel/historia',[HotelController::class,'showHistoria']);
//ruta hotel/mision-vision
    Route::get('hotel/mision-vision',[HotelController::class,'showMision']);
//ruta hotel/ubicacion
    Route::get('hotel/ubicacion',[HotelController::class,'showUbicacion']);
//ruta servicios habitaciones
    Route::get('servicios/habitaciones',[HabitacionesController::class,'showHabitaciones']);
//ruta eventos
    Route::get('reservas',[ReservasController::class,'getReservas']);
//ruta contactos
    Route::get('contactos',[HotelController::class,'showContactos']);
//ruta clientes/visualizar
    Route::get('clientes/cliente',[ClientesController::class,'showClientes']);
//ruta facturacion
    Route::get('facturacion',[FacturacionController::class,'getFactura']);
//ruta consultas
    Route::get('consultas',[ReservasController::class,'showConsultas']);


