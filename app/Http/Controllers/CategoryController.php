<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function digitalMarketing(){
        $category = Category::where('name', 'Digital Marketing')
        ->with('subCategories.subSubCategories', 'faqs', 'guides')
        ->first();
        
        return view('pages.category.categoryMaster', compact('category'));
    }
    public function graphicsDesign(){

        $category = Category::where('name', 'Graphics & Design')
        ->with('subCategories.subSubCategories', 'faqs', 'guides')
        ->first();
        
        return view('pages.category.categoryMaster', compact('category'));
        
    }
    public function writingTranslation(){
        return view('pages.category.writingTranslation');
    }
    public function videoAnimation(){
        return view('pages.category.videoAnimation');
    }
    public function musicAudio(){
        return view('pages.category.musicAudio');
    }
    public function programmingTech(){
        return view('pages.category.programmingTech');
    }
    public function business(){
        return view('pages.category.business');
    }
    public function lifestyle(){
        return view('pages.category.lifestyle');
    }
    
}
