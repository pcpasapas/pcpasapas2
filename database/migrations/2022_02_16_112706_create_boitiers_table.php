<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoitiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boitiers', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('format');
            $table->string('alim');
            $table->integer('prix');
            $table->string('img');
            $table->timestamps();
        });
        Schema::table('boitiers', function (Blueprint $table) {
            $table->string('site');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boitiers');
    }
}
