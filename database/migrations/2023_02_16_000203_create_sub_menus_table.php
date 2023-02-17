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
        Schema::create('sub_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100)->unique();
            $table->string('path',100)->unique();
            $table->longText('contenido');
            $table->integer('orden');
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('estado_id');

            $table->foreign('menu_id')->references('id')->on('menus');
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
        Schema::dropIfExists('sub_menus');
    }
};
