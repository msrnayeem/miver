<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
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

        foreach ($categories as $categoryName) {
            $category = Category::where('name', $categoryName)->first();

            if ($category) {
                for ($i = 1; $i <= 3; $i++) {
                    $subCategoryName = 'Sub Category '.$i;

                    $subCategory = $category->subCategories()->where('name', $subCategoryName)->first();

                    if (! $subCategory) {
                        $category->subCategories()->create([
                            'name' => $subCategoryName,
                        ]);
                    }
                }
            }
        }
    }
}
