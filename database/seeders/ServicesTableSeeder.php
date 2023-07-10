<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;
use Carbon\Carbon;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'user_id' => 1,
                'service_title' => 'Service 1',
                'service_description' => 'This is service 1 description',
                'service_price' => 10.99,
                'service_category' => 1,
                'delivery_time' => Carbon::now()->addDays(3),
                'service_status' => 'active',
            ],
            [
                'user_id' => 2,
                'service_title' => 'Service 2',
                'service_description' => 'This is service 2 description',
                'service_price' => 15.99,
                'service_category' => 2,
                'delivery_time' => Carbon::now()->addDays(5),
                'service_status' => 'active',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}