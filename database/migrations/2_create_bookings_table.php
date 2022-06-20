<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            //StartDatum
            $table->DATE('StartDatum');
            $table->integer('PINCode')->nullable();
            $table->foreignId('Trip_id')->nullable()->constrained('trips');
            $table->foreignId('Klant_id')->nullable()->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
};
