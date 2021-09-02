<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biomes', function (Blueprint $table) {

            $table->id();
            $table->string('name', 30);
            $table->double('temperature', 8, 2);
            $table->double('latitude', 8, 2);
            $table->double('altitude', 8, 2);
            $table->commonFieldsWithDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biomes');
    }
}
