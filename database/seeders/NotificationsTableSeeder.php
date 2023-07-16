<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1); // Assuming user with ID 1 should receive these notifications

        $user->notifications()->create([
            'notification_text' => 'New order received!',
            'notification_date' => now(),
            'is_read' => false,
        ]);
    }
}
