<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function showAllProducts(Request $request)
    {
        
        $query = Product::query();

        // Filter products based on price range
        $priceRange = $request->input('price-range');
        if ($priceRange) {
            [$minPrice, $maxPrice] = explode('-', $priceRange);
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }
    
        // Filter products based on category
        $category = $request->input('category');
        if ($category) {
            $query->where('sub_sub_category_id', $category);
        }
         
        // Include the user relationship
        $query->with('user');
    
        // Paginate the filtered products
        $products = $query->paginate(10); // Change the number according to your desired pagination size
       
    return view('pages.product.allProduct', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::with(['subsubcategory.subcategory', 'user:id,username,email'])->find($id);
        return view('pages.product.singleProduct', compact('product'));
    }
}
