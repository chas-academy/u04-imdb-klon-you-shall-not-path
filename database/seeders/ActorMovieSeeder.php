<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorMovieSeeder extends Seeder
{
    public function run(): void
    {
        $movieActors = [
            ['movie_title' => 'Sonic the Hedgehog 3', 'actor_name' => 'Jim Carrey'],
            ['movie_title' => 'Sonic the Hedgehog 3', 'actor_name' => 'Ben Schwartz'],
            ['movie_title' => 'Sonic the Hedgehog 3', 'actor_name' => 'Keanu Reeves'],
            ['movie_title' => 'Back in Action', 'actor_name' => 'Cameron Diaz'],
            ['movie_title' => 'Back in Action', 'actor_name' => 'Jamie Foxx'],
            ['movie_title' => 'Back in Action', 'actor_name' => 'McKenna Roberts'],
            ['movie_title' => 'Kraven the Hunter', 'actor_name' => 'Aaron Taylor-Johnson'],
            ['movie_title' => 'Kraven the Hunter', 'actor_name' => 'Ariana DeBose'],
            ['movie_title' => 'Kraven the Hunter', 'actor_name' => 'Fred Hechinger'],
            ['movie_title' => 'Nosferatu', 'actor_name' => 'Lily-Rose Depp'],
            ['movie_title' => 'Nosferatu', 'actor_name' => 'Nicholas Hoult'],
            ['movie_title' => 'Nosferatu', 'actor_name' => 'Willem Dafoe'],
            ['movie_title' => 'Mufasa: The Lion King', 'actor_name' => 'Aaron Pierre'],
            ['movie_title' => 'Mufasa: The Lion King', 'actor_name' => 'Kelvin Harrison Jr.'],
            ['movie_title' => 'Mufasa: The Lion King', 'actor_name' => 'Tiffany Boone'],
            ['movie_title' => 'Alarum', 'actor_name' => 'Scott Eastwood'],
            ['movie_title' => 'Alarum', 'actor_name' => 'Sylvester Stallone'],
            ['movie_title' => 'Alarum', 'actor_name' => 'Willa Fitzgerald'],
            ['movie_title' => 'Devara: Part 1', 'actor_name' => 'N.T. Rama Rao Jr.'],
            ['movie_title' => 'Devara: Part 1', 'actor_name' => 'Saif Ali Khan'],
            ['movie_title' => 'Devara: Part 1', 'actor_name' => 'Prakash Raj'],
            ['movie_title' => 'Moana 2', 'actor_name' => 'Dwayne Johnson'],
            ['movie_title' => 'Moana 2', 'actor_name' => 'Rose Matafeo'],
            ['movie_title' => 'Moana 2', 'actor_name' => 'David Fane'],
            ['movie_title' => 'Gladiator II', 'actor_name' => 'Paul Mescal'],
            ['movie_title' => 'Gladiator II', 'actor_name' => 'Denzel Washington'],
            ['movie_title' => 'Gladiator II', 'actor_name' => 'Pedro Pascal'],
            ['movie_title' => 'Venom: The Last Dance', 'actor_name' => 'Tom Hardy'],
            ['movie_title' => 'Venom: The Last Dance', 'actor_name' => 'Chiwetel Ejiofor'],
            ['movie_title' => 'Venom: The Last Dance', 'actor_name' => 'Juno Temple'],
        ];

        foreach ($movieActors as $entry) {
            $movie = DB::table('movie')->where('title', $entry['movie_title'])->first();
            $actor = DB::table('actor')->where('name', $entry['actor_name'])->first();

            if ($movie && $actor) {
                DB::table('movie_actor')->insert([
                    'movie_id' => $movie->id,
                    'actor_id' => $actor->id,
                ]);
            }
        }
    }
}
