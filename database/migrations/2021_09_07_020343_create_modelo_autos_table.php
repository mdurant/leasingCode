<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeloAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_autos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 15)->nullable(false);
            $table->string('modelo', 150)->nullable(false);
            $table->integer('tipo_autos_id');
            $table->integer('marca_autos_id');
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
        Schema::dropIfExists('modelo_autos');
    }
}
