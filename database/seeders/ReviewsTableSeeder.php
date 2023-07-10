<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Review;
use App\Models\Service;
use App\Models\User;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1); // Assuming user with ID 2 is the reviewer
        $service = Service::find(1); // Assuming service with ID 1 is being reviewed

        $service->reviews()->create([
            'user_id' => $user->id,
            'rating' => 4,
            'comment' => 'Great logo design, highly recommended!',
            'review_date' => now(),
        ]);
    }
}