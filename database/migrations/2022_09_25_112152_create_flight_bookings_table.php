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
        Schema::create('flight_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_id')->references('id')->on('flights');
            $table->string('name');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('group_length')->nullable();
            $table->json('group_participant')->nullable();
            $table->bigInteger('price');
            $table->integer('discount')->nullable();
            $table->bigInteger('total');
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
        Schema::dropIfExists('flight_bookings');
    }
};
