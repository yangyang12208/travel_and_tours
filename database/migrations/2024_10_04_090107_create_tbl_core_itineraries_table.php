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
        Schema::create('tbl_core_itineraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained('tbl_core_tours')->onDelete('cascade'); // Foreign key to tbl_core_tours
            $table->string('destination_name');
            $table->string('day_number'); // Day number for the itinerary (e.g., Day 1, Day 2)
            $table->text('description'); // Description of the day's activities
            $table->string('itenirary_images');
            $table->string('location')->nullable(); // Optional: location for each day
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_core_itineraries');
    }
};
