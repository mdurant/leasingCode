<?php

namespace Database\Seeders;

use App\Models\Feriado;
use Illuminate\Database\Seeder;

class FeriadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Feriado::create([ 'id' => 1, 'pais' => 'CHILE', 'fecha' => '2021-09-17', 'descripcion' => 'Feriado adicional Fiestas Patrias',]);
        Feriado::create([ 'id' => 2, 'pais' => 'CHILE', 'fecha' => '2021-09-18', 'descripcion' => 'Fiestas Patrias',]);
        Feriado::create([ 'id' => 3, 'pais' => 'CHILE', 'fecha' => '2021-09-19', 'descripcion' => 'Día de las glorías del ejército de Chile',]);
    }
}
