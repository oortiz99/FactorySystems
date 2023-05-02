<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErrorTable extends Migration
{
    public function up()
    {
        Schema::create('error', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('maquina');
            $table->unsignedBigInteger('treballador');
            $table->string('estat_error', 100);
            $table->text('descripcio');
            $table->string('tipus', 200);
            $table->timestamps();

            $table->foreign('maquina')->references('id')->on('maquina');
            $table->foreign('treballador')->references('id')->on('treballador');
        });
    }

    public function down()
    {
        Schema::dropIfExists('error');
    }
}