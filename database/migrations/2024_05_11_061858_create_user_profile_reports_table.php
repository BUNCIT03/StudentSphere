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
        Schema::create('user_profile_reports', function (Blueprint $table) {
            $table->string('UProfile_ID');
            $table->string('Platinum_Name');
            $table->string('Staff_ID');
            $table->foreign('Staff_ID')->references('Staff_ID')->on('staff');
            $table->string('Platinum_ID');
            $table->foreign('Platinum_ID')->references('Platinum_ID')->on('platinums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile_reports');
    }
};
