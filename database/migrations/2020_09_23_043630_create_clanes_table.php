<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clanes', function (Blueprint $table) {
            $table->Increments('clcodigo');
            $table->integer('uscodigo');
            $table->string('cltitulo');
            $table->string('cldescripcion');
            $table->string('clrequisitos');
            $table->integer('cledadminima');
            $table->integer('cledadmaxima');
            $table->string('clpais');
            $table->string('cljuego');
            $table->string('clenlacediscord');
            $table->string('clenlacewhatsapp');
            $table->string('climagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clanes');
    }
}
