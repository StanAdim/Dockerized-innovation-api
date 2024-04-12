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
        Schema::create('projections', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('applicationCode');
            $table->boolean('isFilled')->default(false);
            $table->string('expectedRevenue');
            $table->string('machineEquipment'); //array
            $table->string('workingCapital');
            $table->longText('investmentPlan');
            $table->longText('financingSource');
            $table->longText('supportNeeded');
            $table->string('challenges'); //array
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projections');
    }
};
