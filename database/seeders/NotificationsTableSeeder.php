<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;
use App\Models\User;
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