<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function notification()
    {
        return view('layouts.n');
    }

    public function index()
    {
        return view('pages.index');
    }

    public function profile()
    {
        if (session()->has('id')) {
            //check id in user table
            $user = User::where('id', session()->get('id'))->first();

            return view('pages.user.profile', compact('user'));
        } else {
            return redirect()->route('index');
        }

    }

    public function profilePic(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = session()->get('id').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            //if file exists than overwrite

            // return riderct with msg

            return redirect()->back()->withErrors(['image' => 'Image uploaded successfully.']);
        }

        return redirect()->back()->withErrors(['image' => 'No image selected.']);
    }

    public function loginSubmitted(Request $request)
    {
        $email = $request->input('signInemail');
        $password = $request->input('signInpassword');

        // Assuming you have a "User" model with an "email" column
        $user = User::where('email', $email)->first();

        if (! $user) {
            return 'no found';
        }

        // Assuming the password is stored as a hash in the "password" column
        if (! Hash::check($password, $user->password)) {
            return 'Wrong credentials';
        }

        // Set session
        $request->session()->put('user_name', $user->username);
        $request->session()->put('id', $user->id);

        return 'done';
    }

    public function signupSubmitted(Request $request)
    {
        $email = $request->input('signUpemail');
        $password = $request->input('signUppassword');

        // Check if user with the same email already exists
        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            return response()->json(['success' => false, 'message' => 'User with the same email already exists.']);
        }

        // Insert into user table
        $user = new User;
        $user->username = $email;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->profile_info = 'I am a professional freelancer.';
        $user->save();

        // Check if user information is successfully saved
        if ($user->id) {
            return response()->json(['success' => true, 'message' => 'User successfully registered.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Failed to save user information.']);
        }
    }

    //logout
    public function logout()
    {
        //Session::forget('user_name');
        Session::flush();

        return redirect()->route('index');
    }
}
