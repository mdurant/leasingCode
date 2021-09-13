<?php

namespace Database\Seeders;

use App\Models\tipoClienteNormativo;
use Illuminate\Database\Seeder;

class TipoClienteNormativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipoClienteNormativo::create(['id'=> 1, 'nombre'=>'PERSONA JURIDICA']);
        tipoClienteNormativo::create(['id'=> 2, 'nombre'=>'PERSONA NATURAL MUJER']);
        tipoClienteNormativo::create(['id'=> 3, 'nombre'=>'PERSONA NATURAL HOMBRE']);
        tipoClienteNormativo::create(['id'=> 4, 'nombre'=>'PERSONA NATURAL']);
        tipoClienteNormativo::create(['id'=> 5, 'nombre'=>'SIN INFORMACIÓN']);
    }
}
