<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movie_genre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('genre_id');

            $table->foreign('movie_id')->references('movie_id')->on('movie')->onDelete('cascade');
            $table->foreign('genre_id')->references('genre_id')->on('genre')->onDelete('cascade');
        });

        Schema::create('actor_genre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('genre_id');

            $table->foreign('actor_id')->references('actor_id')->on('actor')->onDelete('cascade');
            $table->foreign('genre_id')->references('genre_id')->on('genre')->onDelete('cascade');
        });

        Schema::create('movie_actor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('actor_id');

            $table->foreign('movie_id')->references('movie_id')->on('movie')->onDelete('cascade');
            $table->foreign('actor_id')->references('actor_id')->on('actor')->onDelete('cascade');
        });

        Schema::create('movie_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('list_id');

            $table->foreign('movie_id')->references('movie_id')->on('movie')->onDelete('cascade');
            $table->foreign('list_id')->references('list_id')->on('list')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_genre');
        Schema::dropIfExists('actor_genre');
        Schema::dropIfExists('movie_actor');
        Schema::dropIfExists('movie_list');
    }
};
