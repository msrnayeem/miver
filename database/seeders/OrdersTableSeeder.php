<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;

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
