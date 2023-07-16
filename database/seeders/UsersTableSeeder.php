<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'username' => 'john_doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'profile_info' => 'I am a professional freelancer.',
            'registration_date' => now(),
        ]);

        User::firstOrCreate([
            'username' => 'jane_smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
            'profile_info' => 'Experienced graphic designer.',
            'registration_date' => now(),
        ]);
    }
}
