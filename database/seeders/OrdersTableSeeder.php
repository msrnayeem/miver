<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1); // Assuming user with ID 2 is the buyer of these orders
        $service = Service::find(1); // Assuming service with ID 1 is being ordered

        $user->orders()->create([
            'service_id' => $service->id,
            'order_date' => now(),
            'order_status' => 'pending',
            'order_total' => $service->service_price,
        ]);
    }
}
