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
        Schema::create('materia_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materia_id')->references('id')->on('materias');
            $table->unsignedBigInteger('user_id')->references('id')->on('users');
            $table->string('nota');
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
        Schema::dropIfExists('materia_user');
    }
};
