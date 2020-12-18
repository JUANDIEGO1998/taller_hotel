<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('precio')->insert(
            ['Tipo'=>'individual',
            'precio_total'=>55000,
            ]);

        DB::table('precio')->insert(
            ['Tipo'=>'doble-sola',
            'precio_total'=>40000,
             ]);
            
        DB::table('precio')->insert(
            ['Tipo'=>'doble ',
            'precio_total'=>50000,
             ]);
               
        DB::table('precio')->insert(
            ['Tipo'=>'triple ',
           'precio_total'=>35000,
             ]);

         DB::table('precio')->insert(
           ['Tipo'=>'cuadruple ',
           'precio_total'=>80000,
          ]);

    }
}
