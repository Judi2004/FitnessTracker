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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')->constrained('categories')->cascaedOnDelete(); //newly added
            $table->string('name'); //newly added
            $table->string('image')->nullable(); //newly added
            $table->string('video')->nullable(); //newly added
            $table->string('description')->nullable(); //newly added
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
