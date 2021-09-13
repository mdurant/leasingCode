<?php

namespace Database\Seeders;

use App\Models\tipoSociedad;
use Illuminate\Database\Seeder;

class TipoSociedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      tipoSociedad::create(['id'=> 1, "nombre"=>'Soc. Anonima Abierta']);
      tipoSociedad::create(['id'=> 2, "nombre"=>'Soc. Anónima Cerrada']);
      tipoSociedad::create(['id'=> 3, "nombre"=>'Comunidades']);
      tipoSociedad::create(['id'=> 4, "nombre"=>'Corporaciones Y Fundaciones']);
      tipoSociedad::create(['id'=> 5, "nombre"=>'Emp. Indiv. De Respons. Ltda']);
      tipoSociedad::create(['id'=> 6, "nombre"=>'Sociedad Anonima']);
      tipoSociedad::create(['id'=> 7, "nombre"=>'Sociedad Colectiva']);
      tipoSociedad::create(['id'=> 8, "nombre"=>'Sociedad De Respons. Ltda']);
      tipoSociedad::create(['id'=> 9, "nombre"=>'Sociedad En Comandita']);
      tipoSociedad::create(['id'=> 10, "nombre"=>'Sociedad Colectiva Civil']);
      tipoSociedad::create(['id'=> 11, "nombre"=>'Sociedad de Hecho']);
      tipoSociedad::create(['id'=> 12, "nombre"=>'Soc. En Comandita Civil']);
      tipoSociedad::create(['id'=> 13, "nombre"=>'Soc. Colectiva Comercial']);
      tipoSociedad::create(['id'=> 14, "nombre"=>'Agencia de S.A. Extranjera']);
      tipoSociedad::create(['id'=> 15, "nombre"=>'Asoc. De Ctas.en Participacion']);
      tipoSociedad::create(['id'=> 16, "nombre"=>'Soc. Sin fines de Lucro']);
      tipoSociedad::create(['id'=> 17, "nombre"=>'Otra']);
      tipoSociedad::create(['id'=> 18, "nombre"=>'Sin Información']);

    }
}
