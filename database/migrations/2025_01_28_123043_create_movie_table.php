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
            $table->mediumText('overview')->default('');
            $table->unsignedInteger('vote_count')->default(0);
            $table->float('vote_avr')->unsigned()->default(0);
            $table->date('release_date');
            $table->string('poster_file_path')->default(0);
            $table->string('original_height')->default(1000);
            $table->string('trailer_file_path', 255)->nullable();
            $table->timestamps();
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
