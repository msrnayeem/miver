<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubSubCategory;
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

    public function getSubCategory(Request $request)
    {
        $category = $request->input('category');
        
        $categories = Category::with('subCategories')
            ->where('bannerImageLink', $category)
            ->get(['id', 'name']); // Retrieve only id and name of categories

        $subCategoriesInfo = [];
        
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

    public function getSubSubCategory(Request $request){
        $subSubCategoryInfo = SubSubCategory :: where('sub_category_id', $request->input('SubCategory'))->get(['id', 'name']);
        return response()->json($subSubCategoryInfo);
    }


}
