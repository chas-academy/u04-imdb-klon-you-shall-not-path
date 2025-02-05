<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    public function run(): void
    {
        $actors = [
            ['name' => 'Jim Carrey'],
            ['name' => 'Ben Schwartz'],
            ['name' => 'Keanu Reeves'],
            ['name' => 'Cameron Diaz'],
            ['name' => 'Jamie Foxx'],
            ['name' => 'McKenna Roberts'],
            ['name' => 'Aaron Taylor-Johnson'],
            ['name' => 'Ariana DeBose'],
            ['name' => 'Fred Hechinger'],
            ['name' => 'Lily-Rose Depp'],
            ['name' => 'Nicholas Hoult'],
            ['name' => 'Willem Dafoe'],
            ['name' => 'Aaron Pierre'],
            ['name' => 'Kelvin Harrison Jr.'],
            ['name' => 'Tiffany Boone'],
            ['name' => 'Scott Eastwood'],
            ['name' => 'Sylvester Stallone'],
            ['name' => 'Willa Fitzgerald'],
            ['name' => 'N.T. Rama Rao Jr.'],
            ['name' => 'Saif Ali Khan'],
            ['name' => 'Prakash Raj'],
            ['name' => 'Dwayne Johnson'],
            ['name' => 'Rose Matafeo'],
            ['name' => 'David Fane'],
            ['name' => 'Paul Mescal'],
            ['name' => 'Denzel Washington'],
            ['name' => 'Pedro Pascal'],
            ['name' => 'Tom Hardy'],
            ['name' => 'Chiwetel Ejiofor'],
            ['name' => 'Juno Temple'],
        ];

        DB::table('actor')->insert($actors);
    }
}
