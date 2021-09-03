<?php

namespace Database\Seeders;

use App\Models\EstadoCivil;
use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoCivil::create(['id'=>1, 'nombre'=>'Soltero (a)']);
        EstadoCivil::create(['id'=>2, 'nombre'=>'Casado (a)']);
        EstadoCivil::create(['id'=>3, 'nombre'=>'Viudo (a)']);
        EstadoCivil::create(['id'=>4, 'nombre'=>'Divorciado (a)']);
        EstadoCivil::create(['id'=>5, 'nombre'=>'Concubinato']);
        EstadoCivil::create(['id'=>6, 'nombre'=>'Separado (a)']);

    }
}
