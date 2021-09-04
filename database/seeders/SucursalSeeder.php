<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::create(['id'=>1,'nombre' => 'Sucursal AAA','domicilio'=>'Domicilio Sucursal AAA','empresa_id'=>1]);
        Sucursal::create(['id'=>2,'nombre' => 'Sucursal BBB','domicilio'=>'Domicilio Sucursal BBB','empresa_id'=>1]);
        Sucursal::create(['id'=>3,'nombre' => 'Sucursal CCC','domicilio'=>'Domicilio Sucursal CCC','empresa_id'=>2]);
    }
}
