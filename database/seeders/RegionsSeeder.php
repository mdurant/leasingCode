<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create(['id'=>1,'sigla'=>'AYP','nombre'=>'De Arica y Parinacota', 'codigo'=>'XV']);
        Region::create(['id'=>2,'sigla'=>'TPCA','nombre'=>'De Tarapacá', 'codigo'=>'I']);
        Region::create(['id'=>3,'sigla'=>'ANTOF','nombre'=>'De Antofagasta', 'codigo'=>'II']);
        Region::create(['id'=>4,'sigla'=>'ATCMA','nombre'=>'De Atacama', 'codigo'=>'III']);
        Region::create(['id'=>5,'sigla'=>'COQ','nombre'=>'De Coquimbo', 'codigo'=>'IV']);
        Region::create(['id'=>6,'sigla'=>'VALPO','nombre'=>'De Valparaiso', 'codigo'=>'V']);
        Region::create(['id'=>7,'sigla'=>'RM','nombre'=>'Metropolitana de Santiago', 'codigo'=>'XIII']);
        Region::create(['id'=>8,'sigla'=>'LGBO','nombre'=>'Del Libertador General Bernardo O"higgins', 'codigo'=>'VI']);
        Region::create(['id'=>9,'sigla'=>'MAULE','nombre'=>'Del Maule', 'codigo'=>'VII']);
        Region::create(['id'=>10,'sigla'=>'NUBLE','nombre'=>'De Ñuble', 'codigo'=>'XVI']);
        Region::create(['id'=>11,'sigla'=>'BBIO','nombre'=>'Del Biobio', 'codigo'=>'VIII']);
        Region::create(['id'=>12,'sigla'=>'ARAUC','nombre'=>'De La Araucanía', 'codigo'=>'IX']);
        Region::create(['id'=>13,'sigla'=>'RIOS','nombre'=>'De Los Rios', 'codigo'=>'XIV']);
        Region::create(['id'=>14,'sigla'=>'LAGOS','nombre'=>'De los Lagos', 'codigo'=>'X']);
        Region::create(['id'=>15,'sigla'=>'AYSEN','nombre'=>'De Aysén del General Carlos Ibañez del Campo', 'codigo'=>'XI']);
        Region::create(['id'=>16,'sigla'=>'MAG','nombre'=>'De Magallanes y de la Antártica Chilena', 'codigo'=>'XII']);
    }
}
