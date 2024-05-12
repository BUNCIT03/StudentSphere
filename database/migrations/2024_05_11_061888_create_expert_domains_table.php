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
        Schema::create('expert_domains', function (Blueprint $table) {
            $table->string('Expert_ID')->primary();
            $table->string('Expert_Name');
            $table->binary('Expert_Photo');
            $table->string('Expert_Email');
            $table->string('Expert_Publications');
            $table->string('Expert_ExpertiseField');
            $table->string('Expert_BiographicInfo');
            $table->string('Expert_Achivement');
            $table->string('Expert_University');
            $table->string('Expert_Degree');
            $table->string('Expert_Collab');
            $table->string('Expert_Awards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expert_domains');
    }
};
