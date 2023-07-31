<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      
        Package::create([
            'gig_id' => 1,
            'name' => 'Basic',
            'price' => 29.99,
            'delivery_time' => 3,
            'delivery_details' => 'Sample delivery details for the Basic Package.',
        ]);

        Package::create([
            'gig_id' => 1,
            'name' => 'Standard',
            'price' => 39.99,
            'delivery_time' => 7,
            'delivery_details' => 'Sample delivery details for the Standard Package.',
        ]);

        Package::create([
            'gig_id' => 1,
            'name' => 'Premium',
            'price' => 49.99,
            'delivery_time' => 15,
            'delivery_details' => 'Sample delivery details for the Standard Package.',
        ]);
      
        Package::create([
            'gig_id' => 2,
            'name' => 'Basic',
            'price' => 50.99,
            'delivery_time' => 3,
            'delivery_details' => 'Sample delivery details for the Basic Package.',
        ]);

        Package::create([
            'gig_id' => 2,
            'name' => 'Standard',
            'price' => 79.99,
            'delivery_time' => 7,
            'delivery_details' => 'Sample delivery details for the Standard Package.',
        ]);

        Package::create([
            'gig_id' => 2,
            'name' => 'Premium',
            'price' => 90.99,
            'delivery_time' => 15,
            'delivery_details' => 'Sample delivery details for the Standard Package.',
        ]);
    }
}
