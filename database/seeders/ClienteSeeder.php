<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->insert(
            ['DNI'=>'8734578908',
            'nombres'=>'Juan Diego Rosero',
            'genero'=>'M',
            'domicilio'=> 'Cra 9 No 24',
            'telefono'=>'3118674235',
            'foto'=> '10.jpg',
            ]);

        DB::table('cliente')->insert(
                ['DNI'=>'6574324589',
                'nombres'=>'Alejandra Andrade',
                'genero'=>'F',
                'domicilio'=> 'Cra 1 No 26',
                'telefono'=>'3143456789',
                'foto'=> '11.jpg',
                ]);
        DB::table('cliente')->insert(
                ['DNI'=>'9876541230',
               'nombres'=>'Ana solarte',
               'genero'=>'F',
               'domicilio'=> 'Cra 5 No 26',
              'telefono'=>'3114789076', 
              'foto'=> '12.jpg',
                ]);

        DB::table('cliente')->insert(
               ['DNI'=>'9865123456',
              'nombres'=>'Diana perez',
              'genero'=>'F',
              'domicilio'=> 'Cra 2 No 25',
              'telefono'=>'3116543214', 
             'foto'=> '13.jpg',
              ]);

              DB::table('cliente')->insert(
                ['DNI'=>'1238765498',
               'nombres'=>'andres gimenez',
               'genero'=>'M',
               'domicilio'=> 'Cra 2 No 26',
               'telefono'=>'3117890654', 
              'foto'=> '14.jpg',
               ]);

    }
}
