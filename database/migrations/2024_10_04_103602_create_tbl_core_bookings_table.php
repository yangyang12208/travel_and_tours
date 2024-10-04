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
        Schema::create('tbl_core_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('car_type');
            $table->string('car_name');
            $table->integer('car_price');
            $table->string('car_images')->nullable();
            $table->string('car_seats');
            $table->string('car_features');
            $table->string('car_transmission');
            $table->text('car_doors'); // Change to text type
            $table->integer('driver_age');
            $table->string('driver_name');
            $table->text('car_description');
            $table->text('car_included');
            $table->text('car_policy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_core_bookings');
    }
};
