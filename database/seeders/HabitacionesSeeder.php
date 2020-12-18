<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('habitacion')->insert(
            ['Numero'=>1,
            'descripcion'=>'Habitación individual - una habitación para un huésped con una cama individual',
            'numCamas'=>1,
            'foto'=>'1.jpg',
            'precio'=>1,
            ]);
    DB::table('habitacion')->insert( 
            ['Numero'=>2,
            'descripcion'=>'Habitación doble de uso individual - habitación con dos camas para una sola persona. ',
            'numCamas'=>1,
            'foto'=>'2.jpg',
            'precio'=>2,
            ]);    
    DB::table('habitacion')->insert(
            ['Numero'=>3, 
            'descripcion'=>'Habitación doble - también se trata de una habitación para dos personas',
            'numCamas'=>2,
            'foto'=>'3.jpg',
            'precio'=>3,
            ]);   
    
    DB::table('habitacion')->insert(
            ['Numero'=>4, 
            'descripcion'=>'Habitación triple - estas habitaciones para tres personas cuentan normalmente con tres camas individuales.',
            'numCamas'=>3,
            'foto'=>'4.jpg',
            'precio'=>4,
             ]);  
    DB::table('habitacion')->insert(
            ['Numero'=>5, 
            'descripcion'=>'Habitación cuadruple - esta habitación está preparada para albergar a 4 huéspedes.',
            'numCamas'=>4,
            'foto'=>'5.jpg',
            'precio'=>5,
            ]);      
    
 
    }
}
