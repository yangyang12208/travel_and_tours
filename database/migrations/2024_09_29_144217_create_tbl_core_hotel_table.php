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
        Schema::create('tbl_core_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('hotel_location');
            $table->string('hotel_images')->nullable();
            $table->decimal('hotel_price', 10, 2);
            $table->string('hotel_limit');
            $table->string('room_type');
            $table->string('accomodation_type'); // Change to text type
            $table->string('hotel_ratings');
            $table->text('hotel_description');
            $table->text('hotel_included');
            $table->text('hotel_policy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_core_hotel');
    }
};
