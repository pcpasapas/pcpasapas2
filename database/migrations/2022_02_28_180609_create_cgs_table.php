<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cgs', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('marque');
            $table->integer('prix');
            $table->string('img');
            $table->string('site');
            $table->string('modele');
            $table->integer('fréquence');
            $table->integer('consommation');
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
        Schema::dropIfExists('cgs');
    }
}
