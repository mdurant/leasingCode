<?php

namespace Database\Seeders;

use App\Models\marcaAuto;
use Illuminate\Database\Seeder;

class MarcaAutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id, codigo, nombre, tipo_autos_id
        $csvFile = fopen(public_path("data/marcasAutos.csv"),"r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile,2000,";")) !== FALSE){
            if(!$firstLine){
                marcaAuto::create([
                    'id'=> $data['0'],
                    'codigo'=>$data['1'],
                    'nombre'=>$data['2'],
                    'tipo_autos_id'=>$data['3'],
                ]);
            }
            $firstLine = false;
        }
        fclose($csvFile);
    }
}
