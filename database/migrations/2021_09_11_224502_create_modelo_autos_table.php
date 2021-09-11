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
            $table->string('modelo', 100)->nullable(false);
            $table->unsignedBigInteger('tipo_autos_id');

            $table->foreign('tipo_autos_id')
                ->references('id')->on('tipo_autos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('marca_autos_id');

            $table->foreign('marca_autos_id')
                ->references('id')->on('marca_autos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
