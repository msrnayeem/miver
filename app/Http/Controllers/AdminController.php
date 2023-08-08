<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\Order;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $order_count = Order::count();
        $user_count = User::where('is_admin', '!=', 1)->count();
        $gig_count = Gig::count();
        $admin_name = User::select('name')->find(session()->get('id'));
        return view('pages.admin.admin-home', compact('order_count', 'user_count', 'gig_count','admin_name'));
    }

    public function profile()
    {
        $user = User::select('id', 'name', 'email', 'profile_info', 'created_at', 'is_admin')->find(session()->get('id'));
        return view('pages.admin.admin-profile', compact('user'));
    }

    public function adminInfoUpdate(Request $request)
    {
        $user = User::find(session()->get('id'));
        $user->name = $request->name;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function adminPasswordChange(Request $request)
    {
         
        $user = User::find(session()->get('id'));

        if (! Hash::check($request->currentPassword, $user->password)) {

           $response = [
            'status' => 'error',
            'message' => 'Current password does not match',
            ];
        }
        else{
            $user->password = Hash::make($request->newPassword);
            $user->save();
    
            $response = [
            'status' => 'success',
            'message' => 'Password changed successfully',
            ];

        }
        return response()->json($response);
    }

    public function userList()
    {
        $users = User::select('id', 'name', 'email', 'registration_date', 'is_active')
            ->where('is_admin', '!=', 1)
            ->get();

        return view('pages.admin.user-list', compact('users'));
    }
}
