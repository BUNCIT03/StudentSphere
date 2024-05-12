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
        Schema::create('c_r_m_p_s', function (Blueprint $table) {
            $table->string('CRMP_ID')->primary();
            $table->string('CRMP_Name');
            $table->string('CRMP_Email');
            $table->integer('CRMP_PhoneNum');
            $table->string('Platinum_ID');
            $table->foreign('Platinum_ID')->references('Platinum_ID')->on('platinums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_r_m_p_s');
    }
};
