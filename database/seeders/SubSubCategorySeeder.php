<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $subCategories = SubCategory::all();

        foreach ($subCategories as $subCategory) {
            $existingSubSubCategories = $subCategory->subSubCategories;

            if ($existingSubSubCategories->count() < 5) {
                $remainingSubSubCategories = 5 - $existingSubSubCategories->count();

                for ($i = 1; $i <= $remainingSubSubCategories; $i++) {
                    $subCategory->subSubCategories()->create([
                        'name' => 'Sub-Sub Category '.$i,
                    ]);
                }
            }
        }
    }
}
