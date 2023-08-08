<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function allGigs(Request $request)
    {
        $gigsQuery = Gig::with(['seller', 'packages' => function ($query) {
            $query->orderBy('price', 'asc');
        }]);

        $user = User :: find(session()->get('id'));
        $status = $request->query('status');

        if($user->is_admin == 1){
            if ($status === null){
                $gigs = $gigsQuery->get();
            }
            else{
                $gigs = $gigsQuery->where('gig_status', $status)->get();
            }
            
            return view('pages.admin.all-gigs', compact('gigs'));
        }
        else{

            if (session()->has('id')) {
                $gigsQuery->where('user_id', '!=', session()->get('id'));
            }

            $gigs = $gigsQuery->paginate(10);
            return view('pages.gigs.all-gigs', compact('gigs'));
        }
       
    }

    public function updateStatus(Request $request){
        $gigId = $request->input('gig_id');
        $newStatus = $request->input('status');

        Gig::where('id', $gigId)->update(['gig_status' => $newStatus]);

        //create history
        History::create([
            'user_id' => session()->get('id'),
            'action' => 'gig status update',
            'description' => 'admin updated gig status.',
        ]);

        return response()->json(['success' => true]);
    }

    public function gig($id)
    {
        $gig = Gig::with(['packages','subSubCategory.subCategory'])->find($id);
        if($gig->user_id == session()->get('id')){
            $order = false;
        }
        else{
            $order = true;
        }
        return view('pages.gigs.single-gig', compact('gig','order'));
    }
}
