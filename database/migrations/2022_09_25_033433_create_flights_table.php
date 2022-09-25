<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('airline_name');
            $table->string('plane_id');
            $table->string('plane_name');
            $table->string('from_location');
            $table->string('to_location');
            $table->dateTimeTz('departure_time', $precision = 0);
            $table->dateTimeTz('arrival_time', $precision = 0);
            $table->json('transits');
            $table->bigInteger('price');
            $table->integer('seats');
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
        Schema::dropIfExists('flights');
    }
};
