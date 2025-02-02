<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch Movies

        $SonictheHedgehog3 = DB::table('movie')->where('title', 'Sonic the Hedgehog 3')->first();
        $BackinAction = DB::table('movie')->where('title', 'Back in Action')->first();
        $KraventheHunter = DB::table('movie')->where('title', 'Kraven the Hunter')->first();
        $Nosferatu = DB::table('movie')->where('title', 'Nosferatu')->first();
        $MufasaTheLionKing = DB::table('movie')->where('title', 'Mufasa: The Lion King')->first();
        $Alarum = DB::table('movie')->where('title', 'Alarum')->first();
        $DevaraPart1 = DB::table('movie')->where('title', 'Devara: Part 1')->first();
        $Moana2 = DB::table('movie')->where('title', 'Moana 2')->first();
        $Gladiator2 = DB::table('movie')->where('title', 'Gladiator II')->first();
        $VenomTheLastDance = DB::table('movie')->where('title', 'Venom: The Last Dance')->first();

        // Fetch Genres

        $Action = DB::table('genre')->where('title', 'Action')->first();
        $Adventure = DB::table('genre')->where('title', 'Adventure')->first();
        $Animation = DB::table('genre')->where('title', 'Animation')->first();
        $Comedy = DB::table('genre')->where('title', 'Comedy')->first();
        $Crime = DB::table('genre')->where('title', 'Crime')->first();
        $Documentary = DB::table('genre')->where('title', 'Documentary')->first();
        $Drama = DB::table('genre')->where('title', 'Drama')->first();
        $Family = DB::table('genre')->where('title', 'Family')->first();
        $Fantasy = DB::table('genre')->where('title', 'Fantasy')->first();
        $History = DB::table('genre')->where('title', 'History')->first();
        $Horror = DB::table('genre')->where('title', 'Horror')->first();
        $Music = DB::table('genre')->where('title', 'Music')->first();
        $Mystery = DB::table('genre')->where('title', 'Mystery')->first();
        $Romance = DB::table('genre')->where('title', 'Romance')->first();
        $Science_Fiction = DB::table('genre')->where('title', 'Science Fiction')->first();
        $TV_Movie = DB::table('genre')->where('title', 'TV Movie')->first();
        $Thriller = DB::table('genre')->where('title', 'Thriller')->first();
        $War = DB::table('genre')->where('title', 'War')->first();
        $Western = DB::table('genre')->where('title', 'Western')->first();


        $movieGenres = [
            ['movie_id' => $SonictheHedgehog3->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $SonictheHedgehog3->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $SonictheHedgehog3->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $SonictheHedgehog3->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $BackinAction->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $BackinAction->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $KraventheHunter->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $KraventheHunter->movie_id, 'genre_id' => $Science_Fiction->genre_id],
            ['movie_id' => $KraventheHunter->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $KraventheHunter->movie_id, 'genre_id' => $Fantasy->genre_id],
            ['movie_id' => $KraventheHunter->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $Nosferatu->movie_id, 'genre_id' => $Horror->genre_id],
            ['movie_id' => $Nosferatu->movie_id, 'genre_id' => $Fantasy->genre_id],
            ['movie_id' => $MufasaTheLionKing->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $MufasaTheLionKing->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $MufasaTheLionKing->movie_id, 'genre_id' => $Animation->genre_id],  
            ['movie_id' => $Alarum->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Alarum->movie_id, 'genre_id' => $Crime->genre_id],
            ['movie_id' => $Alarum->movie_id, 'genre_id' => $Thriller->genre_id],
            ['movie_id' => $DevaraPart1->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $DevaraPart1->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $Moana2->movie_id, 'genre_id' => $Animation->genre_id],
            ['movie_id' => $Moana2->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $Moana2->movie_id, 'genre_id' => $Family->genre_id],
            ['movie_id' => $Moana2->movie_id, 'genre_id' => $Comedy->genre_id],
            ['movie_id' => $Moana2->movie_id, 'genre_id' => $Mystery->genre_id],
            ['movie_id' => $Gladiator2->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $Gladiator2->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $Gladiator2->movie_id, 'genre_id' => $Drama->genre_id],
            ['movie_id' => $VenomTheLastDance->movie_id, 'genre_id' => $Action->genre_id],
            ['movie_id' => $VenomTheLastDance->movie_id, 'genre_id' => $Adventure->genre_id],
            ['movie_id' => $VenomTheLastDance->movie_id, 'genre_id' => $Science_Fiction->genre_id],
        ];

        DB::table('movie_genre')->insert($movieGenres);

    }
}
