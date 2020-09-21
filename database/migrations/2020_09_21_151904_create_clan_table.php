<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clan', function (Blueprint $table) {
            $table->Increments('clcodigo');
            $table->timestamps();
            $table->Integer('uscodigo');
            $table->string('cltitulo');
            $table->string('cldescripcion');
            $table->string('clrequisitos');
            $table->string('cledadminima');
            $table->string('cledadmaxima');
            $table->string('clpais');
            $table->string('cljuegos');
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
        Schema::dropIfExists('clan');
    }
}
