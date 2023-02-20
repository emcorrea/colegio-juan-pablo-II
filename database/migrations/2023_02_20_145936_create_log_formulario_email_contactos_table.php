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
        Schema::create('log_formulario_email_contactos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('email',100);
            $table->string('asunto',100);
            $table->longText('mensaje',100);
            $table->longText('email_receptor',255);
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
        Schema::dropIfExists('log_formulario_email_contactos');
    }
};
