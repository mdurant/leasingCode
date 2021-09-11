<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcaAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_autos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 15)->nullable(false);
            $table->string('nombre', 100)->nullable(false);

            $table->unsignedBigInteger('tipo_autos_id');
            $table->foreign('tipo_autos_id')
                ->references('id')->on('tipo_autos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('marca_autos');
    }
}
