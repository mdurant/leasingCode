<?php

namespace Database\Seeders;

use App\Models\empresaSeguro;
use Illuminate\Database\Seeder;

class EmpresaSeguroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id, codigo, nombre, tipo_autos_id
        $csvFile = fopen(public_path("data/empresa_seguros.csv"),"r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile,2000,";")) !== FALSE){
            if(!$firstLine){
                empresaSeguro::create([
                    'id'=> $data['0'],
                    'nombre'=>$data['1'],
                    'estado'=>$data['2'],
                    'rut'=>$data['3'],
                ]);
            }
            $firstLine = false;
        }
        fclose($csvFile);
    }
}
