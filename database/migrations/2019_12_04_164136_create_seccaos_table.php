<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('perfil_id');
            $table->string('nome');
            $table->timestamps();
            $table->foreign('perfil_id')->references('id')->on('perfils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seccaos');
    }
}
