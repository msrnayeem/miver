<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function allGigs(Request $request)
    {
        $gigsQuery = Gig::with(['seller', 'packages' => function ($query) {
            $query->orderBy('price', 'asc');
        }]);
        
        if (session()->has('id')) {
            $gigsQuery->where('user_id', '!=', session()->get('id'));
        }

        $gigs = $gigsQuery->paginate(10);

        return view('pages.gigs.all-gigs', compact('gigs'));
    }

    public function gig($id)
    {
        $gig = Gig::with(['packages','subSubCategory.subCategory'])->find($id);
        
        return view('pages.gigs.single-gig', compact('gig'));
    }
}
