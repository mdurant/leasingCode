<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['id'=>1,'codigo'=>'11','nombre'=>'Iquique','region_id'=>1]);
        Provincia::create(['id'=>2,'codigo'=>'14','nombre'=>'Tamarugal','region_id'=>1]);
        Provincia::create(['id'=>3,'codigo'=>'21','nombre'=>'Antofagasta','region_id'=>2]);
        Provincia::create(['id'=>4,'codigo'=>'22','nombre'=>'El Loa','region_id'=>2]);
        Provincia::create(['id'=>5,'codigo'=>'23','nombre'=>'Tocopilla','region_id'=>2]);
        Provincia::create(['id'=>6,'codigo'=>'31','nombre'=>'Copiapó','region_id'=>3]);
        Provincia::create(['id'=>7,'codigo'=>'32','nombre'=>'Chañaral','region_id'=>3]);
        Provincia::create(['id'=>8,'codigo'=>'33','nombre'=>'Huasco','region_id'=>3]);
        Provincia::create(['id'=>9,'codigo'=>'41','nombre'=>'Elqui','region_id'=>4]);
        Provincia::create(['id'=>10,'codigo'=>'42','nombre'=>'Choapa','region_id'=>4]);
        Provincia::create(['id'=>11,'codigo'=>'43','nombre'=>'Limarí','region_id'=>4]);
        Provincia::create(['id'=>12,'codigo'=>'51','nombre'=>'Valparaiso','region_id'=>5]);
        Provincia::create(['id'=>13,'codigo'=>'52','nombre'=>'Isla de Pascua','region_id'=>5]);
        Provincia::create(['id'=>14,'codigo'=>'53','nombre'=>'Los Andes','region_id'=>5]);
        Provincia::create(['id'=>15,'codigo'=>'54','nombre'=>'Petorca','region_id'=>5]);
        Provincia::create(['id'=>16,'codigo'=>'55','nombre'=>'Quillota','region_id'=>5]);
        Provincia::create(['id'=>17,'codigo'=>'56','nombre'=>'San Antonio','region_id'=>5]);
        Provincia::create(['id'=>18,'codigo'=>'57','nombre'=>'San Felipe de Aconcagua','region_id'=>5]);
        Provincia::create(['id'=>19,'codigo'=>'58','nombre'=>'Marga Marga','region_id'=>5]);
        Provincia::create(['id'=>20,'codigo'=>'61','nombre'=>'Cachapoal','region_id'=>6]);
        Provincia::create(['id'=>21,'codigo'=>'62','nombre'=>'Cardenal Caro','region_id'=>6]);
        Provincia::create(['id'=>22,'codigo'=>'63','nombre'=>'Colchagua','region_id'=>6]);
        Provincia::create(['id'=>23,'codigo'=>'71','nombre'=>'Talca','region_id'=>7]);
        Provincia::create(['id'=>24,'codigo'=>'72','nombre'=>'Cauquenes','region_id'=>7]);
        Provincia::create(['id'=>25,'codigo'=>'73','nombre'=>'Curicó','region_id'=>7]);
        Provincia::create(['id'=>26,'codigo'=>'74','nombre'=>'linares','region_id'=>7]);
        Provincia::create(['id'=>27,'codigo'=>'81','nombre'=>'Concepción','region_id'=>8]);
        Provincia::create(['id'=>28,'codigo'=>'82','nombre'=>'Arauco','region_id'=>8]);
        Provincia::create(['id'=>29,'codigo'=>'83','nombre'=>'BioBío','region_id'=>8]);
        Provincia::create(['id'=>30,'codigo'=>'91','nombre'=>'Cautín','region_id'=>9]);
        Provincia::create(['id'=>31,'codigo'=>'92','nombre'=>'Malleco','region_id'=>9]);
        Provincia::create(['id'=>32,'codigo'=>'101','nombre'=>'Llanquihue','region_id'=>10]);
        Provincia::create(['id'=>33,'codigo'=>'102','nombre'=>'Chiloé','region_id'=>10]);
        Provincia::create(['id'=>34,'codigo'=>'103','nombre'=>'Osorno','region_id'=>10]);
        Provincia::create(['id'=>35,'codigo'=>'104','nombre'=>'Palena','region_id'=>10]);
        Provincia::create(['id'=>36,'codigo'=>'111','nombre'=>'Coyhaique','region_id'=>11]);
        Provincia::create(['id'=>37,'codigo'=>'112','nombre'=>'Aisén','region_id'=>11]);
        Provincia::create(['id'=>38,'codigo'=>'113','nombre'=>'Capitán Prat','region_id'=>11]);
        Provincia::create(['id'=>39,'codigo'=>'114','nombre'=>'General Carrera','region_id'=>11]);
        Provincia::create(['id'=>40,'codigo'=>'121','nombre'=>'Magallanes','region_id'=>12]);
        Provincia::create(['id'=>41,'codigo'=>'122','nombre'=>'Antártica Chilena','region_id'=>12]);
        Provincia::create(['id'=>42,'codigo'=>'123','nombre'=>'Tierra del Fuego','region_id'=>12]);
        Provincia::create(['id'=>43,'codigo'=>'124','nombre'=>'Última Eperanza','region_id'=>12]);
        Provincia::create(['id'=>44,'codigo'=>'131','nombre'=>'Santiago','region_id'=>13]);
        Provincia::create(['id'=>45,'codigo'=>'132','nombre'=>'Cordillera','region_id'=>13]);
        Provincia::create(['id'=>46,'codigo'=>'133','nombre'=>'Chacabuco','region_id'=>13]);
        Provincia::create(['id'=>47,'codigo'=>'134','nombre'=>'Maipo','region_id'=>13]);
        Provincia::create(['id'=>48,'codigo'=>'135','nombre'=>'Melipilla','region_id'=>13]);
        Provincia::create(['id'=>49,'codigo'=>'136','nombre'=>'Talagante','region_id'=>13]);
        Provincia::create(['id'=>50,'codigo'=>'141','nombre'=>'Valdivia','region_id'=>14]);
        Provincia::create(['id'=>51,'codigo'=>'136','nombre'=>'Ranco','region_id'=>14]);
        Provincia::create(['id'=>52,'codigo'=>'151','nombre'=>'Arica','region_id'=>15]);
        Provincia::create(['id'=>53,'codigo'=>'152','nombre'=>'Parinacota','region_id'=>15]);
        Provincia::create(['id'=>54,'codigo'=>'161','nombre'=>'Punilla','region_id'=>16]);
        Provincia::create(['id'=>55,'codigo'=>'162','nombre'=>'Itata','region_id'=>16]);
        Provincia::create(['id'=>56,'codigo'=>'163','nombre'=>'Diguillín','region_id'=>16]);
    }
}
