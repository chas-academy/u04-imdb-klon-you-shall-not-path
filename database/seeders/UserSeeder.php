<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'steve',
            'email' => 'steve@email.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => 'MJFJXEJW26',
            // Continue
        ];
    }
}
