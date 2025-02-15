<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewAndVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $review = [
            [
                'movie_id' => 3,
                'user_id' => 1,
                'title' => 'Review 1',
                'review' => 'This is a review of the movie',
                'positive_vote_count' => 0,
                'negative_vote_count' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        $vote = [
            [
                'movie_id' => 3,
                'user_id' => 1,
                'vote' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]    
        ];

        DB::table('review')->insert($review);
        DB::table('vote')->insert($vote);
    }
}
