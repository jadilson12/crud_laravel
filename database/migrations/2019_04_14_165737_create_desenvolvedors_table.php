<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesenvolvedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // modelo de banco de dados de MUITOS para MUITOS

        Schema::create('desenvolvedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('campo');
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
        Schema::dropIfExists('desenvolvedores');
    }
}
