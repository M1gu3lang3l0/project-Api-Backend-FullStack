<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rol_id')->unsigned();
            $table->foreign('rol_id')
            ->references('id')
            ->on('roles');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('tipo_identificacion');
            $table->string('numero_identificacion');
            $table->string('telefono');
            $table->string('email');
            $table->string('profesion');
           

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
        Schema::dropIfExists('usuarios');
    }
}
