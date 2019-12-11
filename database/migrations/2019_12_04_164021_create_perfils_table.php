<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('foto');
            $table->string('email');
            $table->string('endereco');
            $table->string('descricao');
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::dropIfExists('perfils');
    }
}
