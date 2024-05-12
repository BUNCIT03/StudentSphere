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
        Schema::create('expert_reports', function (Blueprint $table) {
            $table->string('ExpertRep_ID');
            $table->string('ExpertRep_Name');
            $table->string('ExpertRep_Timeframe');
            $table->string('ExpertRep_ExpertiseField');
            $table->string('EXpertRep_Publications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_reports');
    }
};
