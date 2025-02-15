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
        Schema::create('review', function (Blueprint $table) {
            $table->id('review_id');
            $table->string('title');
            $table->mediumText('review');
            $table->boolean('approved')->default(False);
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('user_id');
            
            $table->foreign('movie_id')->references('movie_id')->on('movie')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('positive_vote_count')->default(0);
            $table->unsignedInteger('negative_vote_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
