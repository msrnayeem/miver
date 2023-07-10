<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        if(session()->has('user_name')){
            return view('pages.user.profile');
        }
        else{
            return redirect()->route('index');
        }
       
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
        $email = $request->input('email');
        $password = $request->input('password');

        // Assuming you have a "User" model with an "email" column
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password'])->withInput();
        }
        // Assuming the password is stored as a hash in the "password" column
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password'])->withInput();
        }

        // //set session
      
         $request->session()->put('user_name', $user->username);
        
        // //set cookie
        // $cookie = cookie('user_name', $user->username, 60 * 24 * 30);
     


        return redirect()->route('profile');
    }
    
    //logout
    public function logout()
    {
        session()->flush();

        return redirect()->route('login');
    }
}
