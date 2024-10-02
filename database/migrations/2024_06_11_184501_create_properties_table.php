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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('slug')->unique();
            $table->string('type');
            $table->integer('price');
            $table->integer('size');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->string('description')->nullable();
            $table->string('image')->nullable(); // Add this line

//            $table->boolean('status')->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
