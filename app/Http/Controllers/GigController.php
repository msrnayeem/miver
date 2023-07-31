<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function showAllProducts(Request $request)
    {
        $query = Gig::query();

        // Filter products based on price range
        $priceRange = $request->input('price-range');
        if ($priceRange) {
            $query->whereBetween('price', [0, $priceRange]);
        }

        // Filter products based on category
        $category = $request->input('category');

        if ($category) {
            $query->where('sub_sub_category_id', $category);
        }

        // Include the user relationship
        $query->with('user');

        // Paginate the filtered products
        $gigs = $query->paginate(10);

        return view('pages.gigs.all-gigs', compact('gigs'));
    }

    public function singleProduct($id)
    {
        $gig = Gig::with(['subSubCategory.subCategory', 'user:id,name,email'])->find($id);

        return view('pages.gigs.single-gig', compact('gig'));
    }
}
