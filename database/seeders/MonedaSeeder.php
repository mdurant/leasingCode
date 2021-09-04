<?php

namespace Database\Seeders;

use App\Models\Moneda;
use Illuminate\Database\Seeder;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Moneda::create(['id'=>1, 'codigo'=>'USD','moneda'=>'Dólar', 'simbolo'=>'U$','descripcion'=>'Dólar Americano']);
        Moneda::create(['id'=>2, 'codigo'=>'CLP','moneda'=>'Peso Chileno', 'simbolo'=>'$','descripcion'=>'Peso Chileno']);
        Moneda::create(['id'=>3, 'codigo'=>'CLF','moneda'=>'Unidad de Fomento', 'simbolo'=>'UF','descripcion'=>'Unidad de Fomento Chile']);
    }
}
