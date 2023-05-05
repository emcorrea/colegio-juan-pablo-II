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
            $table->unsignedBigInteger('tipo_publicacion_detalle_id')->nullable()->after('publicacion_id');
            $table->foreign('tipo_publicacion_detalle_id')->references('id')->on('tipo_publicacion_detalles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicacion_detalle', function (Blueprint $table) {
            //
        });
    }
};
