<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_last_name');
            $table->string('user_email')->unique();
            $table->string('password');
            $table->integer('user_phone');
            $table->integer('user_codsis');
            $table->date('user_nac');
            // referencia a la tabla rol
            $table->integer('rol_id');
            // referencia a la tabla facultad
            $table->integer('facultad_id');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
