<?php

namespace Database\Seeders;

use App\Models\Profesion;
use Illuminate\Database\Seeder;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesion::create(['id'=> 1, 'nombre' =>'Ama de Casa']);
        Profesion::create(['id'=> 2, 'nombre' =>'Arquitecto' ]);
        Profesion::create(['id'=> 3, 'nombre' =>'Interprete, Traductor' ]);
        Profesion::create(['id'=> 4, 'nombre' =>'Medico / Cirujano' ]);
        Profesion::create(['id'=> 5, 'nombre' =>'Perito' ]);
        Profesion::create(['id'=> 6, 'nombre' =>'Policia' ]);
        Profesion::create(['id'=> 7, 'nombre' =>'Ingenierio Informático' ]);
        Profesion::create(['id'=> 8, 'nombre' =>'Técnico en Enfermería' ]);
        Profesion::create(['id'=> 9, 'nombre' =>'Enfermero (a)' ]);
        Profesion::create(['id'=> 10, 'nombre' =>'Sociologo (a)' ]);
    }
}
