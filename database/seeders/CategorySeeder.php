<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Graphics & Design',
            'Digital Marketing',
            'Writing & Translation',
            'Video & Animation',
            'Music & Audio',
            'Programming & Tech',
            'Business',
            'Lifestyle',
            'Industries',
            'Gaming',
            'Education',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
