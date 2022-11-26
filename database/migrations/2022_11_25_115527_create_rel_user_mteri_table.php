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
        Schema::create('rel_user_mteri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id')->references('id')->on('materi');
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
        Schema::dropIfExists('rel_user_mteri');
    }
};
