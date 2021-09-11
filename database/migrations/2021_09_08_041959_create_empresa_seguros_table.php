<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaSegurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_seguros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200)->nullable(false);
            $table->enum('estado',['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            $table->string('rut')->nullable(false)->unique(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa_seguros');
    }
}
