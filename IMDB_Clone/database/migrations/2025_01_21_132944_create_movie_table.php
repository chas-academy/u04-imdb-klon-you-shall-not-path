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
            $table->string('title');
            $table->mediumtext('overview');
            $table->unsignedInteger('vote_count');
            $table->Float('vote_avr', 8, 1)->unsigned();
            $table->date('realse_date');
            $table->timestamps();
        });

        Schema::create('genre', function (Blueprint $table) {
            $table->id('genre_id');
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
        Schema::dropIfExists('genres');
    }
};
