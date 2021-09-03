<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;



class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::create(['id'=> 1, 'nombre' => 'Chile']);
        Pais::create(['id'=> 2, 'nombre' => 'Colombia']);
        Pais::create(['id'=> 3, 'nombre' => 'Perú']);
        Pais::create(['id'=> 4, 'nombre' => 'Venezuela']);
        Pais::create(['id'=> 5, 'nombre' => 'Estados Unidos']);
        Pais::create(['id'=> 6, 'nombre' => 'Argentina']);
        Pais::create(['id'=> 7, 'nombre' => 'Bolivia']);
    }
}
