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
        DB::table('factura')->insert(
            ['Numero'=>1,
            'Cliente'=>1,
            'FormaPago'=>1,
            'Entrada'=>"2020-11-12",
            'Salida'=>"2020-10-14",
            'Total'=>50000,
            ]);
        DB::table('factura')->insert(
            ['Numero'=>2,
            'Cliente'=>2,
            'FormaPago'=>2,
            'Entrada'=>"2020-10-12",
            'Salida'=>"0000-12-16",
            'Total'=>40000,
            ]);
        DB::table('factura')->insert(
            ['Numero'=>3,
            'Cliente'=>3,
            'FormaPago'=>3,
            'Entrada'=>"2020-12-12",
            'Salida'=>"2020-12-26",
            'Total'=>50000,
             ]);
        DB::table('factura')->insert(
            ['Numero'=>4,
            'Cliente'=>4,
            'FormaPago'=>4,
            'Entrada'=>"2020-09-12",
            'Salida'=>"2020-10-12",
            'Total'=>35000,
            ]);
       DB::table('factura')->insert(
            ['Numero'=>5,
            'Cliente'=>5,
            'FormaPago'=>5,
            'Entrada'=>"2020-11-12",
            'Salida'=>"2020-11-22",
            'Total'=>80000,
            ]);
    


      
    }
}
