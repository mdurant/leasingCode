<?php

namespace Database\Seeders;

use App\Models\tipoAuto;
use Illuminate\Database\Seeder;

class TipoAutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipoAuto::create(['id'=>1, 'nombre'=>'AUTOMOVIL']);
        tipoAuto::create(['id'=>2, 'nombre'=>'CAMIONETA']);
        tipoAuto::create(['id'=>3, 'nombre'=>'FURGON']);
        tipoAuto::create(['id'=>4, 'nombre'=>'JEEP']);
        tipoAuto::create(['id'=>5, 'nombre'=>'MINIBUS']);
        tipoAuto::create(['id'=>6, 'nombre'=>'STATION WAGON']);
    }
}
