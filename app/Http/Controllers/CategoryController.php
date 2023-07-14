<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function category($category){     
        $category = Category::with('subCategories.subSubCategories', 'faqs', 'guides')
        ->where('bannerImageLink', $category)
        ->first();        
        return view('pages.category.categoryMaster', compact('category'));
    }
    
}
