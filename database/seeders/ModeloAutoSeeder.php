<?php

namespace Database\Seeders;

use App\Models\modeloAuto;
use Illuminate\Database\Seeder;

class ModeloAutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id, codigo, modelo, tipo_autos_id, marca_autos_id
        $csvFile = fopen(public_path("data/modelosAutos.csv"),"r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile,2000,";")) !== FALSE){
            if(!$firstLine){
                modeloAuto::create([
                    'id'=> $data['0'],
                    'codigo'=>$data['1'],
                    'modelo'=>$data['2'],
                    'tipo_autos_id'=>$data['3'],
                    'marca_autos_id' =>$data['4'],
                ]);
            }
            $firstLine = false;
        }
        fclose($csvFile);
    }
}
