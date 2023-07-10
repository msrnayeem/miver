<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
    public function login()
    {
        return view('pages.user.login');
    }
    public function loginSubmitted(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        return redirect()->route('profile');
    }
}
