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
        Schema::create('movie', function (Blueprint $table) {
            $table->id('movie_id');
            $table->string('title', 255);
            $table->mediumText('overview');
            $table->unsignedInteger('vote_count');
            $table->float('vote_avr')->unsigned();
            $table->foreignId('review_id')->references('review_id')->on('review')->onDelete('cascade'); // Foreign key
            $table->date('release_date');
            $table->timestamps();
            $table->string('trailer_file_path', 255);
        });

        Schema::create('genre', function (Blueprint $table) {
            $table->id('genre_id');
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
        Schema::dropIfExists('genre');
    }
};
