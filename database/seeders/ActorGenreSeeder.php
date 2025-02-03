<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorGenreSeeder extends Seeder
{
    public function run(): void
    {
        $actorGenres = [
            ['actor_name' => 'Jim Carrey', 'genre_ids' => [28, 878, 35, 10751]],
            ['actor_name' => 'Cameron Diaz', 'genre_ids' => [28, 35]],
            ['actor_name' => 'Aaron Taylor-Johnson', 'genre_ids' => [28, 878, 12, 14, 53]],
            ['actor_name' => 'Lily-Rose Depp', 'genre_ids' => [27, 14]],
            ['actor_name' => 'Aaron Pierre', 'genre_ids' => [12, 10751, 16]],
            ['actor_name' => 'Scott Eastwood', 'genre_ids' => [28, 80, 53]],
            ['actor_name' => 'N.T. Rama Rao Jr.', 'genre_ids' => [28, 18]],
            ['actor_name' => 'Dwayne Johnson', 'genre_ids' => [16, 12, 10751, 35, 9648]],
            ['actor_name' => 'Paul Mescal', 'genre_ids' => [28, 12, 18]],
            ['actor_name' => 'Tom Hardy', 'genre_ids' => [28, 878, 12]],
        ];

        foreach ($actorGenres as $entry) {
            $actor = DB::table('actor')->where('name', $entry['actor_name'])->first();

            if ($actor) {
                foreach ($entry['genre_ids'] as $genre_id) {
                    DB::table('actor_genre')->insert([
                        'actor_id' => $actor->id,
                        'genre_id' => $genre_id,
                    ]);
                }
            }
        }
    }
}
