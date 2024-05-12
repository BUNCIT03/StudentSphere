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
        Schema::create('publication_reports', function (Blueprint $table) {
            $table->string('PubRep_ID')->primary();
            $table->integer('PubRep_totalPub');
            $table->string('PubRep_yearly');
            $table->string('PubRep_Type');
            $table->string('PubRep_CollabAuthors');
            $table->string('Publication_ID');
            $table->foreign('Publication_ID')->references('Publication_ID')->on('publications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_reports');
    }
};
