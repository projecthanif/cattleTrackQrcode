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
        Schema::create('cattle_health_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cattle_id')->constrained('cattle');
            $table->longText('description');
            $table->string('medication')->nullable();
            $table->string('dosage')->nullable();
            $table->longText('veterinary_notes')->nullable();
            $table->timestamp('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cattle_health_records');
    }
};
