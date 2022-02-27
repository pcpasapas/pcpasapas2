<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processeur', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('socket');
            $table->string('graphique');
            $table->integer('prix');
            $table->string('img');
            $table->string('site');
            $table->string('puissance');
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
        Schema::dropIfExists('processeur');
    }
}
