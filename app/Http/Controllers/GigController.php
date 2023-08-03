<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function allGigs(Request $request)
    {
        $gigs = Gig::with(['user', 'packages' => function ($query) {
            $query->orderBy('price', 'asc');
        }])->paginate(10);
    
        return view('pages.gigs.all-gigs', compact('gigs'));
    }

    public function gig($id)
    {
        $gig = Gig::with(['subSubCategory.subCategory', 'user:id,name,email'])->find($id);

        return view('pages.gigs.single-gig', compact('gig'));
    }
}
