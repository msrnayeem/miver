<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        if (session()->has('id')) {
            //check id in user table
            $user = User::where('id', session()->get('id'))->first();
            $gig_count=5;
            return view('pages.user.profile', compact('user'));
        } else {
            return redirect()->route('index');
        }
    }

    public function personalInfo()
    {
        if (session()->has('id')) {
            return view('pages.user.personal-info')->with('userId',session()->has('id'));
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
