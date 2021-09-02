<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalHasBiomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_has_biome', function (Blueprint $table) {
            $table->increments('id');

            $table->string('animal_id')->nullable();
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('set null')->onUpdate('cascade');

            $table->bigInteger('biome_id')->unsigned()->nullable();
            $table->foreign('biome_id')->references('id')->on('biomes')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_has_biome');
    }
}
