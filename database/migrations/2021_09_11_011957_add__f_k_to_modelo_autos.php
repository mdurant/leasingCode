<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFKToModeloAutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modelo_autos', function (Blueprint $table) {
            //
            $table->dropColumn('tipo_autos_id');
            $table->dropColumn('marca_autos_id');

        });
    }
}
