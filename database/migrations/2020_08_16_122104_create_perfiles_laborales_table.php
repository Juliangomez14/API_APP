<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilesLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles_laborales', function (Blueprint $table) {
            $table->id();
            $table->string('perfil',3000);
            $table->bigInteger('trabajadores_id')->unsigned();
            $table->foreign('trabajadores_id')->references('id')->on('trabajadores');
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
        Schema::dropIfExists('perfiles_laborales');
    }
}
