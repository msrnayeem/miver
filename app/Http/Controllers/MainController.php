<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.user.index');
    }
    public function profile()
    {
        return view('pages.user.profile');
    }
}
