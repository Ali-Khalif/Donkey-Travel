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
        Schema::create('overnachtingen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Booking_id')->nullable()->constrained('bookings');
            $table->foreignId('Herberg_id')->nullable()->constrained('herbergen');
            $table->foreignId('Status_id')->nullable()->constrained('statuses');
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
        Schema::dropIfExists('overnachtingen');
    }
};
