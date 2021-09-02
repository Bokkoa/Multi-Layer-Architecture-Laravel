<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {

            $table->uuid('id')->primary();

            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('quantity')->default(1);
            $table->boolean('extinct')->default(false);

            $table->bigInteger('classification_id')->unsigned()->nullable();
            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('set null')->onUpdate('cascade');

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
        Schema::dropIfExists('animals');
    }
}
