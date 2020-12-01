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
            $table->id();
            $table->string('image_path');
            $table->text('description');
            $table->integer('age');
            $table->string('home_address');
            $table->unsignedBigInteger('state');
            $table->unsignedBigInteger('gender');
            $table->timestamps();

            $table->foreign('state')->references('id')->on('animal_states');
            $table->foreign('gender')->references('id')->on('animal_genders');
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
