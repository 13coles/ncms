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
        Schema::create('accreditation', function (Blueprint $table) {
            $table->id();
            $table->string('qualification', 255);
            $table->string('accreditation_number', 255);
            $table->date('validity');
            $table->decimal('assessment_fee', 8, 2); 
            $table->string('number_hours', 255);
            $table->string('number_candidates', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accreditation');
    }
};
