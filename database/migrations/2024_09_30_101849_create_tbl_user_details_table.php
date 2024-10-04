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
        Schema::create('tbl_user_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id'); // References 'users' table
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('religion');
            $table->string('email')->unique(); // Unique email
            $table->string('phone_number');
            $table->string('user_images')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');                // Define the foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_user_details');
    }
};
