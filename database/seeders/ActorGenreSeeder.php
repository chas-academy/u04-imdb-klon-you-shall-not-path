<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorGenreSeeder extends Seeder
{
    public function run(): void
    {
        $actorGenres = [
            ['name' => 'Jim Carrey', 'genre_ids' => [28, 878, 35, 10751]],
            ['name' => 'Cameron Diaz', 'genre_ids' => [28, 35]],
            ['name' => 'Aaron Taylor-Johnson', 'genre_ids' => [28, 878, 12, 14, 53]],
            ['name' => 'Lily-Rose Depp', 'genre_ids' => [27, 14]],
            ['name' => 'Aaron Pierre', 'genre_ids' => [12, 10751, 16]],
            ['name' => 'Scott Eastwood', 'genre_ids' => [28, 80, 53]],
            ['name' => 'N.T. Rama Rao Jr.', 'genre_ids' => [28, 18]],
            ['name' => 'Dwayne Johnson', 'genre_ids' => [16, 12, 10751, 35, 9648]],
            ['name' => 'Paul Mescal', 'genre_ids' => [28, 12, 18]],
            ['name' => 'Tom Hardy', 'genre_ids' => [28, 878, 12]],
        ];

        foreach ($actorGenres as $entry) {
            $actor = DB::table('actor')->where('name', $entry['name'])->first();

            if ($actor) {
                $actor_id = $actor->actor_id;

                foreach ($entry['genre_ids'] as $genre_id) {
                    // Check if the entry already exists to prevent duplicates
                    $exists = DB::table('actor_genre')
                        ->where('actor_id', $actor_id)
                        ->where('genre_id', $genre_id)
                        ->exists();

                    if (!$exists) {
                        DB::table('actor_genre')->insert([
                            'actor_id' => $actor_id,
                            'genre_id' => $genre_id,
                        ]);
                    }
                }
            }
        }
    }
}
