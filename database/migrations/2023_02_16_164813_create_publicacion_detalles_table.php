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
        Schema::create('publicacion_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('contenido');
            $table->unsignedBigInteger('publicacion_id');
            $table->unsignedBigInteger('estado_id');

            $table->foreign('publicacion_id')->references('id')->on('publicaciones');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacion_detalles');
    }
};
