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
        Schema::create('tbl_core_destinations', function (Blueprint $table) {
            $table->id();
            $table->text('destinations');
            $table->text('Adventours');
            $table->text('leisure_and_scenic_tours');
            $table->text('special_and_educational_tours');
            $table->text('destination_images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_core_destinations');
    }
};
