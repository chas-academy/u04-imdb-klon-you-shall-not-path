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
        Schema::create('vote', function (Blueprint $table) {
            $table->unsignedBigInteger('vote_id')->autoIncrement();
            $table->unsignedBigInteger('vote');
            // $table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
            // $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
