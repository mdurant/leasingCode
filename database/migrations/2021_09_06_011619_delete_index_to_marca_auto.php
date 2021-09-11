<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteIndexToMarcaAuto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marca_autos', function (Blueprint $table) {
            $table->dropUnique('marca_autos_codigo_unique');
            $table->dropUnique('marca_autos_nombre_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marca_auto', function (Blueprint $table) {
            //
        });
    }
}
