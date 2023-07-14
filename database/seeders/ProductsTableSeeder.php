<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\SubSubCategory;
use App\Models\User;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::truncate();

        // Get all user IDs and subsubcategory IDs
        $userIds = User::pluck('id')->toArray();
        $subSubCategoryIds = SubSubCategory::pluck('id')->toArray();

        // Create dynamic products
        $products = [];
        for ($i = 1; $i <= 35; $i++) {
            $products[] = [
                'name' => 'Product name ' . $i,
                'details' => 'Details for product ' . $i,
                'price' => mt_rand(1, 100) + (mt_rand(0, 99) / 100), // Random decimal value from 1 to 100
                'user_id' => $userIds[array_rand($userIds)],
                'sub_sub_category_id' => $subSubCategoryIds[array_rand($subSubCategoryIds)],
            ];
        }

        // Insert the products into the database
        Product::insert($products);
    }
}
