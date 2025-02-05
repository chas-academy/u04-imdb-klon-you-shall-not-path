<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorMovieSeeder extends Seeder
{
    public function run(): void
    {
        $movieActors = [
            ['title' => 'Sonic the Hedgehog 3', 'name' => 'Jim Carrey'],
            ['title' => 'Sonic the Hedgehog 3', 'name' => 'Ben Schwartz'],
            ['title' => 'Sonic the Hedgehog 3', 'name' => 'Keanu Reeves'],
            ['title' => 'Back in Action', 'name' => 'Cameron Diaz'],
            ['title' => 'Back in Action', 'name' => 'Jamie Foxx'],
            ['title' => 'Back in Action', 'name' => 'McKenna Roberts'],
            ['title' => 'Kraven the Hunter', 'name' => 'Aaron Taylor-Johnson'],
            ['title' => 'Kraven the Hunter', 'name' => 'Ariana DeBose'],
            ['title' => 'Kraven the Hunter', 'name' => 'Fred Hechinger'],
            ['title' => 'Nosferatu', 'name' => 'Lily-Rose Depp'],
            ['title' => 'Nosferatu', 'name' => 'Nicholas Hoult'],
            ['title' => 'Nosferatu', 'name' => 'Willem Dafoe'],
            ['title' => 'Mufasa: The Lion King', 'name' => 'Aaron Pierre'],
            ['title' => 'Mufasa: The Lion King', 'name' => 'Kelvin Harrison Jr.'],
            ['title' => 'Mufasa: The Lion King', 'name' => 'Tiffany Boone'],
            ['title' => 'Alarum', 'name' => 'Scott Eastwood'],
            ['title' => 'Alarum', 'name' => 'Sylvester Stallone'],
            ['title' => 'Alarum', 'name' => 'Willa Fitzgerald'],
            ['title' => 'Devara: Part 1', 'name' => 'N.T. Rama Rao Jr.'],
            ['title' => 'Devara: Part 1', 'name' => 'Saif Ali Khan'],
            ['title' => 'Devara: Part 1', 'name' => 'Prakash Raj'],
            ['title' => 'Moana 2', 'name' => 'Dwayne Johnson'],
            ['title' => 'Moana 2', 'name' => 'Rose Matafeo'],
            ['title' => 'Moana 2', 'name' => 'David Fane'],
            ['title' => 'Gladiator II', 'name' => 'Paul Mescal'],
            ['title' => 'Gladiator II', 'name' => 'Denzel Washington'],
            ['title' => 'Gladiator II', 'name' => 'Pedro Pascal'],
            ['title' => 'Venom: The Last Dance', 'name' => 'Tom Hardy'],
            ['title' => 'Venom: The Last Dance', 'name' => 'Chiwetel Ejiofor'],
            ['title' => 'Venom: The Last Dance', 'name' => 'Juno Temple'],
        ];

        foreach ($movieActors as $entry) {
            $movie = DB::table('movie')->where('title', $entry['title'])->first();
            $actor = DB::table('actor')->where('name', $entry['name'])->first();

            if ($movie && $actor) {
                // Ensure the correct primary key names
                $movie_id = $movie->movie_id;
                $actor_id = $actor->actor_id;

                // Avoid duplicate insertions
                $exists = DB::table('movie_actor')
                    ->where('movie_id', $movie_id)
                    ->where('actor_id', $actor_id)
                    ->exists();

                if (!$exists) {
                    DB::table('movie_actor')->insert([
                        'movie_id' => $movie_id,
                        'actor_id' => $actor_id,
                    ]);
                }
            }
        }
    }
}

