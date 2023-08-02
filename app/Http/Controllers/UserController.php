<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        if (session()->has('id')) {

            $userId = session()->get('id');

            $user = User::with(['gigs.packages' => function ($query) {
                $query->orderBy('price', 'asc')->take(1);
            }])->find($userId);

            return view('pages.user.profile', compact('user'));

        } else {

            return redirect()->route('index');
        }
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
