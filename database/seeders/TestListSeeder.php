<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Actor;

class TestListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::factory()->count(1000)->make()->each(function ($actor) {
            $actor->timestamps = false;
            $actor->save();
        });
    }
    
}
