<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_trabajadores', function (Blueprint $table) {
            $table->bigInteger('trabajadores_id')->unsigned();
            $table->bigInteger('experiencias_id')->unsigned();
            $table->foreign('trabajadores_id')->references('id')->on('trabajadores');
            $table->foreign('experiencias_id')->references('id')->on('experiencias');
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
        Schema::dropIfExists('experiencia_trabajadores');
    }
}
