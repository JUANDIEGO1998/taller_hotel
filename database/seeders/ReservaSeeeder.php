<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserva')->insert(
            ['Numero'=>1,
            'Cliente'=>1,
            'Entrada'=>"2020-11-12",
            'Salida'=>"2020-10-14",
            
            ]);
        DB::table('reserva')->insert(
            ['Numero'=>2,
            'Cliente'=>2,
            
            'Entrada'=>"2020-10-12",
            'Salida'=>"0000-00-00",
            
            ]);
        DB::table('reserva')->insert(
            ['Numero'=>3,
            'Cliente'=>3,
           
            'Entrada'=>"2020-12-12",
            'Salida'=>"0000-00-00",
            
             ]);
        DB::table('reserva')->insert(
            ['Numero'=>4,
            'Cliente'=>4,
           
            'Entrada'=>"2020-09-12",
            'Salida'=>"2020-10-12",
            ]);
       DB::table('reserva')->insert(
            ['Numero'=>5,
            'Cliente'=>5,
            
            'Entrada'=>"2020-11-12",
            'Salida'=>"2020-11-22",
            
            ]);
    


      
    }
}
