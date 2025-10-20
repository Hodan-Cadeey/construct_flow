<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->id();
            $table->string('contractor_code')->unique();
            $table->string('legal_name');
            $table->enum('trade', ['electrical', 'plumbing', 'hvac', 'carpentry', 'concrete', 'roofing', 'landscaping', 'other' ]); //keuzes 
            $table->string('country', 2);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractors');
    }
};
