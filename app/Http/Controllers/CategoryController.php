<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($category)
    {
        $category = Category::with('subCategories.subSubCategories', 'faqs', 'guides')
            ->where('bannerImageLink', $category)
            ->first();

        return view('pages.category.categoryMaster', compact('category'));
    }

    public function getCategoryInfo(Request $request)
{
    $occupation = $request->input('occupation');
    
    $categories = Category::with('subCategories.subSubCategories')
        ->where('bannerImageLink', $occupation)
        ->get(['id', 'name']); // Retrieve only id and name of categories

    $subSubcategoriesData = [];
    foreach ($categories as $category) {
        foreach ($category->subCategories as $subCategory) {
            foreach ($subCategory->subSubCategories as $subSubCategory) {
                $subSubcategoriesData[] = [
                    'id' => $subSubCategory->id,
                    'name' => $subSubCategory->name,
                ];
            }
        }
    }

    return response()->json($subSubcategoriesData);
}

}
