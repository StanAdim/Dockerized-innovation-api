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
        Schema::create('personal_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('applicationCode');
            $table->string('fullName');
            $table->string('birthYear');
            $table->string('nidaNumber');
            $table->string('educationLevel');
            $table->string('BusinessRegStatus');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('businessSector')->nullable();
            $table->string('businessName')->nullable();
            $table->string('businessLocation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_profiles');
    }
};
