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
        Schema::create('publications', function (Blueprint $table) {
            $table->string('Publication_ID')->primary();
            $table->string('Publication_Type');
            $table->string('Publication_Doc');
            $table->string('Publication_Author');
            $table->date('Publication_Date');
            $table->string('Publication_DOI');
            $table->string('Platinum_ID');
            $table->foreign('Platinum_ID')->references('Platinum_ID')->on('platinums');
            $table->string('Expert_ID');
            $table->foreign('Expert_ID')->references('Expert_ID')->on('expert_domains');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
