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
        Schema::create('workout_split_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_split_id')->constrained()->onDelete('cascade');
            $table->foreignId('exercise_id')->constrained()->onDelete('cascade');
            $table->decimal('weight', 8, 2);
            $table->integer('reps');
            $table->integer('sets');
            $table->integer('rest');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_split_details');
    }
};
