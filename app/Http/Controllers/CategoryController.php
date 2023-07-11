<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function digitalMarketing(){
        return view('pages.category.digitalMarketing');
    }
    public function graphicsDesign(){
        return view('pages.category.graphicsDesign');
    }
}
