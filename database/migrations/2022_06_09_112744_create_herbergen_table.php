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
        Schema::create('herbergen', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('Adres');
            $table->string('Email');
            $table->string('Telefoon');
            $table->string('Coordinaten');
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
        Schema::dropIfExists('herbergen');
    }
};
