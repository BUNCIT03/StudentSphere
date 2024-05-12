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
        Schema::create('draft_performances', function (Blueprint $table) {
            $table->string('Draft_ID')->primary();
            $table->string('Platinum_ID');
            $table->foreign('Platinum_ID')->references('Platinum_ID')->on('platinums');
            $table->string('Draft_Number');
            $table->date('DraftStart_Date');
            $table->date('DraftEnd_Date');
            $table->integer('DraftPage_Number');
            $table->integer('DraftDeclare_Cycle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draft_performances');
    }
};
