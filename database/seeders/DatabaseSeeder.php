<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(EstadoCivilSeeder::class);
        $this->call(FeriadoSeeder::class);
        $this->call(MonedaSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(RepresentanteSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(ProvinciaSeeder::class);
       // $this->call(CiudadSeeder::class);   este import se hace con python
        $this->call(TipoAutoSeeder::class);
        $this->call(MarcaAutoSeeder::class);

    }
}
