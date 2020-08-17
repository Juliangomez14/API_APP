<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_trabajadores', function (Blueprint $table) {
            $table->bigInteger('perfiles_laborales_id')->unsigned();
            $table->bigInteger('estudios_id')->unsigned();
            $table->foreign('perfiles_laborales_id')->references('id')->on('perfiles_laborales');
            $table->foreign('estudios_id')->references('id')->on('estudios');
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
        Schema::dropIfExists('estudios_trabajadores');
    }
}
