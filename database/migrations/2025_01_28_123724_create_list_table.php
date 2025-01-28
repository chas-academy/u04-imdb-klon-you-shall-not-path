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
        Schema::create('list', function (Blueprint $table) {
            $table->id('list_id');
            $table->string('title', 255);
            $table->mediumText('overview');
            $table->foreignId('user_id')->references('user_id')->on('users')->onDelete('cascade');
            // Add user_id FK
            $table->foreignID('movie_id')->references('movie_id')->on('movie')->onDelete('cascade');
            // Add movie_id FK
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list');
    }
};
