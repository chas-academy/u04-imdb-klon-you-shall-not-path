<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $TestList = [
            [
                'title' => 'List 1',
                'overview' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'List 2',
                'overview' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'List 5',
                'overview' => 'Missing',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('list')->insert($TestList);

    }
}
