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
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100)->unique();
            $table->string('path',100)->unique();
            $table->longText('contenido');
            $table->integer('orden');
            $table->char('es_sub_menu',1);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('estado_id');

            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('menus');
    }
};
