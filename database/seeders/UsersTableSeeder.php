<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => 'User'.$i, // User 1, User 2, ..., User 10
                'email' => 'user'.$i.'@gmail.com', // user1@gmail.com, user2@gmail.com, ..., user10@gmail.com
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // You can use bcrypt('password') instead of Hash::make('password')
                'remember_token' => Str::random(10), // For Laravel 8 and above, use 'remember_token' => Str::random(10),
            ]);
        }
    }
}
