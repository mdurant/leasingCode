<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id, codigo, nombre, provincia_id
        $csvFile = fopen(public_path("data/ciudad.csv"),"r");

        $firstLine = true;
        while (($data = fgetcsv($csvFile,2000,";")) !== FALSE){
            if(!$firstLine){
                Ciudad::create([
                    'id'=> $data['0'],
                    'codigo'=>$data['1'],
                    'nombre'=>$data['2'],
                    'provincia_id'=>$data['3'],
                ]);
            }
            $firstLine = false;
        }
        fclose($csvFile);

    }
}
