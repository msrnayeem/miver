<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

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
