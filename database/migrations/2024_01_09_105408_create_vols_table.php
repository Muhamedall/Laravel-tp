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
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airport_depart_id');
            $table->unsignedBigInteger('airport_arrivee_id');
            $table->foreign('airport_depart_id')->references('id')->on('airports');
            $table->foreign('airport_arrivee_id')->references('id')->on('airports');
            $table->date('date_depart');
            $table->date('date_arrivee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vols');
    }
};
