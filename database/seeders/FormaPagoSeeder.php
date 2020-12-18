<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formapago')->insert(
            ['Descripcion'=>'efectivo',
            ]);

        DB::table('formapago')->insert(
            ['Descripcion'=>'cheque',
            ]);

        DB::table('formapago')->insert(
            ['Descripcion'=>'tarjeta',
            ]);

        DB::table('formapago')->insert(
            ['Descripcion'=>'giro',
            ]);

        DB::table('formapago')->insert(
            ['Descripcion'=>'deposito',
            ]);

    }
}
