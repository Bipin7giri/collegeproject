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
        Schema::create('flight_details', function (Blueprint $table) {
            $table->id();
            $table->string('flight_name');
            $table->string('to');
            $table->string('from');
            $table->string('flight_id')->unique('flight_details');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->integer('seats');
            $table->integer('price');
            $table->string('images');
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
        //
    }
};
