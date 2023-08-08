<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function adminInfo()
    {
        $userId = session()->get('id');
        $admin = User::select('is_admin')->find($userId);
        
        if($admin){
            return $admin->is_admin;
        }
        return false;
        
    }

    public function adminName(){
        $userId = session()->get('id');
        $admin = User::select('name')->find($userId);
 
        return $admin->name;
        
    }

    public function profile()
    {
        if (session()->has('id')) {

            $userId = session()->get('id');

            $user = User::with(['gigs.packages' => function ($query) {
                $query->orderBy('price', 'asc');
            }])->find($userId);
          
            return view('pages.user.profile', compact('user'));

        } else {

            return redirect()->route('index');
        }
    }

    public function updateStatus(Request $request)
    {
        $userId = $request->input('user_id');
        $newStatus = $request->input('status');

        User::where('id', $userId)->update(['is_active' => $newStatus]);

        return response()->json(['success' => true]);
    }

    public function personalInfo()
    {
        if (session()->has('id')) {
            return view('pages.user.personal-info')->with('userId', session()->has('id'));
        } else {
            return redirect()->route('index');
        }
    }

    public function addGig()
    {
        return view('pages.user.add-gig');
    }

    public function gigInfo()
    {
        return view('pages.user.gig-info');
    }


}
