<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->bigIncrements('clase_id');
            $table->integer('usuario_id');
            $table->integer('rol_id');
            $table->integer('grupo_id');
            $table->integer('horario_id');
            $table->integer('materia_id');
            $table->integer('unidad_id');
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
        Schema::drop('clases');
    }
}
