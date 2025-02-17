<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [

            ['genre_id' => 12, 'title' => 'Adventure'],
            ['genre_id' => 14, 'title' => 'Fantasy'],
            ['genre_id' => 16, 'title' => 'Animation'],
            ['genre_id' => 18, 'title' => 'Drama'],
            ['genre_id' => 27, 'title' => 'Horror'],
            ['genre_id' => 28, 'title' => 'Action'],
            ['genre_id' => 35, 'title' => 'Comedy'],
            ['genre_id' => 36, 'title' => 'History'],
            ['genre_id' => 37, 'title' => 'Western'],
            ['genre_id' => 53, 'title' => 'Thriller'],
            ['genre_id' => 80, 'title' => 'Crime'],
            ['genre_id' => 99, 'title' => 'Documentary'],
            ['genre_id' => 878, 'title' => 'Science Fiction'],
            ['genre_id' => 9648, 'title' => 'Mystery'],
            ['genre_id' => 10402, 'title' => 'Music'],
            ['genre_id' => 10749, 'title' => 'Romance'],
            ['genre_id' => 10751, 'title' => 'Family'],
            ['genre_id' => 10752, 'title' => 'War'],
            ['genre_id' => 10770, 'title' => 'TV Movie'],

        ];

        DB::table('genre')->insert($genres);
    }
}
