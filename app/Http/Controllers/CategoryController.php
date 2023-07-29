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
        $category = $request->input('category');
        
        $categories = Category::with('subCategories.subSubCategories')
            ->where('bannerImageLink', $category)
            ->get(['id', 'name']); // Retrieve only id and name of categories

        $subSubcategoriesData = [];
        $subCategoriesInfo = [];
        
        if($request->input('info') == 'sub_category'){
            foreach ($categories as $category) {
                foreach ($category->subCategories as $subCategory) {
                    $subCategoriesInfo[] = [
                        'id' => $subCategory->id,
                        'name' => $subCategory->name,
                    ];
                }
            }
    
            return response()->json($subCategoriesInfo);
        } 
        else{
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

}
