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
        Schema::create('weekly_foci', function (Blueprint $table) {
            $table->string('Focus_ID')->primary();
            $table->string('Platinum_ID');
            $table->foreign('Platinum_ID')->references('Platinum_ID')->on('platinums');
            $table->string('FocusBlock_Type');
            $table->date('FocusStart_Date');
            $table->date('FocusEnd_Date');
            $table->string('Focus_Content');
            $table->string('Focus_Comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_foci');
    }
};
