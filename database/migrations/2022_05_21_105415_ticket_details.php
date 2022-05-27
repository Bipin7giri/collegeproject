<?php

use App\Models\FlightDetails;
use App\Models\User;
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
        Schema::create('ticket_details', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('phone_no');
            $table->string('address');
            $table->string('email');
            $table->string('card_name');
            $table->string('card_no');
            $table->foreignIdFor(FlightDetails::class)->constrained('flight_details');
            $table->enum('payment_type', ['PayPal','Esewa','card']);
            $table->string('citizen_number');
            $table->foreignIdFor(User::class)->constrained('users');
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
