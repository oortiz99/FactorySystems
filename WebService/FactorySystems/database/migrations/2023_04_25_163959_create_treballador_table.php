<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreballadorTable extends Migration
{
    public function up()
    {
        Schema::create('treballador', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('cognoms', 100);
            $table->string('rol', 100);
            $table->date('data_incorporacio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('treballador');
    }
}
