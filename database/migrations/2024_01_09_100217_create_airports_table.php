<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->char('iata',50);
            $table->char('icao',50);
            $table->string('libelle',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    //public function down(): void
    //{Schema::dropIfExists('airports');}
};
