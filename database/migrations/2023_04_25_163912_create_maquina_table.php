<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaquinaTable extends Migration
{
    public function up()
    {
        Schema::create('maquina', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->text('descripcio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maquina');
    }
}
