<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTribosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('igreja');
            $table->string('nomeTribo')->default('Todas as Tribos');
            $table->date('dataTribo');
            $table->string('oferta');
            $table->string('quantidadePessoal');
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
        Schema::dropIfExists('tribos');
    }
}
