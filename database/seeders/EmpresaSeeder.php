<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create(['id'=>1, 'nombre'=>'Empresa Ficticia 1', 'direccion'=>'Direccion Empresa 1', 'email'=>'email_empresa1@netcode.cl']);
        Empresa::create(['id'=>2, 'nombre'=>'Empresa Ficticia 2', 'direccion'=>'Direccion Empresa 2', 'email'=>'email_empresa2@netcode.cl']);
    }
}
