<?php

namespace Database\Seeders;

use App\Models\Representante;
use Illuminate\Database\Seeder;

class RepresentanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Representante::create([
            'id'=>1,
            'empresa_id'=>1,
            'rut'=>'12345678',
            'dv'=>'K',
            'nombre_completo'=>'Nombre Representante 1',
            'profesion_id'=>3,
            'estado_civil_id'=>6,
            'domicilio'=>'Domicilio del Representante 1',
            'pais_id'=>1,
            'rut_conyugue'=>'12653904-5',
            'nombre_conyugue'=>'Nombre del conyugue 1',
            'tipo_sociedad'=>'Mancomunados',
            'fecha_documento'=>'2016-11-01',
            'notaria'=>'Nombre de la notaria de la formalización de la sociedad 1'
        ]);

        Representante::create([
            'id'=>2,
            'empresa_id'=>2,
            'rut'=>'12341278',
            'dv'=>'K',
            'nombre_completo'=>'Nombre Representante 2',
            'profesion_id'=>3,
            'estado_civil_id'=>6,
            'domicilio'=>'Domicilio del Representante 2',
            'pais_id'=>2,
            'rut_conyugue'=>'8457690-K',
            'nombre_conyugue'=>'Nombre del conyugue 2',
            'tipo_sociedad'=>'Separación de Bienes',
            'fecha_documento'=>'2009-12-13',
            'notaria'=>'Nombre de la notaria de la formalización de la sociedad 2'
        ]);

        Representante::create([
            'id'=>3,
            'empresa_id'=>1,
            'rut'=>'12345238',
            'dv'=>'1',
            'nombre_completo'=>'Nombre Representante 3',
            'profesion_id'=>6,
            'estado_civil_id'=>1,
            'domicilio'=>'Domicilio del Representante 3',
            'pais_id'=>1,
            'rut_conyugue'=>'8457320-K',
            'nombre_conyugue'=>'Nombre del conyugue 3',
            'tipo_sociedad'=>'Separación de Bienes',
            'fecha_documento'=>'2002-05-13',
            'notaria'=>'Nombre de la notaria de la formalización de la sociedad 3'
        ]);
    }
}
