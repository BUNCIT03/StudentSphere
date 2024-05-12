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
        Schema::create('staff', function (Blueprint $table) {
            $table->string('Staff_ID')->primary();
            $table->string('Staff_Name');
            $table->string('Staff_Email');
            $table->integer('Staff_PhoneNum');
            $table->string('Platinum_ID');
            $table->foreign('Platinum_ID')->references('Platinum_ID')->on('platinums');
            $table->string('CRMP_ID');
            $table->foreign('CRMP_ID')->references('CRMP_ID')->on('c_r_m_p_s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
