<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->bigIncrements('materia_id');
            $table->string('materia_nombre');
            $table->integer('materia_codigo');
            // $table->integer('horario_id');
            // $table->integer('unidad_id');
            $table->integer('facultad_id');
            // $table->integer('carrera_id');
            // $table->integer('usuario_id');
            // $table->integer('rol_id');
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
        Schema::drop('materias');
    }
}
