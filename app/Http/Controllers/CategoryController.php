<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function category($id){
        $category = Category::with('subCategories.subSubCategories', 'faqs', 'guides')
            ->find($id);
        
        return view('pages.category.categoryMaster', compact('category'));
    }
    
}
