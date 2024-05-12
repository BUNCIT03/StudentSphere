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
        Schema::create('registrations', function (Blueprint $table) {
            $table->string('Reg_ID')->primary();
            $table->string('Type');
            $table->string('Title');
            $table->string('Fullname');
            $table->integer('IC');
            $table->string('Gender');
            $table->string('Religion');
            $table->string('Race');
            $table->string('Citizenship');
            $table->string('Address');
            $table->integer('PhoneNum');
            $table->string('Email');
            $table->string('FbName');
            $table->string('CurrentEduLvl');
            $table->string('EduField');
            $table->string('EduInstitute');
            $table->string('Occupation');
            $table->string('Sponsorship');
            $table->string('Program');
            $table->integer('Batch');
            $table->string('Platinum_ID');
            $table->foreign('Platinum_ID')->references('Platinum_ID')->on('platinums');
            $table->string('Staff_ID');
            $table->foreign('Staff_ID')->references('Staff_ID')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
