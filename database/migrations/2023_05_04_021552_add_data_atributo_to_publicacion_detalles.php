<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publicacion_detalles', function (Blueprint $table) {
            $table->string('data_atributo',255)->nullable()->after('tipo_publicacion_detalle_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicacion_detalles', function (Blueprint $table) {
            //
        });
    }
};
