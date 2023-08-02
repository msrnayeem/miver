<?php

namespace Database\Seeders;

use App\Models\Gig;
use Illuminate\Database\Seeder;

class GigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Gig::create([
            'gig_title' => 'web design',
            'user_id' => 1,
            'sub_sub_category_id' => 1,
            'keyword' => 'development',
            'image_name' => 'sample_gig_1.jpg',
        ]);

        Gig::create([
            'gig_title' => 'app development',
            'user_id' => 2,
            'sub_sub_category_id' => 2,
            'keyword' => 'development',
            'image_name' => 'sample_gig_2.jpg',
        ]);
    }
}
