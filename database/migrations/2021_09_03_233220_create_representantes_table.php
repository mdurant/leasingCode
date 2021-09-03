<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->string('rut', 15)->nullable(false)->unique(true);
            $table->string('dv', 1)->nullable(false)->unique(false);
            $table->string('nombre_completo', 200)->nullable(false);
            $table->unsignedBigInteger('profesion_id');
            $table->foreign('profesion_id')->references('id')->on('profesions');
            $table->unsignedBigInteger('estado_civil_id');
            $table->foreign('estado_civil_id')->references('id')->on('estado_civils');
            $table->string('domicilio', 200)->nullable(false);
            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->string('rut_conyugue', 15)->nullable(true)->unique(false);
            $table->string('nombre_conyugue', 200)->nullable(true)->unique(false);
            $table->string('tipo_sociedad', 25);
            $table->date('fecha_documento');
            $table->string('notaria', 150);
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
        Schema::dropIfExists('representantes');
    }
}
