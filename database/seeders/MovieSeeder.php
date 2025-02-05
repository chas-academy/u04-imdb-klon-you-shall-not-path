<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Set in a function where it the title of the movie is already inside the table, than skip it
        // Or just run php artisan migrate:fresh --seed, to drop the existing tables with thier respective data, then run everything on a clean slate

        $movies = [
            [
                'title' => 'Sonic the Hedgehog 3',
                'overview' => 'Sonic, Knuckles, and Tails reunite against a powerful new adversary, Shadow, a mysterious villain with powers unlike anything they have faced before. With their abilities outmatched in every way, Team Sonic must seek out an unlikely alliance in hopes of stopping Shadow and protecting the planet.',
                'release_date' => '2024-12-19',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Back in Action',
                'overview' => 'Fifteen years after vanishing from the CIA to start a family, elite spies Matt and Emily jump back into the world of espionage when their cover is blown.',
                'release_date' => '2025-01-15',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Kraven the Hunter',
                'overview' => 'Kraven Kravinoffs complex relationship with his ruthless gangster father, Nikolai, starts him down a path of vengeance with brutal consequences, motivating him to become not only the greatest hunter in the world, but also one of its most feared.',
                'release_date' => '2024-12-11',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Nosferatu',
                'overview' => 'A gothic tale of obsession between a haunted young woman and the terrifying vampire infatuated with her, causing untold horror in its wake.',
                'release_date' => '2024-12-25',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Mufasa: The Lion King',
                'overview' => 'Mufasa, a cub lost and alone, meets a sympathetic lion named Taka, the heir to a royal bloodline. The chance meeting sets in motion an expansive journey of a group of misfits searching for their destiny.',
                'release_date' => '2024-12-18',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Alarum',
                'overview' => 'Two married spies caught in the crosshairs of an international intelligence network will stop at nothing to obtain a critical asset. Joe and Lara are agents living off the grid whose quiet retreat at a winter resort is blown to shreds when members of the old guard suspect the two may have joined an elite team of rogue spies, known as Alarum.',
                'release_date' => '2025-01-16',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Devara: Part 1',
                'overview' => 'Devara, a fearless man from a coastal region, embarks on a perilous journey into the treacherous world of the sea to safeguard the lives of his people. Unbeknownst to him, his brother Bhaira is plotting a conspiracy against him. As events unfold, Devara passes on his legacy to his mild-mannered and timid son, Varada.',
                'release_date' => '2024-09-26',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Moana 2',
                'overview' => 'After receiving an unexpected call from her wayfinding ancestors, Moana journeys alongside Maui and a new crew to the far seas of Oceania and into dangerous, long-lost waters for an adventure unlike anything shes ever faced.',
                'release_date' => '2024-11-21',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Gladiator II',
                'overview' => 'Years after witnessing the death of the revered hero Maximus at the hands of his uncle, Lucius is forced to enter the Colosseum after his home is conquered by the tyrannical Emperors who now lead Rome with an iron fist. With rage in his heart and the future of the Empire at stake, Lucius must look to his past to find strength and honor to return the glory of Rome to its people.',
                'release_date' => '2024-11-05',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Venom: The Last Dance',
                'overview' => 'Eddie and Venom are on the run. Hunted by both of their worlds and with the net closing in, the duo are forced into a devastating decision that will bring the curtains down on Venom and Eddies last dance.',
                'release_date' => '2024-10-22',
                'trailer_file_path' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('movie')->insert($movies);
    }
}
